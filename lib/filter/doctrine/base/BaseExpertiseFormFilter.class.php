<?php

/**
 * Expertise filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseExpertiseFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'expertisename'          => new sfWidgetFormFilterInput(),
      'totalsupplierexpertise' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'expertisename'          => new sfValidatorPass(array('required' => false)),
      'totalsupplierexpertise' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('expertise_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Expertise';
  }

  public function getFields()
  {
    return array(
      'idexpertise'            => 'Number',
      'expertisename'          => 'Text',
      'totalsupplierexpertise' => 'Number',
    );
  }
}
