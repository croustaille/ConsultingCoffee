<?php

/**
 * Sector filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSectorFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sectorname'          => new sfWidgetFormFilterInput(),
      'totalsuppliersector' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'sectorname'          => new sfValidatorPass(array('required' => false)),
      'totalsuppliersector' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('sector_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Sector';
  }

  public function getFields()
  {
    return array(
      'id_sector'           => 'Number',
      'sectorname'          => 'Text',
      'totalsuppliersector' => 'Number',
    );
  }
}
