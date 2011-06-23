<?php

/**
 * Forumtopicview form base class.
 *
 * @method Forumtopicview getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseForumtopicviewForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'author'     => new sfWidgetFormInputText(),
      'topic'      => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDmDate(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'author'     => new sfValidatorInteger(array('required' => false)),
      'topic'      => new sfValidatorInteger(array('required' => false)),
      'created_at' => new dmValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('forumtopicview[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Forumtopicview';
  }

}
