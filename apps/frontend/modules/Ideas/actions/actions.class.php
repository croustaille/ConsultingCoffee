<?php

/**
 * Ideas actions.
 *
 * @package    ConsultingCoffee
 * @subpackage Ideas
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class IdeasActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->ideass = Doctrine_Core::getTable('ideas')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->ideas = Doctrine_Core::getTable('ideas')->find(array($request->getParameter('idideas')));
    $this->forward404Unless($this->ideas);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ideasForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ideasForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($ideas = Doctrine_Core::getTable('ideas')->find(array($request->getParameter('idideas'))), sprintf('Object ideas does not exist (%s).', $request->getParameter('idideas')));
    $this->form = new ideasForm($ideas);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($ideas = Doctrine_Core::getTable('ideas')->find(array($request->getParameter('idideas'))), sprintf('Object ideas does not exist (%s).', $request->getParameter('idideas')));
    $this->form = new ideasForm($ideas);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($ideas = Doctrine_Core::getTable('ideas')->find(array($request->getParameter('idideas'))), sprintf('Object ideas does not exist (%s).', $request->getParameter('idideas')));
    $ideas->delete();

    $this->redirect('Ideas/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $ideas = $form->save();

      $this->redirect('Ideas/edit?idideas='.$ideas->getIdideas());
    }
  }
}
