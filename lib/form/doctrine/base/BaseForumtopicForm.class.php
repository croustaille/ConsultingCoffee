<?php

/**
 * Forumtopic form base class.
 *
 * @method Forumtopic getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id$
 */
abstract class BaseForumtopicForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'title'          => new sfWidgetFormInputText(),
      'is_sticked'     => new sfWidgetFormInputCheckbox(),
      'is_locked'      => new sfWidgetFormInputCheckbox(),
      'forum'          => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDmDate(),
      'updated_at'     => new sfWidgetFormDmDate(),
      'latest_post'    => new sfWidgetFormInputText(),
      'author'         => new sfWidgetFormInputText(),
      'stripped_title' => new sfWidgetFormInputText(),
      'nb_posts'       => new sfWidgetFormInputText(),
      'nb_views'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'title'          => new sfValidatorString(array('max_length' => 255)),
      'is_sticked'     => new sfValidatorBoolean(array('required' => false)),
      'is_locked'      => new sfValidatorBoolean(array('required' => false)),
      'forum'          => new sfValidatorInteger(array('required' => false)),
      'created_at'     => new dmValidatorDate(array('required' => false)),
      'updated_at'     => new dmValidatorDate(array('required' => false)),
      'latest_post'    => new sfValidatorInteger(array('required' => false)),
      'author'         => new sfValidatorInteger(array('required' => false)),
      'stripped_title' => new sfValidatorString(array('max_length' => 255)),
      'nb_posts'       => new sfValidatorInteger(array('required' => false)),
      'nb_views'       => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('forumtopic[%s]');

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
    return 'Forumtopic';
  }

}