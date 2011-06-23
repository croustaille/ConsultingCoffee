<?php

/**
 * DmUser form base class.
 *
 * @method DmUser getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id$
 */
abstract class BaseDmUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'username'         => new sfWidgetFormInputText(),
      'email'            => new sfWidgetFormInputText(),
      'algorithm'        => new sfWidgetFormInputText(),
      'salt'             => new sfWidgetFormInputText(),
      'password'         => new sfWidgetFormInputText(),
      'is_active'        => new sfWidgetFormInputCheckbox(),
      'is_super_admin'   => new sfWidgetFormInputCheckbox(),
      'last_login'       => new sfWidgetFormDateTime(),
      'title'            => new sfWidgetFormInputText(),
      'firstname'        => new sfWidgetFormInputText(),
      'cellphonenumber'  => new sfWidgetFormInputText(),
      'fixephoneNumber'  => new sfWidgetFormInputText(),
      'faxNumber'        => new sfWidgetFormInputText(),
      'society'          => new sfWidgetFormInputText(),
      'adress'           => new sfWidgetFormTextarea(),
      'zipcode'          => new sfWidgetFormInputText(),
      'city'             => new sfWidgetFormInputText(),
      'description'      => new sfWidgetFormTextarea(),
      'photo'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Photo'), 'add_empty' => true)),
      'country'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Country'), 'add_empty' => true)),
      'datepayement'     => new sfWidgetFormDmDate(),
      'expertise'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Expertise'), 'add_empty' => true)),
      'sector'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Sector'), 'add_empty' => true)),
      'usertype'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usertype'), 'add_empty' => true)),
      'isConsultant'     => new sfWidgetFormInputCheckbox(),
      'isRecruteur'      => new sfWidgetFormInputCheckbox(),
      'isSupplier'       => new sfWidgetFormInputCheckbox(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
        'groups_list'      => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'DmGroup', 'expanded' => true)),
        'permissions_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'DmPermission', 'expanded' => true)),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'username'         => new sfValidatorString(array('max_length' => 255)),
      'email'            => new sfValidatorString(array('max_length' => 255)),
      'algorithm'        => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'salt'             => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'password'         => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'is_active'        => new sfValidatorBoolean(array('required' => false)),
      'is_super_admin'   => new sfValidatorBoolean(array('required' => false)),
      'last_login'       => new sfValidatorDateTime(array('required' => false)),
      'title'            => new sfValidatorString(array('max_length' => 10)),
      'firstname'        => new sfValidatorString(array('max_length' => 100)),
      'cellphonenumber'  => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'fixephoneNumber'  => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'faxNumber'        => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'society'          => new sfValidatorString(array('max_length' => 120)),
      'adress'           => new sfValidatorString(array('max_length' => 300, 'required' => false)),
      'zipcode'          => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'city'             => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'description'      => new sfValidatorString(array('required' => false)),
      'photo'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Photo'), 'required' => false)),
      'country'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Country'), 'required' => false)),
      'datepayement'     => new dmValidatorDate(array('required' => false)),
      'expertise'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Expertise'), 'required' => false)),
      'sector'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Sector'), 'required' => false)),
      'usertype'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usertype'), 'required' => false)),
      'isConsultant'     => new sfValidatorBoolean(array('required' => false)),
      'isRecruteur'      => new sfValidatorBoolean(array('required' => false)),
      'isSupplier'       => new sfValidatorBoolean(array('required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
        'groups_list'      => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'DmGroup', 'required' => false)),
        'permissions_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'DmPermission', 'required' => false)),
    ));

    /*
     * Embed Media form for photo
     */
    $this->embedForm('photo_form', $this->createMediaFormForPhoto());
    unset($this['photo']);

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'DmUser', 'column' => array('username'))),
        new sfValidatorDoctrineUnique(array('model' => 'DmUser', 'column' => array('email'))),
      ))
    );

    $this->widgetSchema->setNameFormat('dm_user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
    
    // Unset automatic fields like 'created_at', 'updated_at', 'position'
    // override this method in your form to keep them
    parent::unsetAutoFields();
  }

  /**
   * Creates a DmMediaForm instance for photo
   *
   * @return DmMediaForm a form instance for the related media
   */
  protected function createMediaFormForPhoto()
  {
    return DmMediaForRecordForm::factory($this->object, 'photo', 'Photo', $this->validatorSchema['photo']->getOption('required'));
  }

  protected function doBind(array $values)
  {
    $values = $this->filterValuesByEmbeddedMediaForm($values, 'photo');
    parent::doBind($values);
  }
  
  public function processValues($values)
  {
    $values = parent::processValues($values);
    $values = $this->processValuesForEmbeddedMediaForm($values, 'photo');
    return $values;
  }
  
  protected function doUpdateObject($values)
  {
    parent::doUpdateObject($values);
    $this->doUpdateObjectForEmbeddedMediaForm($values, 'photo', 'Photo');
  }

  public function getModelName()
  {
    return 'DmUser';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['groups_list']))
    {
      $this->setDefault('groups_list', $this->object->Groups->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['permissions_list']))
    {
      $this->setDefault('permissions_list', $this->object->Permissions->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveGroupsList($con);
    $this->savePermissionsList($con);

    parent::doSave($con);
  }

  public function saveGroupsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['groups_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Groups->getPrimaryKeys();
    $values = $this->getValue('groups_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Groups', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Groups', array_values($link));
    }
  }

  public function savePermissionsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['permissions_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Permissions->getPrimaryKeys();
    $values = $this->getValue('permissions_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Permissions', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Permissions', array_values($link));
    }
  }

}