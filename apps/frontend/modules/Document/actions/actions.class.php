<?php

/**
 * Document actions.
 *
 * @package    ConsultingCoffee
 * @subpackage Document
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DocumentActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->documents = Doctrine_Core::getTable('document')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->document = Doctrine_Core::getTable('document')->find(array($request->getParameter('iddocument')));
    $this->forward404Unless($this->document);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new documentForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new documentForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($document = Doctrine_Core::getTable('document')->find(array($request->getParameter('iddocument'))), sprintf('Object document does not exist (%s).', $request->getParameter('iddocument')));
    $this->form = new documentForm($document);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($document = Doctrine_Core::getTable('document')->find(array($request->getParameter('iddocument'))), sprintf('Object document does not exist (%s).', $request->getParameter('iddocument')));
    $this->form = new documentForm($document);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($document = Doctrine_Core::getTable('document')->find(array($request->getParameter('iddocument'))), sprintf('Object document does not exist (%s).', $request->getParameter('iddocument')));
    $document->delete();

    $this->redirect('Document/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $document = $form->save();

      $this->redirect('Document/edit?iddocument='.$document->getIddocument());
    }
  }
}
