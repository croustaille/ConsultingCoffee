<?php

/**
 * Catgeoryidea filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCatgeoryideaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nom_catgeoryidea' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nom_catgeoryidea' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('catgeoryidea_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Catgeoryidea';
  }

  public function getFields()
  {
    return array(
      'idcatgeoryidea'   => 'Number',
      'nom_catgeoryidea' => 'Text',
    );
  }
}
