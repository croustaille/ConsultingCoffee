<?php

/**
 * Cv form base class.
 *
 * @method Cv getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCvForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_cv'               => new sfWidgetFormInputHidden(),
      'iduser'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => false)),
      'titrecv'             => new sfWidgetFormInputText(),
      'descriptioncv'       => new sfWidgetFormTextarea(),
      'datedisponibilitecv' => new sfWidgetFormDate(),
      'tarifcv'             => new sfWidgetFormInputText(),
      'estvisiblecv'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_cv'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_cv')), 'empty_value' => $this->getObject()->get('id_cv'), 'required' => false)),
      'iduser'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'))),
      'titrecv'             => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'descriptioncv'       => new sfValidatorString(array('max_length' => 300, 'required' => false)),
      'datedisponibilitecv' => new sfValidatorDate(array('required' => false)),
      'tarifcv'             => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'estvisiblecv'        => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cv[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cv';
  }

}
