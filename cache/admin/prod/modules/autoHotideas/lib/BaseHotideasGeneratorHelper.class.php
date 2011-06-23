<?php

/**
 * hotideas module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage hotideas
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 12482 2008-10-31 11:13:22Z fabien $
 */
abstract class BaseHotideasGeneratorHelper extends dmAdminModelGeneratorHelper
{

  protected function getModuleName()
  {
    return 'hotideas';
  }

  public function getRouteArrayForAction($action, $object = null)
  {
    $route = array('sf_route' => 'hotideas');
    
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
    return 'hotideas?action='.$action;
  }
}