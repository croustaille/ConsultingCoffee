<?php
/**
 * Forumtopic components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 */
class forumtopicComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->forumtopicPager = $this->getPager($query);
  }

  public function executeForm()
  {
    $this->form = $this->forms['Forumtopic'];
  }

  public function executeShow()
  {
    $query = $this->getShowQuery();
    
    $this->forumtopic = $this->getRecord($query);
  }

  public function executeEdit()
  {
    // Your code here
  }


}
