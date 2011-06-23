<?php
/**
 * Hotideas actions
 * 
 */
class hotideasActions extends myFrontModuleActions
{

  public function executeFormWidget(dmWebRequest $request)
  {
    $form = $this->forms['Hotideas'];
        
    if ($request->isMethod('post') && $form->bindAndValid($request))
    {
      $form->save();
      $this->redirectBack();
    }
  }


}
