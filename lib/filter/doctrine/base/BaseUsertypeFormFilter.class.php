<?php

/**
 * Usertype filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUsertypeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nameusertype'          => new sfWidgetFormFilterInput(),
      'totalsupplierusertype' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nameusertype'          => new sfValidatorPass(array('required' => false)),
      'totalsupplierusertype' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('usertype_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usertype';
  }

  public function getFields()
  {
    return array(
      'idusertype'            => 'Number',
      'nameusertype'          => 'Text',
      'totalsupplierusertype' => 'Number',
    );
  }
}
