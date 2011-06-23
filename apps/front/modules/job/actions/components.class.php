<?php
/**
 * Job components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 * 
 * 
 * 
 * 
 */
class jobComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->jobPager = $this->getPager($query);
	
    $this->jobPager->setOption('ajax', true);
  }

  public function executeForm()
  {
    $this->form = $this->forms['Job'];
  }

  public function executeShow()
  {
    $query = $this->getShowQuery();
    
    $this->job = $this->getRecord($query);
  }

  public function executeListPersonal()
  {
    $userName = sfContext::getInstance()->getUser()->getGuardUser()->getUsername();
    
    
    	$query =Doctrine_Query::create()
    		->from('Job j')
    		->leftJoin('j.Author a')
    		->where('a.username = ?',$userName);
      $this->jobPager = $this->getPager($query);
    	$this->jobPager->setOption('ajax', true);
  }

  public function executeEdit()
  {
    // Your code here
  }


}
