<?php

/**
 * hotideas module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage hotideas
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 12474 2008-10-31 10:41:27Z fabien $
 */
abstract class BaseHotideasGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getCredentials($action)
  {
    if (0 === strpos($action, '_'))
    {
      $action = substr($action, 1);
    }

    return isset($this->configuration['credentials'][$action]) ? $this->configuration['credentials'][$action] : array();
  }

  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_list' =>   array(    'label' => 'Back to list',  ),  '_save' =>   array(    'label' => 'Save',  ),  '_save_and_add' =>   array(    'label' => 'Save and Add',  ),  '_save_and_list' =>   array(    'label' => 'Save and Back to list',  ),  '_save_and_next' =>   array(    'label' => 'Save and Next',  ),  '_delete' =>   array(    'label' => 'Delete',    'title' => 'Delete this %1%',  ),  '_add' =>   array(    'label' => 'Add',    'title' => 'Add a %1%',  ),  '_view_page' =>   array(    'label' => 'Show',    'title' => 'View page on website',  ),  '_history' =>   array(    'label' => 'History',    'title' => 'Revision history of %1%',  ),);
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
    return array(  '_new' =>   array(    'label' => 'Add',    'title' => 'Add a %1%',  ),);
  }

  public function getListBatchActions()
  {
        return array(  '_delete' => NULL,  '_activate' => NULL,  '_deactivate' => NULL,);
  }

  public function getListParams()
  {
    return '%%=title%% - %%categoryidea%% - %%image%% - %%author%% - %%price%% - %%extract%% - %%body%% - %%is_active%% - %%created_at%% - %%updated_at%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Hotideas';
  }

  public function getEditTitle()
  {
    return '%%to_string%%';
  }

  public function getNewTitle()
  {
    return dm::getI18n()->__("Add a")." Hotideas";
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'title',  1 => 'price',  2 => 'image',  3 => 'categoryidea',  4 => 'author',);
  }

  public function getFormDisplay()
  {
    return array(  'NONE' =>   array(    0 => 'title',    1 => 'is_active',    2 => 'categoryidea',    3 => 'author',  ),  'Image' =>   array(    0 => 'image_form',    1 => 'image_view',  ),  'Body' =>   array(    0 => 'body',  ),  'Others' =>   array(    0 => 'price',    1 => 'extract',  ),);
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
    return array(  0 => '=title',  1 => 'categoryidea',  2 => 'image',  3 => 'author',  4 => 'price',  5 => 'extract',  6 => 'body',  7 => 'is_active',  8 => 'created_at',  9 => 'updated_at',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'Hotideas',),
      'price' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'Price',),
      'image' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'markdown' => false,  'label' => 'Image',),
      'categoryidea' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'markdown' => false,  'label' => 'Categoryidea',),
      'author' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'markdown' => false,  'label' => 'Author',),
      'position' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'Position',),
      'title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'Title',),
      'extract' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'Extract',),
      'body' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => true,  'label' => 'Body',),
      'is_active' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',  'markdown' => false,  'label' => 'Is active',),
      'lang' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'Lang',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'markdown' => false,  'label' => 'Created at',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'markdown' => false,  'label' => 'Updated at',),
      'version' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'Version',),
      'image_form' => array(  'label' => 'Image',  'is_real' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'price' => array(),
      'image' => array(),
      'categoryidea' => array(),
      'author' => array(),
      'position' => array(),
      'title' => array(),
      'extract' => array(),
      'body' => array(),
      'is_active' => array(),
      'lang' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'version' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'price' => array(),
      'image' => array(),
      'categoryidea' => array(),
      'author' => array(),
      'position' => array(),
      'title' => array(),
      'extract' => array(),
      'body' => array(),
      'is_active' => array(),
      'lang' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'version' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'price' => array(),
      'image' => array(),
      'categoryidea' => array(),
      'author' => array(),
      'position' => array(),
      'title' => array(),
      'extract' => array(),
      'body' => array(),
      'is_active' => array(),
      'lang' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'version' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'price' => array(),
      'image' => array(),
      'categoryidea' => array(),
      'author' => array(),
      'position' => array(),
      'title' => array(),
      'extract' => array(),
      'body' => array(),
      'is_active' => array(),
      'lang' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'version' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'price' => array(),
      'image' => array(),
      'categoryidea' => array(),
      'author' => array(),
      'position' => array(),
      'title' => array(),
      'extract' => array(),
      'body' => array(),
      'is_active' => array(),
      'lang' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'version' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'HotideasAdminForm';
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
    return 'HotideasFormFilter';
  }

  public function getFilterForm($filters)
  {
    $class = $this->getFilterFormClass();

    return new $class($filters, $this->getFilterFormOptions());
  }

  public function getFilterFormOptions()
  {
    return array();
  }

  public function getFilterDefaults()
  {
    return array();
  }

  public function getPager($model)
  {
    $class = $this->getPagerClass();

    return new $class($model, $this->getPagerMaxPerPage());
  }

  public function getPagerClass()
  {
    return 'dmDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return dm::getUser()->getAttribute(
      'hotideas.max_per_page',
      10,
      'admin_module'
    );
  }

  public function getDefaultSort()
  {
    return array('position', 'asc');
  }

  public function getTableMethod()
  {
    return 'getAdminListQuery';
  }

  public function getTableCountMethod()
  {
    return '';
  }

  public function getSortable()
  {
    return true;
  }

  public function getLoremize()
  {
    return true;
  }
}
