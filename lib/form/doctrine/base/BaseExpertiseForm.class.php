<?php

/**
 * Expertise form base class.
 *
 * @method Expertise getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseExpertiseForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idexpertise'            => new sfWidgetFormInputHidden(),
      'expertisename'          => new sfWidgetFormInputText(),
      'totalsupplierexpertise' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idexpertise'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idexpertise')), 'empty_value' => $this->getObject()->get('idexpertise'), 'required' => false)),
      'expertisename'          => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'totalsupplierexpertise' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('expertise[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Expertise';
  }

}
