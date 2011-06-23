<?php

/**
 * Subjobcategory filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSubjobcategoryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'       => new sfWidgetFormFilterInput(),
      'jobcategory' => new sfWidgetFormDoctrineChoice(array('model' => 'Jobcategory', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'title'       => new sfValidatorPass(array('required' => false)),
      'jobcategory' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Jobcategory'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('subjobcategory_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Subjobcategory';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'title'       => 'Text',
      'jobcategory' => 'ForeignKey',
    );
  }
}
