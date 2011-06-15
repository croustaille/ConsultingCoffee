<?php

/**
 * Job filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJobFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idcountry'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Country'), 'add_empty' => true)),
      'id_city'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('City'), 'add_empty' => true)),
      'iduser'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'idsubjobcategory' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Subjobcategory'), 'add_empty' => true)),
      'jobname'          => new sfWidgetFormFilterInput(),
      'descriptionjob'   => new sfWidgetFormFilterInput(),
      'datedeadlinejob'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'idcountry'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Country'), 'column' => 'idcountry')),
      'id_city'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('City'), 'column' => 'id_city')),
      'iduser'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'iduser')),
      'idsubjobcategory' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Subjobcategory'), 'column' => 'idsubjobcategory')),
      'jobname'          => new sfValidatorPass(array('required' => false)),
      'descriptionjob'   => new sfValidatorPass(array('required' => false)),
      'datedeadlinejob'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
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
      'idjob'            => 'Number',
      'idcountry'        => 'ForeignKey',
      'id_city'          => 'ForeignKey',
      'iduser'           => 'ForeignKey',
      'idsubjobcategory' => 'ForeignKey',
      'jobname'          => 'Text',
      'descriptionjob'   => 'Text',
      'datedeadlinejob'  => 'Date',
    );
  }
}
