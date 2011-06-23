<?php
/**
 * Sector components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 */
class sectorComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->sectorPager = $this->getPager($query);
  }

  public function executeShow()
  {
    $query = $this->getShowQuery();
    
    $this->sector = $this->getRecord($query);
  }


}
