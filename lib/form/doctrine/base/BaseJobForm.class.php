<?php

/**
 * Job form base class.
 *
 * @method Job getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJobForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idjob'            => new sfWidgetFormInputHidden(),
      'idcountry'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Country'), 'add_empty' => false)),
      'id_city'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('City'), 'add_empty' => true)),
      'iduser'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => false)),
      'idsubjobcategory' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Subjobcategory'), 'add_empty' => false)),
      'jobname'          => new sfWidgetFormInputText(),
      'descriptionjob'   => new sfWidgetFormTextarea(),
      'datedeadlinejob'  => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'idjob'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idjob')), 'empty_value' => $this->getObject()->get('idjob'), 'required' => false)),
      'idcountry'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Country'))),
      'id_city'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('City'), 'required' => false)),
      'iduser'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'))),
      'idsubjobcategory' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Subjobcategory'))),
      'jobname'          => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'descriptionjob'   => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'datedeadlinejob'  => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('job[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Job';
  }

}
