<?php

/**
 * Subjobcategory form base class.
 *
 * @method Subjobcategory getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSubjobcategoryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idsubjobcategory'    => new sfWidgetFormInputHidden(),
      'idjobcategory'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Jobcategory'), 'add_empty' => false)),
      'titlesubjobcategory' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idsubjobcategory'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idsubjobcategory')), 'empty_value' => $this->getObject()->get('idsubjobcategory'), 'required' => false)),
      'idjobcategory'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Jobcategory'))),
      'titlesubjobcategory' => new sfValidatorString(array('max_length' => 150, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('subjobcategory[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Subjobcategory';
  }

}
