<?php

/**
 * Haveexpertisein form base class.
 *
 * @method Haveexpertisein getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseHaveexpertiseinForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idexpertise' => new sfWidgetFormInputHidden(),
      'iduser'      => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'idexpertise' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idexpertise')), 'empty_value' => $this->getObject()->get('idexpertise'), 'required' => false)),
      'iduser'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('iduser')), 'empty_value' => $this->getObject()->get('iduser'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('haveexpertisein[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Haveexpertisein';
  }

}
