<?php

/**
 * User form base class.
 *
 * @method User getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'iduser'                            => new sfWidgetFormInputHidden(),
      'idusertype'                        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usertype'), 'add_empty' => true)),
      'titreuser'                         => new sfWidgetFormInputText(),
      'nameuser'                          => new sfWidgetFormInputText(),
      'surnameuser'                       => new sfWidgetFormInputText(),
      'adressuser'                        => new sfWidgetFormInputText(),
      'countryuser'                       => new sfWidgetFormInputText(),
      'raisonsocialuser'                  => new sfWidgetFormInputText(),
      'phonenumberuser'                   => new sfWidgetFormInputText(),
      'mailuser'                          => new sfWidgetFormInputText(),
      'pwduser'                           => new sfWidgetFormInputText(),
      'isactivateuser'                    => new sfWidgetFormInputText(),
      'lastconnexionuser'                 => new sfWidgetFormDate(),
      'zipcodeuser'                       => new sfWidgetFormInputText(),
      'jobdescriptionuser'                => new sfWidgetFormTextarea(),
      'corporationsize'                   => new sfWidgetFormInputText(),
      'isacceptemailnews'                 => new sfWidgetFormInputText(),
      'apayersacotisationpourpublication' => new sfWidgetFormInputText(),
      'datevalidationpayement'            => new sfWidgetFormDate(),
      'datefinvalidation'                 => new sfWidgetFormDate(),
      'isconsultant'                      => new sfWidgetFormInputText(),
      'isrecruteur'                       => new sfWidgetFormInputText(),
      'issupplier'                        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'iduser'                            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('iduser')), 'empty_value' => $this->getObject()->get('iduser'), 'required' => false)),
      'idusertype'                        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usertype'), 'required' => false)),
      'titreuser'                         => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'nameuser'                          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'surnameuser'                       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'adressuser'                        => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'countryuser'                       => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'raisonsocialuser'                  => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'phonenumberuser'                   => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'mailuser'                          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'pwduser'                           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'isactivateuser'                    => new sfValidatorInteger(array('required' => false)),
      'lastconnexionuser'                 => new sfValidatorDate(array('required' => false)),
      'zipcodeuser'                       => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'jobdescriptionuser'                => new sfValidatorString(array('max_length' => 3000, 'required' => false)),
      'corporationsize'                   => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'isacceptemailnews'                 => new sfValidatorInteger(array('required' => false)),
      'apayersacotisationpourpublication' => new sfValidatorInteger(array('required' => false)),
      'datevalidationpayement'            => new sfValidatorDate(array('required' => false)),
      'datefinvalidation'                 => new sfValidatorDate(array('required' => false)),
      'isconsultant'                      => new sfValidatorInteger(array('required' => false)),
      'isrecruteur'                       => new sfValidatorInteger(array('required' => false)),
      'issupplier'                        => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

}
