<?php

/**
 * Cv filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCvFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'iduser'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'titrecv'             => new sfWidgetFormFilterInput(),
      'descriptioncv'       => new sfWidgetFormFilterInput(),
      'datedisponibilitecv' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'tarifcv'             => new sfWidgetFormFilterInput(),
      'estvisiblecv'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'iduser'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'iduser')),
      'titrecv'             => new sfValidatorPass(array('required' => false)),
      'descriptioncv'       => new sfValidatorPass(array('required' => false)),
      'datedisponibilitecv' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'tarifcv'             => new sfValidatorPass(array('required' => false)),
      'estvisiblecv'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('cv_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cv';
  }

  public function getFields()
  {
    return array(
      'id_cv'               => 'Number',
      'iduser'              => 'ForeignKey',
      'titrecv'             => 'Text',
      'descriptioncv'       => 'Text',
      'datedisponibilitecv' => 'Date',
      'tarifcv'             => 'Text',
      'estvisiblecv'        => 'Number',
    );
  }
}
