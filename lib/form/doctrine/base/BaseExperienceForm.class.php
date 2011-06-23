<?php

/**
 * Experience form base class.
 *
 * @method Experience getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id$
 */
abstract class BaseExperienceForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'title'       => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormTextarea(),
      'datedeb'     => new sfWidgetFormDmDate(),
      'datefin'     => new sfWidgetFormDmDate(),
      'cv'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cv'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'title'       => new sfValidatorString(array('max_length' => 100)),
      'description' => new sfValidatorString(array('required' => false)),
      'datedeb'     => new dmValidatorDate(array('required' => false)),
      'datefin'     => new dmValidatorDate(array('required' => false)),
      'cv'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Cv'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('experience[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
    
    // Unset automatic fields like 'created_at', 'updated_at', 'position'
    // override this method in your form to keep them
    parent::unsetAutoFields();
  }


  protected function doBind(array $values)
  {
    parent::doBind($values);
  }
  
  public function processValues($values)
  {
    $values = parent::processValues($values);
    return $values;
  }
  
  protected function doUpdateObject($values)
  {
    parent::doUpdateObject($values);
  }

  public function getModelName()
  {
    return 'Experience';
  }

}