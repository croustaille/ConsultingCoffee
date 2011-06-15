<?php

/**
 * Catgeoryidea form base class.
 *
 * @method Catgeoryidea getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCatgeoryideaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idcatgeoryidea'   => new sfWidgetFormInputHidden(),
      'nom_catgeoryidea' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idcatgeoryidea'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idcatgeoryidea')), 'empty_value' => $this->getObject()->get('idcatgeoryidea'), 'required' => false)),
      'nom_catgeoryidea' => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('catgeoryidea[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Catgeoryidea';
  }

}
