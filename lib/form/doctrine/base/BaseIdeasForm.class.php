<?php

/**
 * Ideas form base class.
 *
 * @method Ideas getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseIdeasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idideas'          => new sfWidgetFormInputHidden(),
      'idcatgeoryidea'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Catgeoryidea'), 'add_empty' => false)),
      'iduser'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => false)),
      'titreideas'       => new sfWidgetFormInputText(),
      'descriptionideas' => new sfWidgetFormTextarea(),
      'priceideas'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idideas'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idideas')), 'empty_value' => $this->getObject()->get('idideas'), 'required' => false)),
      'idcatgeoryidea'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Catgeoryidea'))),
      'iduser'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'))),
      'titreideas'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'descriptionideas' => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'priceideas'       => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ideas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ideas';
  }

}
