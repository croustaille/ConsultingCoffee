<?php

/**
 * Jobcategory filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJobcategoryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'titlejobcategory' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'titlejobcategory' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jobcategory_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Jobcategory';
  }

  public function getFields()
  {
    return array(
      'idjobcategory'    => 'Number',
      'titlejobcategory' => 'Text',
    );
  }
}
