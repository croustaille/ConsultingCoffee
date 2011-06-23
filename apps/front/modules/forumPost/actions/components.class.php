<?php
/**
 * Forum post components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 */
class forumPostComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->forumPostPager = $this->getPager($query);
  }

  public function executeForm()
  {
    $this->form = $this->forms['ForumPost'];
  }

  public function executeShow()
  {
    $query = $this->getShowQuery();
    
    $this->forumPost = $this->getRecord($query);
  }

  public function executeEdit()
  {
    // Your code here
  }


}
