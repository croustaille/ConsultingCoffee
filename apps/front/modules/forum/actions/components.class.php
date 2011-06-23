<?php
/**
 * Forum components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 */
class forumComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->forumPager = $this->getPager($query);
  }

  public function executeForm()
  {
    $this->form = $this->forms['Forum'];
  }

  public function executeShow()
  {
    $query = $this->getShowQuery();
    
    $this->forum = $this->getRecord($query);
  }

  public function executeEdit()
  {
    // Your code here
  }


}
