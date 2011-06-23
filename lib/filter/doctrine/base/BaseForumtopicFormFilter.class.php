<?php

/**
 * Forumtopic filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseForumtopicFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'          => new sfWidgetFormFilterInput(),
      'is_sticked'     => new sfWidgetFormChoice(array('choices' => array('' => dm::getI18n()->__('yes or no', array(), 'dm'), 1 => dm::getI18n()->__('yes', array(), 'dm'), 0 => dm::getI18n()->__('no', array(), 'dm')))),
      'is_locked'      => new sfWidgetFormChoice(array('choices' => array('' => dm::getI18n()->__('yes or no', array(), 'dm'), 1 => dm::getI18n()->__('yes', array(), 'dm'), 0 => dm::getI18n()->__('no', array(), 'dm')))),
      'forum'          => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'to_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'with_empty' => true)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'to_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'with_empty' => true)),
      'latest_post'    => new sfWidgetFormFilterInput(),
      'author'         => new sfWidgetFormFilterInput(),
      'stripped_title' => new sfWidgetFormFilterInput(),
      'nb_posts'       => new sfWidgetFormFilterInput(),
      'nb_views'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'title'          => new sfValidatorPass(array('required' => false)),
      'is_sticked'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_locked'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'forum'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'latest_post'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'author'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'stripped_title' => new sfValidatorPass(array('required' => false)),
      'nb_posts'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nb_views'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('forumtopic_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Forumtopic';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'title'          => 'Text',
      'is_sticked'     => 'Boolean',
      'is_locked'      => 'Boolean',
      'forum'          => 'Number',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
      'latest_post'    => 'Number',
      'author'         => 'Number',
      'stripped_title' => 'Text',
      'nb_posts'       => 'Number',
      'nb_views'       => 'Number',
    );
  }
}
