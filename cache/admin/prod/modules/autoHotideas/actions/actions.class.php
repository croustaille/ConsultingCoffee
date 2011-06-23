<?php

require_once(dirname(__FILE__).'/../lib/BaseHotideasGeneratorConfiguration.class.php');
require_once(dirname(__FILE__).'/../lib/BaseHotideasGeneratorHelper.class.php');

/**
 * hotideas actions.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage hotideas
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: actions.class.php 12493 2008-10-31 14:43:26Z fabien $
 */
abstract class autoHotideasActions extends myAdminBaseGeneratedModuleActions{
  protected
  $dmModule;
  
  public function preExecute()
  {
    $this->configuration = new hotideasGeneratorConfiguration();

    if (!$this->getUser()->hasCredential($this->configuration->getCredentials($this->getActionName())))
    {
      $this->forwardSecure();
    }

    $this->dispatcher->notify(new sfEvent($this, 'admin.pre_execute', array('configuration' => $this->configuration)));

    $this->helper = new hotideasGeneratorHelper($this->getDmModule());
  }
  
  protected function getDmModule()
  {
    if (null !== $this->dmModule)
    {
      return $this->dmModule;
    }
    
    return $this->dmModule = $this->context->getModuleManager()->getModule('hotideas');
  }
  
  protected function getSfModule()
  {
    return 'hotideas';
  }

  public function executeExport(sfWebRequest $request)
  {
    $this->doExport(array(
      'format' => $request->getParameter('format', 'csv'),
      'extension' => $request->getParameter('extension', 'csv'),
      'encoding' => $request->getParameter('encoding', 'utf-8'),
      'exportClass' => 'hotideasExport',
      'module' => $this->getDmModule()
    ));
  }
  public function executeIndex(sfWebRequest $request)
  {
    // searching
    if ($request->hasParameter('search'))
    {
      $this->setSearch($request->getParameter('search'));
      $request->setParameter('page', 1);
    }
    
    // sorting
    if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort')))
    {
      $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
    }

    // pager
    if ($request->getParameter('page'))
    {
      $this->setPage($request->getParameter('page'));
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();
  }

  public function executeFilter(sfWebRequest $request)
  {
    $this->setPage(1);

    if ($request->hasParameter('_reset'))
    {
      $this->setFilters($this->configuration->getFilterDefaults());

      $this->redirect('@hotideas');
    }

    $this->filters = $this->configuration->getFilterForm($this->getFilters());

    $this->filters->bind($request->getParameter($this->filters->getName()));
    if ($this->filters->isValid())
    {
      $this->setFilters($this->filters->getValues());

      $this->redirect('@hotideas');
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();

    $this->setTemplate('index');
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    
    foreach($request->getParameter('defaults', array()) as $key => $value)
    {
      $this->form->setDefault($key, $value);
    }

    $this->hotideas = $this->form->getObject();
    
    $this->nearRecords = null;
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->hotideas = $this->form->getObject();

    $this->processForm($request, $this->form);
    
    $this->nearRecords = null;

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->hotideas = $this->getObjectOrForward404($request);
  
    $this->dispatcher->notify(new sfEvent($this, 'admin.edit_object', array('object' => $this->hotideas)));
    
    $this->form = $this->configuration->getForm($this->hotideas);

    $this->nearRecords = $this->hotideas->getPrevNextRecords($this->buildQuery());
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->hotideas = $this->getObjectOrForward404($request);
  
    $this->dispatcher->notify(new sfEvent($this, 'admin.edit_object', array('object' => $this->hotideas)));
    
    $this->form = $this->configuration->getForm($this->hotideas);

    $this->nearRecords = $this->hotideas->getPrevNextRecords($this->buildQuery());

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $record = $this->getObjectOrForward404($request);
  
    $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $record)));
    
    $record->delete();

    $this->getUser()->setFlash('notice', 'The item was deleted successfully.');

    $this->redirect('@hotideas');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      try {
        $hotideas = $form->save();
      } catch (Doctrine_Validator_Exception $e) {

        $errorStack = $form->getObject()->getErrorStack();

        $message = get_class($form->getObject()) . ' has ' . count($errorStack) . " field" . (count($errorStack) > 1 ?  's' : null) . " with validation errors: ";
        foreach ($errorStack as $field => $errors) {
            $message .= "$field (" . implode(", ", $errors) . "), ";
        }
        $message = trim($message, ', ');

        $this->getUser()->setFlash('error', $message);
        return sfView::SUCCESS;
      }

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $hotideas)));
      
      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $redirection = $this->getRouteArrayForAction('new');
      }
      elseif ($request->hasParameter('_save_and_list'))
      {
        $this->getUser()->setFlash('notice', $notice);

        $redirection = $this->getRouteArrayForAction('index');
      }
      elseif ($request->hasParameter('_save_and_next'))
      {
        $this->getUser()->setFlash('notice', $notice);
        $redirection = $this->getRouteArrayForAction('edit', dmArray::get($hotideas->getPrevNextRecords($this->buildQuery()), 'next', $this->form->getObject()));
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);

        $redirection = $this->getRouteArrayForAction('edit', $hotideas);
      }

      $this->redirect($redirection);
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }

  protected function getFilters()
  {
    return $this->getUser()->getAttribute('hotideas.filters', $this->configuration->getFilterDefaults(), 'admin_module');
  }

  protected function setFilters(array $filters)
  {
    return $this->getUser()->setAttribute('hotideas.filters', $filters, 'admin_module');
  }

  protected function getPager()
  {
    $pager = $this->configuration->getPager('Hotideas');
    $pager->setQuery($this->buildQuery());
    $pager->setPage($this->getPage());
    $pager->init();

    return $pager;
  }

  protected function setPage($page)
  {
    $this->getUser()->setAttribute('hotideas.page', $page, 'admin_module');
  }

  protected function getPage()
  {
    return $this->getUser()->getAttribute('hotideas.page', 1, 'admin_module');
  }

  protected function buildQuery()
  {
    $tableMethod = $this->configuration->getTableMethod();
    if (null === $this->filters)
    {
      $this->filters = $this->configuration->getFilterForm($this->getFilters());
    }

    $this->filters->setTableMethod($tableMethod);

    $query = $this->filters->buildQuery($this->getFilters());

    $this->addSearchQuery($query);

    $this->addSortQuery($query);
    
    $event = $this->dispatcher->filter(new sfEvent($this, 'admin.build_query'), $query);
    $query = $event->getReturnValue();

    return $query;
  }
}
