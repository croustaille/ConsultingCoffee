<?php

/**
 * Sector form base class.
 *
 * @method Sector getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSectorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_sector'           => new sfWidgetFormInputHidden(),
      'sectorname'          => new sfWidgetFormInputText(),
      'totalsuppliersector' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_sector'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_sector')), 'empty_value' => $this->getObject()->get('id_sector'), 'required' => false)),
      'sectorname'          => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'totalsuppliersector' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sector[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Sector';
  }

}
