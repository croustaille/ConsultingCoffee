<?php

/**
 * Experience actions.
 *
 * @package    ConsultingCoffee
 * @subpackage Experience
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ExperienceActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->experiences = Doctrine_Core::getTable('experience')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->experience = Doctrine_Core::getTable('experience')->find(array($request->getParameter('idexperience')));
    $this->forward404Unless($this->experience);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new experienceForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new experienceForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($experience = Doctrine_Core::getTable('experience')->find(array($request->getParameter('idexperience'))), sprintf('Object experience does not exist (%s).', $request->getParameter('idexperience')));
    $this->form = new experienceForm($experience);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($experience = Doctrine_Core::getTable('experience')->find(array($request->getParameter('idexperience'))), sprintf('Object experience does not exist (%s).', $request->getParameter('idexperience')));
    $this->form = new experienceForm($experience);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($experience = Doctrine_Core::getTable('experience')->find(array($request->getParameter('idexperience'))), sprintf('Object experience does not exist (%s).', $request->getParameter('idexperience')));
    $experience->delete();

    $this->redirect('Experience/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $experience = $form->save();

      $this->redirect('Experience/edit?idexperience='.$experience->getIdexperience());
    }
  }
}
