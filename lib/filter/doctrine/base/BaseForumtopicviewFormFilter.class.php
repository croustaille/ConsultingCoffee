<?php

/**
 * Forumtopicview filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseForumtopicviewFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'author'     => new sfWidgetFormFilterInput(),
      'topic'      => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'to_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'author'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'topic'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('forumtopicview_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Forumtopicview';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'author'     => 'Number',
      'topic'      => 'Number',
      'created_at' => 'Date',
    );
  }
}
