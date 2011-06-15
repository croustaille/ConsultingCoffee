<?php

/**
 * Experience filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseExperienceFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_cv'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cv'), 'add_empty' => true)),
      'titreexperience'       => new sfWidgetFormFilterInput(),
      'descriptionexperience' => new sfWidgetFormFilterInput(),
      'datedebexperience'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'datefinexperience'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'id_cv'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Cv'), 'column' => 'id_cv')),
      'titreexperience'       => new sfValidatorPass(array('required' => false)),
      'descriptionexperience' => new sfValidatorPass(array('required' => false)),
      'datedebexperience'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'datefinexperience'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('experience_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Experience';
  }

  public function getFields()
  {
    return array(
      'idexperience'          => 'Number',
      'id_cv'                 => 'ForeignKey',
      'titreexperience'       => 'Text',
      'descriptionexperience' => 'Text',
      'datedebexperience'     => 'Date',
      'datefinexperience'     => 'Date',
    );
  }
}
