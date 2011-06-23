<?php
/**
 * Forumcategory components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 */
class forumcategoryComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->forumcategoryPager = $this->getPager($query);
  }

  public function executeForm()
  {
    $this->form = $this->forms['Forumcategory'];
  }

  public function executeShow()
  {
    $query = $this->getShowQuery();
    
    $this->forumcategory = $this->getRecord($query);
  }

  public function executeEdit()
  {
    // Your code here
  }
}
