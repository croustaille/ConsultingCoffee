<?php
/**
 * Forumcategory actions
 */
class forumcategoryActions extends myFrontModuleActions
{

  public function executeFormWidget(dmWebRequest $request)
  {
    $form = $this->forms['Forumcategory'];
        
    if ($request->isMethod('post') && $form->bindAndValid($request))
    {
      $form->save();
      $this->redirectBack();
    }
  }


}
