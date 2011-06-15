<?php

/**
 * Documenttype filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDocumenttypeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'documenttypename' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'documenttypename' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('documenttype_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Documenttype';
  }

  public function getFields()
  {
    return array(
      'iddocumenttype'   => 'Number',
      'documenttypename' => 'Text',
    );
  }
}
