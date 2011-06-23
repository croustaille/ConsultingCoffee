<?php

require_once(dirname(__FILE__).'/../lib/BaseDmUserAdminGeneratorConfiguration.class.php');
require_once(dirname(__FILE__).'/../lib/BaseDmUserAdminGeneratorHelper.class.php');

/**
 * dmUserAdmin actions.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage dmUserAdmin
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: actions.class.php 12493 2008-10-31 14:43:26Z fabien $
 */
abstract class autoDmUserAdminActions extends myAdminBaseGeneratedModuleActions{
  protected
  $dmModule;
  
  public function preExecute()
  {
    $this->configuration = new dmUserAdminGeneratorConfiguration();

    if (!$this->getUser()->hasCredential($this->configuration->getCredentials($this->getActionName())))
    {
      $this->forwardSecure();
    }

    $this->dispatcher->notify(new sfEvent($this, 'admin.pre_execute', array('configuration' => $this->configuration)));

    $this->helper = new dmUserAdminGeneratorHelper($this->getDmModule());
  }
  
  protected function getDmModule()
  {
    if (null !== $this->dmModule)
    {
      return $this->dmModule;
    }
    
    return $this->dmModule = $this->context->getModuleManager()->getModule('dmUser');
  }
  
  protected function getSfModule()
  {
    return 'dmUserAdmin';
  }

  public function executeExport(sfWebRequest $request)
  {
    $this->doExport(array(
      'format' => $request->getParameter('format', 'csv'),
      'extension' => $request->getParameter('extension', 'csv'),
      'encoding' => $request->getParameter('encoding', 'utf-8'),
      'exportClass' => 'dmUserAdminExport',
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

      $this->redirect('@dm_user');
    }

    $this->filters = $this->configuration->getFilterForm($this->getFilters());

    $this->filters->bind($request->getParameter($this->filters->getName()));
    if ($this->filters->isValid())
    {
      $this->setFilters($this->filters->getValues());

      $this->redirect('@dm_user');
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

    $this->dm_user = $this->form->getObject();
    
    $this->nearRecords = null;
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->dm_user = $this->form->getObject();

    $this->processForm($request, $this->form);
    
    $this->nearRecords = null;

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->dm_user = $this->getObjectOrForward404($request);
  
    $this->dispatcher->notify(new sfEvent($this, 'admin.edit_object', array('object' => $this->dm_user)));
    
    $this->form = $this->configuration->getForm($this->dm_user);

    $this->nearRecords = $this->dm_user->getPrevNextRecords($this->buildQuery());
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->dm_user = $this->getObjectOrForward404($request);
  
    $this->dispatcher->notify(new sfEvent($this, 'admin.edit_object', array('object' => $this->dm_user)));
    
    $this->form = $this->configuration->getForm($this->dm_user);

    $this->nearRecords = $this->dm_user->getPrevNextRecords($this->buildQuery());

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $record = $this->getObjectOrForward404($request);
  
    $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $record)));
    
    $record->delete();

    $this->getUser()->setFlash('notice', 'The item was deleted successfully.');

    $this->redirect('@dm_user');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      try {
        $dm_user = $form->save();
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

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $dm_user)));
      
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
        $redirection = $this->getRouteArrayForAction('edit', dmArray::get($dm_user->getPrevNextRecords($this->buildQuery()), 'next', $this->form->getObject()));
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);

        $redirection = $this->getRouteArrayForAction('edit', $dm_user);
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
    return $this->getUser()->getAttribute('dmUserAdmin.filters', $this->configuration->getFilterDefaults(), 'admin_module');
  }

  protected function setFilters(array $filters)
  {
    return $this->getUser()->setAttribute('dmUserAdmin.filters', $filters, 'admin_module');
  }

  protected function getPager()
  {
    $pager = $this->configuration->getPager('DmUser');
    $pager->setQuery($this->buildQuery());
    $pager->setPage($this->getPage());
    $pager->init();

    return $pager;
  }

  protected function setPage($page)
  {
    $this->getUser()->setAttribute('dmUserAdmin.page', $page, 'admin_module');
  }

  protected function getPage()
  {
    return $this->getUser()->getAttribute('dmUserAdmin.page', 1, 'admin_module');
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
