<?php

/**
 * Forumpost form base class.
 *
 * @method Forumpost getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseForumpostForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'title'       => new sfWidgetFormInputText(),
      'content'     => new sfWidgetFormTextarea(),
      'topic'       => new sfWidgetFormInputText(),
      'author'      => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDmDate(),
      'forum'       => new sfWidgetFormInputText(),
      'author_name' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'title'       => new sfValidatorString(array('max_length' => 255)),
      'content'     => new sfValidatorString(array('required' => false)),
      'topic'       => new sfValidatorInteger(array('required' => false)),
      'author'      => new sfValidatorInteger(array('required' => false)),
      'created_at'  => new dmValidatorDate(array('required' => false)),
      'forum'       => new sfValidatorInteger(array('required' => false)),
      'author_name' => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('forumpost[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Forumpost';
  }

}
