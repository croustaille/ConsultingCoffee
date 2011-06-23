<?php
// load the class we extend
require_once dm::getDir().'/dmCorePlugin/plugins/dmUserPlugin/modules/dmUser/lib/BasedmUserComponents.class.php';  
 
// we extend the dmUserPlugin existing components  
class dmUserComponents extends BasedmUserComponents  
{  
 
  public function executeEditProfil()  
  {  
    // get the form created in the action  
    $this->form = $this->forms['DmUserEditProfil'];  
  }  
 
}  