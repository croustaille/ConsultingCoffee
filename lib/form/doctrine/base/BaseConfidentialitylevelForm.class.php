<?php

/**
 * Confidentialitylevel form base class.
 *
 * @method Confidentialitylevel getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseConfidentialitylevelForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_confidentialitylevel'  => new sfWidgetFormInputHidden(),
      'nameconfidentialitylevel' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_confidentialitylevel'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_confidentialitylevel')), 'empty_value' => $this->getObject()->get('id_confidentialitylevel'), 'required' => false)),
      'nameconfidentialitylevel' => new sfValidatorString(array('max_length' => 150, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('confidentialitylevel[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Confidentialitylevel';
  }

}
