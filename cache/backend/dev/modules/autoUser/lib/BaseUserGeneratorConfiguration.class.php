<?php

/**
 * user module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage user
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseUserGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%iduser%% - %%idusertype%% - %%titreuser%% - %%nameuser%% - %%surnameuser%% - %%adressuser%% - %%countryuser%% - %%raisonsocialuser%% - %%phonenumberuser%% - %%mailuser%% - %%pwduser%% - %%isactivateuser%% - %%lastconnexionuser%% - %%zipcodeuser%% - %%jobdescriptionuser%% - %%corporationsize%% - %%isacceptemailnews%% - %%apayersacotisationpourpublication%% - %%datevalidationpayement%% - %%datefinvalidation%% - %%isconsultant%% - %%isrecruteur%% - %%issupplier%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'User List';
  }

  public function getEditTitle()
  {
    return 'Edit User';
  }

  public function getNewTitle()
  {
    return 'New User';
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
    return array(  0 => 'iduser',  1 => 'idusertype',  2 => 'titreuser',  3 => 'nameuser',  4 => 'surnameuser',  5 => 'adressuser',  6 => 'countryuser',  7 => 'raisonsocialuser',  8 => 'phonenumberuser',  9 => 'mailuser',  10 => 'pwduser',  11 => 'isactivateuser',  12 => 'lastconnexionuser',  13 => 'zipcodeuser',  14 => 'jobdescriptionuser',  15 => 'corporationsize',  16 => 'isacceptemailnews',  17 => 'apayersacotisationpourpublication',  18 => 'datevalidationpayement',  19 => 'datefinvalidation',  20 => 'isconsultant',  21 => 'isrecruteur',  22 => 'issupplier',);
  }

  public function getFieldsDefault()
  {
    return array(
      'iduser' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'idusertype' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'titreuser' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'nameuser' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'surnameuser' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'adressuser' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'countryuser' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'raisonsocialuser' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'phonenumberuser' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'mailuser' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'pwduser' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'isactivateuser' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'lastconnexionuser' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'zipcodeuser' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'jobdescriptionuser' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'corporationsize' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'isacceptemailnews' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'apayersacotisationpourpublication' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'datevalidationpayement' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'datefinvalidation' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'isconsultant' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'isrecruteur' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'issupplier' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'iduser' => array(),
      'idusertype' => array(),
      'titreuser' => array(),
      'nameuser' => array(),
      'surnameuser' => array(),
      'adressuser' => array(),
      'countryuser' => array(),
      'raisonsocialuser' => array(),
      'phonenumberuser' => array(),
      'mailuser' => array(),
      'pwduser' => array(),
      'isactivateuser' => array(),
      'lastconnexionuser' => array(),
      'zipcodeuser' => array(),
      'jobdescriptionuser' => array(),
      'corporationsize' => array(),
      'isacceptemailnews' => array(),
      'apayersacotisationpourpublication' => array(),
      'datevalidationpayement' => array(),
      'datefinvalidation' => array(),
      'isconsultant' => array(),
      'isrecruteur' => array(),
      'issupplier' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'iduser' => array(),
      'idusertype' => array(),
      'titreuser' => array(),
      'nameuser' => array(),
      'surnameuser' => array(),
      'adressuser' => array(),
      'countryuser' => array(),
      'raisonsocialuser' => array(),
      'phonenumberuser' => array(),
      'mailuser' => array(),
      'pwduser' => array(),
      'isactivateuser' => array(),
      'lastconnexionuser' => array(),
      'zipcodeuser' => array(),
      'jobdescriptionuser' => array(),
      'corporationsize' => array(),
      'isacceptemailnews' => array(),
      'apayersacotisationpourpublication' => array(),
      'datevalidationpayement' => array(),
      'datefinvalidation' => array(),
      'isconsultant' => array(),
      'isrecruteur' => array(),
      'issupplier' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'iduser' => array(),
      'idusertype' => array(),
      'titreuser' => array(),
      'nameuser' => array(),
      'surnameuser' => array(),
      'adressuser' => array(),
      'countryuser' => array(),
      'raisonsocialuser' => array(),
      'phonenumberuser' => array(),
      'mailuser' => array(),
      'pwduser' => array(),
      'isactivateuser' => array(),
      'lastconnexionuser' => array(),
      'zipcodeuser' => array(),
      'jobdescriptionuser' => array(),
      'corporationsize' => array(),
      'isacceptemailnews' => array(),
      'apayersacotisationpourpublication' => array(),
      'datevalidationpayement' => array(),
      'datefinvalidation' => array(),
      'isconsultant' => array(),
      'isrecruteur' => array(),
      'issupplier' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'iduser' => array(),
      'idusertype' => array(),
      'titreuser' => array(),
      'nameuser' => array(),
      'surnameuser' => array(),
      'adressuser' => array(),
      'countryuser' => array(),
      'raisonsocialuser' => array(),
      'phonenumberuser' => array(),
      'mailuser' => array(),
      'pwduser' => array(),
      'isactivateuser' => array(),
      'lastconnexionuser' => array(),
      'zipcodeuser' => array(),
      'jobdescriptionuser' => array(),
      'corporationsize' => array(),
      'isacceptemailnews' => array(),
      'apayersacotisationpourpublication' => array(),
      'datevalidationpayement' => array(),
      'datefinvalidation' => array(),
      'isconsultant' => array(),
      'isrecruteur' => array(),
      'issupplier' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'iduser' => array(),
      'idusertype' => array(),
      'titreuser' => array(),
      'nameuser' => array(),
      'surnameuser' => array(),
      'adressuser' => array(),
      'countryuser' => array(),
      'raisonsocialuser' => array(),
      'phonenumberuser' => array(),
      'mailuser' => array(),
      'pwduser' => array(),
      'isactivateuser' => array(),
      'lastconnexionuser' => array(),
      'zipcodeuser' => array(),
      'jobdescriptionuser' => array(),
      'corporationsize' => array(),
      'isacceptemailnews' => array(),
      'apayersacotisationpourpublication' => array(),
      'datevalidationpayement' => array(),
      'datefinvalidation' => array(),
      'isconsultant' => array(),
      'isrecruteur' => array(),
      'issupplier' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'UserForm';
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
    return 'UserFormFilter';
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
