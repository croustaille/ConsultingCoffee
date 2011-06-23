<?php
class DmUserEditProfilForm extends DmUserForm
{  
  public function configure()  
  {  
    parent::configure();  
 
	//$this->useFields(array('email')); 
	
    $this->useFields(array('title','username','firstname','cellphonenumber','fixephoneNumber','email','faxNumber','society','adress','zipcode','country','city','description'));  
  }  
}  