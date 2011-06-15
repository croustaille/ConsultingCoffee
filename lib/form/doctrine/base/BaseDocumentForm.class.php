<?php

/**
 * Document form base class.
 *
 * @method Document getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDocumentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'iddocument'              => new sfWidgetFormInputHidden(),
      'idideas'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ideas'), 'add_empty' => false)),
      'id_confidentialitylevel' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Confidentialitylevel'), 'add_empty' => false)),
      'titredocument'           => new sfWidgetFormInputText(),
      'descriptiondocument'     => new sfWidgetFormTextarea(),
      'chemindocument'          => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'iddocument'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('iddocument')), 'empty_value' => $this->getObject()->get('iddocument'), 'required' => false)),
      'idideas'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Ideas'))),
      'id_confidentialitylevel' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Confidentialitylevel'))),
      'titredocument'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'descriptiondocument'     => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'chemindocument'          => new sfValidatorString(array('max_length' => 300, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('document[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Document';
  }

}
