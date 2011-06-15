<?php

/**
 * Cv module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage Cv
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCvGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%id_cv%% - %%iduser%% - %%titrecv%% - %%descriptioncv%% - %%datedisponibilitecv%% - %%tarifcv%% - %%estvisiblecv%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Cv List';
  }

  public function getEditTitle()
  {
    return 'Edit Cv';
  }

  public function getNewTitle()
  {
    return 'New Cv';
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
    return array(  0 => 'id_cv',  1 => 'iduser',  2 => 'titrecv',  3 => 'descriptioncv',  4 => 'datedisponibilitecv',  5 => 'tarifcv',  6 => 'estvisiblecv',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id_cv' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'iduser' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'titrecv' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'descriptioncv' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'datedisponibilitecv' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'tarifcv' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'estvisiblecv' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id_cv' => array(),
      'iduser' => array(),
      'titrecv' => array(),
      'descriptioncv' => array(),
      'datedisponibilitecv' => array(),
      'tarifcv' => array(),
      'estvisiblecv' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id_cv' => array(),
      'iduser' => array(),
      'titrecv' => array(),
      'descriptioncv' => array(),
      'datedisponibilitecv' => array(),
      'tarifcv' => array(),
      'estvisiblecv' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id_cv' => array(),
      'iduser' => array(),
      'titrecv' => array(),
      'descriptioncv' => array(),
      'datedisponibilitecv' => array(),
      'tarifcv' => array(),
      'estvisiblecv' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id_cv' => array(),
      'iduser' => array(),
      'titrecv' => array(),
      'descriptioncv' => array(),
      'datedisponibilitecv' => array(),
      'tarifcv' => array(),
      'estvisiblecv' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id_cv' => array(),
      'iduser' => array(),
      'titrecv' => array(),
      'descriptioncv' => array(),
      'datedisponibilitecv' => array(),
      'tarifcv' => array(),
      'estvisiblecv' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'CvForm';
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
    return 'CvFormFilter';
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
