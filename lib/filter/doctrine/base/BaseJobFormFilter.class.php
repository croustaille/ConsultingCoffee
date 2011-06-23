<?php

/**
 * Job filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseJobFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'          => new sfWidgetFormFilterInput(),
      'description'    => new sfWidgetFormFilterInput(),
      'city'           => new sfWidgetFormFilterInput(),
      'dateperemption' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'to_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'with_empty' => true)),
      'country'        => new sfWidgetFormDoctrineChoice(array('model' => 'Country', 'add_empty' => true)),
      'author'         => new sfWidgetFormDoctrineChoice(array('model' => 'DmUser', 'add_empty' => true)),
      'subjobcategory' => new sfWidgetFormDoctrineChoice(array('model' => 'Subjobcategory', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'title'          => new sfValidatorPass(array('required' => false)),
      'description'    => new sfValidatorPass(array('required' => false)),
      'city'           => new sfValidatorPass(array('required' => false)),
      'dateperemption' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'country'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Country'), 'column' => 'id')),
      'author'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Author'), 'column' => 'id')),
      'subjobcategory' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Subjobcategory'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('job_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Job';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'title'          => 'Text',
      'description'    => 'Text',
      'city'           => 'Text',
      'dateperemption' => 'Date',
      'country'        => 'ForeignKey',
      'author'         => 'ForeignKey',
      'subjobcategory' => 'ForeignKey',
    );
  }
}
