<?php

/**
 * Forum form base class.
 *
 * @method Forum getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id$
 */
abstract class BaseForumForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'title'         => new sfWidgetFormInputText(),
      'description'   => new sfWidgetFormTextarea(),
      'rank'          => new sfWidgetFormInputText(),
      'category'      => new sfWidgetFormInputText(),
      'created_at'    => new sfWidgetFormDmDate(),
      'updated_at'    => new sfWidgetFormDmDate(),
      'stripped_name' => new sfWidgetFormInputText(),
      'latest_post'   => new sfWidgetFormInputText(),
      'nb_posts'      => new sfWidgetFormInputText(),
      'nb_topics'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'title'         => new sfValidatorString(array('max_length' => 255)),
      'description'   => new sfValidatorString(array('required' => false)),
      'rank'          => new sfValidatorInteger(array('required' => false)),
      'category'      => new sfValidatorInteger(array('required' => false)),
      'created_at'    => new dmValidatorDate(array('required' => false)),
      'updated_at'    => new dmValidatorDate(array('required' => false)),
      'stripped_name' => new sfValidatorString(array('max_length' => 255)),
      'latest_post'   => new sfValidatorInteger(array('required' => false)),
      'nb_posts'      => new sfValidatorInteger(array('required' => false)),
      'nb_topics'     => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('forum[%s]');

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
    return 'Forum';
  }

}