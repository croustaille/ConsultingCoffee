<?php

/**
 * DmUser filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDmUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'username'         => new sfWidgetFormFilterInput(),
      'email'            => new sfWidgetFormFilterInput(),
      'algorithm'        => new sfWidgetFormFilterInput(),
      'salt'             => new sfWidgetFormFilterInput(),
      'password'         => new sfWidgetFormFilterInput(),
      'is_active'        => new sfWidgetFormChoice(array('choices' => array('' => dm::getI18n()->__('yes or no', array(), 'dm'), 1 => dm::getI18n()->__('yes', array(), 'dm'), 0 => dm::getI18n()->__('no', array(), 'dm')))),
      'is_super_admin'   => new sfWidgetFormChoice(array('choices' => array('' => dm::getI18n()->__('yes or no', array(), 'dm'), 1 => dm::getI18n()->__('yes', array(), 'dm'), 0 => dm::getI18n()->__('no', array(), 'dm')))),
      'last_login'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'to_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'with_empty' => true)),
      'title'            => new sfWidgetFormFilterInput(),
      'firstname'        => new sfWidgetFormFilterInput(),
      'cellphonenumber'  => new sfWidgetFormFilterInput(),
      'fixephoneNumber'  => new sfWidgetFormFilterInput(),
      'faxNumber'        => new sfWidgetFormFilterInput(),
      'society'          => new sfWidgetFormFilterInput(),
      'adress'           => new sfWidgetFormFilterInput(),
      'zipcode'          => new sfWidgetFormFilterInput(),
      'city'             => new sfWidgetFormFilterInput(),
      'description'      => new sfWidgetFormFilterInput(),
      'photo'            => new sfWidgetFormDoctrineChoice(array('model' => 'DmMedia', 'add_empty' => true)),
      'country'          => new sfWidgetFormDoctrineChoice(array('model' => 'Country', 'add_empty' => true)),
      'datepayement'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'to_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'with_empty' => true)),
      'expertise'        => new sfWidgetFormDoctrineChoice(array('model' => 'Expertise', 'add_empty' => true)),
      'sector'           => new sfWidgetFormDoctrineChoice(array('model' => 'Sector', 'add_empty' => true)),
      'usertype'         => new sfWidgetFormDoctrineChoice(array('model' => 'Usertype', 'add_empty' => true)),
      'isConsultant'     => new sfWidgetFormChoice(array('choices' => array('' => dm::getI18n()->__('yes or no', array(), 'dm'), 1 => dm::getI18n()->__('yes', array(), 'dm'), 0 => dm::getI18n()->__('no', array(), 'dm')))),
      'isRecruteur'      => new sfWidgetFormChoice(array('choices' => array('' => dm::getI18n()->__('yes or no', array(), 'dm'), 1 => dm::getI18n()->__('yes', array(), 'dm'), 0 => dm::getI18n()->__('no', array(), 'dm')))),
      'isSupplier'       => new sfWidgetFormChoice(array('choices' => array('' => dm::getI18n()->__('yes or no', array(), 'dm'), 1 => dm::getI18n()->__('yes', array(), 'dm'), 0 => dm::getI18n()->__('no', array(), 'dm')))),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'to_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'with_empty' => false)),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'to_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'with_empty' => false)),
      'groups_list'      => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'DmGroup')),
      'permissions_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'DmPermission')),
    ));

    $this->setValidators(array(
      'username'         => new sfValidatorPass(array('required' => false)),
      'email'            => new sfValidatorPass(array('required' => false)),
      'algorithm'        => new sfValidatorPass(array('required' => false)),
      'salt'             => new sfValidatorPass(array('required' => false)),
      'password'         => new sfValidatorPass(array('required' => false)),
      'is_active'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_super_admin'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'last_login'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'title'            => new sfValidatorPass(array('required' => false)),
      'firstname'        => new sfValidatorPass(array('required' => false)),
      'cellphonenumber'  => new sfValidatorPass(array('required' => false)),
      'fixephoneNumber'  => new sfValidatorPass(array('required' => false)),
      'faxNumber'        => new sfValidatorPass(array('required' => false)),
      'society'          => new sfValidatorPass(array('required' => false)),
      'adress'           => new sfValidatorPass(array('required' => false)),
      'zipcode'          => new sfValidatorPass(array('required' => false)),
      'city'             => new sfValidatorPass(array('required' => false)),
      'description'      => new sfValidatorPass(array('required' => false)),
      'photo'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Photo'), 'column' => 'id')),
      'country'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Country'), 'column' => 'id')),
      'datepayement'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'expertise'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Expertise'), 'column' => 'id')),
      'sector'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Sector'), 'column' => 'id')),
      'usertype'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Usertype'), 'column' => 'id')),
      'isConsultant'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'isRecruteur'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'isSupplier'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'groups_list'      => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'DmGroup', 'required' => false)),
      'permissions_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'DmPermission', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dm_user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addGroupsListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query->leftJoin('r.DmUserGroup DmUserGroup')
          ->andWhereIn('DmUserGroup.dm_group_id', $values);
  }

  public function addPermissionsListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query->leftJoin('r.DmUserPermission DmUserPermission')
          ->andWhereIn('DmUserPermission.dm_permission_id', $values);
  }

  public function getModelName()
  {
    return 'DmUser';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'username'         => 'Text',
      'email'            => 'Text',
      'algorithm'        => 'Text',
      'salt'             => 'Text',
      'password'         => 'Text',
      'is_active'        => 'Boolean',
      'is_super_admin'   => 'Boolean',
      'last_login'       => 'Date',
      'title'            => 'Text',
      'firstname'        => 'Text',
      'cellphonenumber'  => 'Text',
      'fixephoneNumber'  => 'Text',
      'faxNumber'        => 'Text',
      'society'          => 'Text',
      'adress'           => 'Text',
      'zipcode'          => 'Text',
      'city'             => 'Text',
      'description'      => 'Text',
      'photo'            => 'ForeignKey',
      'country'          => 'ForeignKey',
      'datepayement'     => 'Date',
      'expertise'        => 'ForeignKey',
      'sector'           => 'ForeignKey',
      'usertype'         => 'ForeignKey',
      'isConsultant'     => 'Boolean',
      'isRecruteur'      => 'Boolean',
      'isSupplier'       => 'Boolean',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
      'groups_list'      => 'ManyKey',
      'permissions_list' => 'ManyKey',
    );
  }
}
