<?php

/**
 * Cv form base class.
 *
 * @method Cv getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id$
 */
abstract class BaseCvForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'title'             => new sfWidgetFormInputText(),
      'description'       => new sfWidgetFormTextarea(),
      'datedisponibilite' => new sfWidgetFormDmDate(),
      'user'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => false)),
      'tarif'             => new sfWidgetFormInputText(),
      'isvisible'         => new sfWidgetFormInputCheckbox(),
      'isdisponible'      => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'title'             => new sfValidatorString(array('max_length' => 100)),
      'description'       => new sfValidatorString(array('required' => false)),
      'datedisponibilite' => new dmValidatorDate(array('required' => false)),
      'user'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'))),
      'tarif'             => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'isvisible'         => new sfValidatorBoolean(array('required' => false)),
      'isdisponible'      => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cv[%s]');

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
    return 'Cv';
  }

}