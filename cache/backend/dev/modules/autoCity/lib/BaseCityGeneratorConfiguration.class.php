<?php

/**
 * city module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage city
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCityGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id_city%% - %%idcountry%% - %%cityname%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'City List';
  }

  public function getEditTitle()
  {
    return 'Edit City';
  }

  public function getNewTitle()
  {
    return 'New City';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id_city',  1 => 'idcountry',  2 => 'cityname',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id_city' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'idcountry' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'cityname' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id_city' => array(),
      'idcountry' => array(),
      'cityname' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id_city' => array(),
      'idcountry' => array(),
      'cityname' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id_city' => array(),
      'idcountry' => array(),
      'cityname' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id_city' => array(),
      'idcountry' => array(),
      'cityname' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id_city' => array(),
      'idcountry' => array(),
      'cityname' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'CityForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'CityFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
