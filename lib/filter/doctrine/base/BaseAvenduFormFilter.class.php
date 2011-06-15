<?php

/**
 * Avendu filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAvenduFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'datevente'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'envoieconfirmation' => new sfWidgetFormFilterInput(),
      'prixvente'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'datevente'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'envoieconfirmation' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'prixvente'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('avendu_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Avendu';
  }

  public function getFields()
  {
    return array(
      'iduser'             => 'Number',
      'idideas'            => 'Number',
      'datevente'          => 'Date',
      'envoieconfirmation' => 'Number',
      'prixvente'          => 'Number',
    );
  }
}
