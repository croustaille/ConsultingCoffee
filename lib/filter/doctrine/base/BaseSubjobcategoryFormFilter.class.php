<?php

/**
 * Subjobcategory filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSubjobcategoryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idjobcategory'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Jobcategory'), 'add_empty' => true)),
      'titlesubjobcategory' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'idjobcategory'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Jobcategory'), 'column' => 'idjobcategory')),
      'titlesubjobcategory' => new sfValidatorPass(array('required' => false)),
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
      'idsubjobcategory'    => 'Number',
      'idjobcategory'       => 'ForeignKey',
      'titlesubjobcategory' => 'Text',
    );
  }
}
