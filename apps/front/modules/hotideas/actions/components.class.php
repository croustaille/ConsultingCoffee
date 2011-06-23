<?php
/**
 * Hotideas components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 * 
 */
class hotideasComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->hotideasPager = $this->getPager($query);
  }

  public function executeListPersonal()
  {
   //	 $query = $this->getListQuery();
    
   //	 $this->hotideasPager = $this->getPager($query);
	
	
	$userName = sfContext::getInstance()->getUser()->getGuardUser()->getUsername();

	$query =Doctrine_Query::create()
		->from('Hotideas h');
		//->leftJoin('h.author a')
		//->where('a.username = ?',$userName);
	$this->hotideasPager = $this->getPager($query);
	$this->hotideasPager->setOption('ajax', true);
  }

  public function executeForm()
  {
    $this->form = $this->forms['Hotideas'];
  }

  public function executeShow()
  {
    $query = $this->getShowQuery();
    
    $this->hotideas = $this->getRecord($query);
  }

  public function executeEdit()
  {
    // Your code here
  }


}
