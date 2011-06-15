<?php

/**
 * Avendu form base class.
 *
 * @method Avendu getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAvenduForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'iduser'             => new sfWidgetFormInputHidden(),
      'idideas'            => new sfWidgetFormInputHidden(),
      'datevente'          => new sfWidgetFormDate(),
      'envoieconfirmation' => new sfWidgetFormInputText(),
      'prixvente'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'iduser'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('iduser')), 'empty_value' => $this->getObject()->get('iduser'), 'required' => false)),
      'idideas'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idideas')), 'empty_value' => $this->getObject()->get('idideas'), 'required' => false)),
      'datevente'          => new sfValidatorDate(array('required' => false)),
      'envoieconfirmation' => new sfValidatorInteger(array('required' => false)),
      'prixvente'          => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('avendu[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Avendu';
  }

}
