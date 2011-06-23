<?php
/**
 * Forum post actions
 */
class forumPostActions extends myFrontModuleActions
{

  public function executeFormWidget(dmWebRequest $request)
  {
    $form = $this->forms['ForumPost'];
        
    if ($request->isMethod('post') && $form->bindAndValid($request))
    {
      $form->save();
      $this->redirectBack();
    }
  }


}
