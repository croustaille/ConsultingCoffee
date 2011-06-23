<?php
/**
 * Cv components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 * 
 * 
 * 
 * 
 */
class cvComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->cvPager = $this->getPager($query);
    	
    	$this->cvPager->setOption('ajax', true);
  }

  public function executeForm()
  {
    $this->form = $this->forms['Cv'];
  }

  public function executeShow()
  {
    $query = $this->getShowQuery();
    
    $this->cv = $this->getRecord($query);
  }

  public function executeListPersonal()
  {
    $userName = sfContext::getInstance()->getUser()->getGuardUser()->getUsername();
    	
    	$query =Doctrine_Query::create()
    		->from('Cv c')
    		->leftJoin('c.Author a')
    		->where('a.username = ?',$userName);
       $query = $this->getListQuery();
    
    $this->cvPager = $this->getPager($query);
    	$this->cvPager->setOption('ajax', true);
  }

  public function executeEdit()
  {
    // Your code here
  }


}
