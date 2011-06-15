<?php

/**
 * Formatlistaccept form base class.
 *
 * @method Formatlistaccept getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFormatlistacceptForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'iddocumenttype' => new sfWidgetFormInputHidden(),
      'iddocument'     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'iddocumenttype' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('iddocumenttype')), 'empty_value' => $this->getObject()->get('iddocumenttype'), 'required' => false)),
      'iddocument'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('iddocument')), 'empty_value' => $this->getObject()->get('iddocument'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('formatlistaccept[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Formatlistaccept';
  }

}
