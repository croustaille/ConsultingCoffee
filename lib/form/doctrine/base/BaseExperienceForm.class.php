<?php

/**
 * Experience form base class.
 *
 * @method Experience getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseExperienceForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idexperience'          => new sfWidgetFormInputHidden(),
      'id_cv'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cv'), 'add_empty' => false)),
      'titreexperience'       => new sfWidgetFormInputText(),
      'descriptionexperience' => new sfWidgetFormTextarea(),
      'datedebexperience'     => new sfWidgetFormDate(),
      'datefinexperience'     => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'idexperience'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idexperience')), 'empty_value' => $this->getObject()->get('idexperience'), 'required' => false)),
      'id_cv'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Cv'))),
      'titreexperience'       => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'descriptionexperience' => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'datedebexperience'     => new sfValidatorDate(array('required' => false)),
      'datefinexperience'     => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('experience[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Experience';
  }

}
