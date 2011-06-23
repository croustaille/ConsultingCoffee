<?php
/**
 * Forumtopic actions
 */
class forumtopicActions extends myFrontModuleActions
{

  public function executeFormWidget(dmWebRequest $request)
  {
    $form = $this->forms['Forumtopic'];
        
    if ($request->isMethod('post') && $form->bindAndValid($request))
    {
      $form->save();
      $this->redirectBack();
    }
  }


}
