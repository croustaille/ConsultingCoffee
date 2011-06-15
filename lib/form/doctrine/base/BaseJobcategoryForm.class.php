<?php

/**
 * Jobcategory form base class.
 *
 * @method Jobcategory getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJobcategoryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idjobcategory'    => new sfWidgetFormInputHidden(),
      'titlejobcategory' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idjobcategory'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idjobcategory')), 'empty_value' => $this->getObject()->get('idjobcategory'), 'required' => false)),
      'titlejobcategory' => new sfValidatorString(array('max_length' => 150, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jobcategory[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Jobcategory';
  }

}
