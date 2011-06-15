<?php

/**
 * Job actions.
 *
 * @package    ConsultingCoffee
 * @subpackage Job
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class JobActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->jobs = Doctrine_Core::getTable('job')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->job = Doctrine_Core::getTable('job')->find(array($request->getParameter('idjob')));
    $this->forward404Unless($this->job);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new jobForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new jobForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($job = Doctrine_Core::getTable('job')->find(array($request->getParameter('idjob'))), sprintf('Object job does not exist (%s).', $request->getParameter('idjob')));
    $this->form = new jobForm($job);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($job = Doctrine_Core::getTable('job')->find(array($request->getParameter('idjob'))), sprintf('Object job does not exist (%s).', $request->getParameter('idjob')));
    $this->form = new jobForm($job);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($job = Doctrine_Core::getTable('job')->find(array($request->getParameter('idjob'))), sprintf('Object job does not exist (%s).', $request->getParameter('idjob')));
    $job->delete();

    $this->redirect('Job/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $job = $form->save();

      $this->redirect('Job/edit?idjob='.$job->getIdjob());
    }
  }
}
