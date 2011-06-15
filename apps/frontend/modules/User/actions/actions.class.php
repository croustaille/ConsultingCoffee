<?php

/**
 * User actions.
 *
 * @package    ConsultingCoffee
 * @subpackage User
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UserActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->users = Doctrine_Core::getTable('user')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->user = Doctrine_Core::getTable('user')->find(array($request->getParameter('iduser')));
    $this->forward404Unless($this->user);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new userForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new userForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($user = Doctrine_Core::getTable('user')->find(array($request->getParameter('iduser'))), sprintf('Object user does not exist (%s).', $request->getParameter('iduser')));
    $this->form = new userForm($user);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($user = Doctrine_Core::getTable('user')->find(array($request->getParameter('iduser'))), sprintf('Object user does not exist (%s).', $request->getParameter('iduser')));
    $this->form = new userForm($user);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($user = Doctrine_Core::getTable('user')->find(array($request->getParameter('iduser'))), sprintf('Object user does not exist (%s).', $request->getParameter('iduser')));
    $user->delete();

    $this->redirect('User/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $user = $form->save();

      $this->redirect('User/edit?iduser='.$user->getIduser());
    }
  }
}
