<?php

/**
 * Document filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDocumentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idideas'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ideas'), 'add_empty' => true)),
      'id_confidentialitylevel' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Confidentialitylevel'), 'add_empty' => true)),
      'titredocument'           => new sfWidgetFormFilterInput(),
      'descriptiondocument'     => new sfWidgetFormFilterInput(),
      'chemindocument'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'idideas'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Ideas'), 'column' => 'idideas')),
      'id_confidentialitylevel' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Confidentialitylevel'), 'column' => 'id_confidentialitylevel')),
      'titredocument'           => new sfValidatorPass(array('required' => false)),
      'descriptiondocument'     => new sfValidatorPass(array('required' => false)),
      'chemindocument'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('document_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Document';
  }

  public function getFields()
  {
    return array(
      'iddocument'              => 'Number',
      'idideas'                 => 'ForeignKey',
      'id_confidentialitylevel' => 'ForeignKey',
      'titredocument'           => 'Text',
      'descriptiondocument'     => 'Text',
      'chemindocument'          => 'Text',
    );
  }
}
