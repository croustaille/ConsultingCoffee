<?php

/**
 * City form base class.
 *
 * @method City getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCityForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_city'   => new sfWidgetFormInputHidden(),
      'idcountry' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Country'), 'add_empty' => false)),
      'cityname'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_city'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_city')), 'empty_value' => $this->getObject()->get('id_city'), 'required' => false)),
      'idcountry' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Country'))),
      'cityname'  => new sfValidatorString(array('max_length' => 150, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('city[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'City';
  }

}
