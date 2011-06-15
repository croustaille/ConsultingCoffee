<?php

/**
 * Confidentialitylevel filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseConfidentialitylevelFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nameconfidentialitylevel' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nameconfidentialitylevel' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('confidentialitylevel_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Confidentialitylevel';
  }

  public function getFields()
  {
    return array(
      'id_confidentialitylevel'  => 'Number',
      'nameconfidentialitylevel' => 'Text',
    );
  }
}
