<?php

/**
 * Documenttype form base class.
 *
 * @method Documenttype getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDocumenttypeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'iddocumenttype'   => new sfWidgetFormInputHidden(),
      'documenttypename' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'iddocumenttype'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('iddocumenttype')), 'empty_value' => $this->getObject()->get('iddocumenttype'), 'required' => false)),
      'documenttypename' => new sfValidatorString(array('max_length' => 150, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('documenttype[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Documenttype';
  }

}
