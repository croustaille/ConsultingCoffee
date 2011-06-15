<?php

/**
 * Cv actions.
 *
 * @package    ConsultingCoffee
 * @subpackage Cv
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CvActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->cvs = Doctrine_Core::getTable('cv')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->cv = Doctrine_Core::getTable('cv')->find(array($request->getParameter('id_cv')));
    $this->forward404Unless($this->cv);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new cvForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new cvForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($cv = Doctrine_Core::getTable('cv')->find(array($request->getParameter('id_cv'))), sprintf('Object cv does not exist (%s).', $request->getParameter('id_cv')));
    $this->form = new cvForm($cv);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($cv = Doctrine_Core::getTable('cv')->find(array($request->getParameter('id_cv'))), sprintf('Object cv does not exist (%s).', $request->getParameter('id_cv')));
    $this->form = new cvForm($cv);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($cv = Doctrine_Core::getTable('cv')->find(array($request->getParameter('id_cv'))), sprintf('Object cv does not exist (%s).', $request->getParameter('id_cv')));
    $cv->delete();

    $this->redirect('Cv/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $cv = $form->save();

      $this->redirect('Cv/edit?id_cv='.$cv->getIdCv());
    }
  }
}
