<?php

/**
 * Country form base class.
 *
 * @method Country getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCountryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idcountry'   => new sfWidgetFormInputHidden(),
      'namecountry' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idcountry'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idcountry')), 'empty_value' => $this->getObject()->get('idcountry'), 'required' => false)),
      'namecountry' => new sfValidatorString(array('max_length' => 150, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('country[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Country';
  }

}
