<?php

/**
 * dmUserAdmin module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage dmUserAdmin
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 12474 2008-10-31 10:41:27Z fabien $
 */
abstract class BaseDmUserAdminGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%=username%% - %%email%% - %%is_active%% - %%is_super_admin%% - %%last_login%% - %%created_at%% - %%updated_at%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Users';
  }

  public function getEditTitle()
  {
    return '%%to_string%%';
  }

  public function getNewTitle()
  {
    return dm::getI18n()->__("Add a")." User";
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array(  'NONE' =>   array(    0 => 'username',    1 => 'email',    2 => 'password',    3 => 'password_again',    4 => 'is_active',    5 => 'is_super_admin',  ),  'Groups & Permissions' =>   array(    0 => 'groups_list',    1 => 'permissions_list',  ),);
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
    return array(  0 => '=username',  1 => 'email',  2 => 'is_active',  3 => 'is_super_admin',  4 => 'last_login',  5 => 'created_at',  6 => 'updated_at',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'Id',),
      'username' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'Username',),
      'email' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'Email',),
      'algorithm' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'Algorithm',),
      'salt' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'Salt',),
      'password' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'Password',),
      'is_active' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',  'markdown' => false,  'label' => 'Active',),
      'is_super_admin' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',  'markdown' => false,  'label' => 'Super admin',),
      'last_login' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'markdown' => false,  'label' => 'Last login',),
      'title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'Title',),
      'firstname' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'Firstname',),
      'cellphonenumber' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'Cellphonenumber',),
      'fixephonenumber' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'Fixephonenumber',),
      'faxnumber' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'Faxnumber',),
      'society' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'Society',),
      'adress' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'Adress',),
      'zipcode' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'Zipcode',),
      'city' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => false,  'label' => 'City',),
      'description' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'markdown' => true,  'label' => 'Description',),
      'photo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'markdown' => false,  'label' => 'Photo',),
      'country' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'markdown' => false,  'label' => 'Country',),
      'datepayement' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'markdown' => false,  'label' => 'Datepayement',),
      'expertise' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'markdown' => false,  'label' => 'Expertise',),
      'sector' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'markdown' => false,  'label' => 'Sector',),
      'usertype' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'markdown' => false,  'label' => 'Usertype',),
      'isconsultant' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',  'markdown' => false,  'label' => 'Isconsultant',),
      'isrecruteur' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',  'markdown' => false,  'label' => 'Isrecruteur',),
      'issupplier' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',  'markdown' => false,  'label' => 'Issupplier',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'markdown' => false,  'label' => 'Created at',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'markdown' => false,  'label' => 'Updated at',),
      'groups_list' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Groups',),
      'permissions_list' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Permissions',),
      'cv_list' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Cvs',),
      'hotideas_list' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Hotideas',),
      'job_list' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Jobs',),
      'photo_form' => array(  'label' => 'Photo',  'is_real' => false,  'type' => 'Text',),
      'password_again' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Password (again)',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'username' => array(),
      'email' => array(),
      'algorithm' => array(),
      'salt' => array(),
      'password' => array(),
      'is_active' => array(),
      'is_super_admin' => array(),
      'last_login' => array(),
      'title' => array(),
      'firstname' => array(),
      'cellphonenumber' => array(),
      'fixephonenumber' => array(),
      'faxnumber' => array(),
      'society' => array(),
      'adress' => array(),
      'zipcode' => array(),
      'city' => array(),
      'description' => array(),
      'photo' => array(),
      'country' => array(),
      'datepayement' => array(),
      'expertise' => array(),
      'sector' => array(),
      'usertype' => array(),
      'isconsultant' => array(),
      'isrecruteur' => array(),
      'issupplier' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'groups_list' => array(),
      'permissions_list' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'username' => array(),
      'email' => array(),
      'algorithm' => array(),
      'salt' => array(),
      'password' => array(),
      'is_active' => array(),
      'is_super_admin' => array(),
      'last_login' => array(),
      'title' => array(),
      'firstname' => array(),
      'cellphonenumber' => array(),
      'fixephonenumber' => array(),
      'faxnumber' => array(),
      'society' => array(),
      'adress' => array(),
      'zipcode' => array(),
      'city' => array(),
      'description' => array(),
      'photo' => array(),
      'country' => array(),
      'datepayement' => array(),
      'expertise' => array(),
      'sector' => array(),
      'usertype' => array(),
      'isconsultant' => array(),
      'isrecruteur' => array(),
      'issupplier' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'groups_list' => array(),
      'permissions_list' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'username' => array(),
      'email' => array(),
      'algorithm' => array(),
      'salt' => array(),
      'password' => array(),
      'is_active' => array(),
      'is_super_admin' => array(),
      'last_login' => array(),
      'title' => array(),
      'firstname' => array(),
      'cellphonenumber' => array(),
      'fixephonenumber' => array(),
      'faxnumber' => array(),
      'society' => array(),
      'adress' => array(),
      'zipcode' => array(),
      'city' => array(),
      'description' => array(),
      'photo' => array(),
      'country' => array(),
      'datepayement' => array(),
      'expertise' => array(),
      'sector' => array(),
      'usertype' => array(),
      'isconsultant' => array(),
      'isrecruteur' => array(),
      'issupplier' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'groups_list' => array(),
      'permissions_list' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'username' => array(),
      'email' => array(),
      'algorithm' => array(),
      'salt' => array(),
      'password' => array(),
      'is_active' => array(),
      'is_super_admin' => array(),
      'last_login' => array(),
      'title' => array(),
      'firstname' => array(),
      'cellphonenumber' => array(),
      'fixephonenumber' => array(),
      'faxnumber' => array(),
      'society' => array(),
      'adress' => array(),
      'zipcode' => array(),
      'city' => array(),
      'description' => array(),
      'photo' => array(),
      'country' => array(),
      'datepayement' => array(),
      'expertise' => array(),
      'sector' => array(),
      'usertype' => array(),
      'isconsultant' => array(),
      'isrecruteur' => array(),
      'issupplier' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'groups_list' => array(),
      'permissions_list' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'username' => array(),
      'email' => array(),
      'algorithm' => array(),
      'salt' => array(),
      'password' => array(),
      'is_active' => array(),
      'is_super_admin' => array(),
      'last_login' => array(),
      'title' => array(),
      'firstname' => array(),
      'cellphonenumber' => array(),
      'fixephonenumber' => array(),
      'faxnumber' => array(),
      'society' => array(),
      'adress' => array(),
      'zipcode' => array(),
      'city' => array(),
      'description' => array(),
      'photo' => array(),
      'country' => array(),
      'datepayement' => array(),
      'expertise' => array(),
      'sector' => array(),
      'usertype' => array(),
      'isconsultant' => array(),
      'isrecruteur' => array(),
      'issupplier' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'groups_list' => array(),
      'permissions_list' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'DmUserAdminForm';
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
    return 'DmUserFormFilter';
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
      'dmUserAdmin.max_per_page',
      10,
      'admin_module'
    );
  }

  public function getDefaultSort()
  {
    return array('username', 'asc');
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
    return false;
  }
}
