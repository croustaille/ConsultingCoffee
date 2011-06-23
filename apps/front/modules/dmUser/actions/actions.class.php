<?php
require_once sfConfig::get('dm_core_dir').'/plugins/dmUserPlugin/modules/dmUser/lib/BasedmUserActions.class.php';
 
class dmUserActions extends BasedmUserActions  
{  
  protected function redirectSignedInUser(dmWebRequest $request)  
  {  
    $redirectUrl = $this->getUser()->getReferer($request->getReferer());  
 
    $this->redirect('' != $redirectUrl ? $redirectUrl : '@signin');  
  }
  
   public function executeEditProfilWidget(sfWebRequest $request)  
  {  
    // secure the page if no user is authenticated  
    $this->forwardSecureUnless($dmUser = $this->getUser()->getDmUser());  
 
    // create the form with the authenticated user  
    $form = new DmUserEditProfilForm($dmUser);  
 
 
    // if the form has been submitted and is valid  
    if ($request->hasParameter($form->getName()) && $form->bindAndValid($request))  
    {  
      $user = $form->save();  
 
      return $this->redirect($request->getReferer());  
    }  
 
    // pass the form to the component  
    $this->forms['DmUserEditProfil'] = $form;  
  } 
}