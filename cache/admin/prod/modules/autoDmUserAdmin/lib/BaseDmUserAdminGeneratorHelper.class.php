<?php

/**
 * dmUserAdmin module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage dmUserAdmin
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 12482 2008-10-31 11:13:22Z fabien $
 */
abstract class BaseDmUserAdminGeneratorHelper extends dmAdminModelGeneratorHelper
{

  protected function getModuleName()
  {
    return 'dmUserAdmin';
  }

  public function getRouteArrayForAction($action, $object = null)
  {
    $route = array('sf_route' => 'dm_user');
    
    if ('list' !== $action)
    {
      $route['action'] = $action;
    }
    
    if (null !== $object)
    {
      $route['pk'] = $object->getPrimaryKey();
    }

    if(sfConfig::get('dm_admin_embedded'))
    {
      $route['dm_embed'] = 1;
    }
    
    return $route;
  }

  public function getUrlForAction($action)
  {
    return 'dm_user?action='.$action;
  }
}