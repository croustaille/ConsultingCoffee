<?php

/**
 * Workinsector form base class.
 *
 * @method Workinsector getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseWorkinsectorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_sector' => new sfWidgetFormInputHidden(),
      'iduser'    => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id_sector' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_sector')), 'empty_value' => $this->getObject()->get('id_sector'), 'required' => false)),
      'iduser'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('iduser')), 'empty_value' => $this->getObject()->get('iduser'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('workinsector[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Workinsector';
  }

}
