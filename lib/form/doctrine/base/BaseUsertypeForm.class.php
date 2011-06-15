<?php

/**
 * Usertype form base class.
 *
 * @method Usertype getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsertypeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idusertype'            => new sfWidgetFormInputHidden(),
      'nameusertype'          => new sfWidgetFormInputText(),
      'totalsupplierusertype' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idusertype'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idusertype')), 'empty_value' => $this->getObject()->get('idusertype'), 'required' => false)),
      'nameusertype'          => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'totalsupplierusertype' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usertype[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usertype';
  }

}
