<?php

/**
 * Forum filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseForumFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'         => new sfWidgetFormFilterInput(),
      'description'   => new sfWidgetFormFilterInput(),
      'rank'          => new sfWidgetFormFilterInput(),
      'category'      => new sfWidgetFormFilterInput(),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'to_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'with_empty' => true)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'to_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'with_empty' => true)),
      'stripped_name' => new sfWidgetFormFilterInput(),
      'latest_post'   => new sfWidgetFormFilterInput(),
      'nb_posts'      => new sfWidgetFormFilterInput(),
      'nb_topics'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'title'         => new sfValidatorPass(array('required' => false)),
      'description'   => new sfValidatorPass(array('required' => false)),
      'rank'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'category'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'stripped_name' => new sfValidatorPass(array('required' => false)),
      'latest_post'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nb_posts'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nb_topics'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('forum_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Forum';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'title'         => 'Text',
      'description'   => 'Text',
      'rank'          => 'Number',
      'category'      => 'Number',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
      'stripped_name' => 'Text',
      'latest_post'   => 'Number',
      'nb_posts'      => 'Number',
      'nb_topics'     => 'Number',
    );
  }
}
