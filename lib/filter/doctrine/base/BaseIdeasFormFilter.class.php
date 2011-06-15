<?php

/**
 * Ideas filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseIdeasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idcatgeoryidea'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Catgeoryidea'), 'add_empty' => true)),
      'iduser'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'titreideas'       => new sfWidgetFormFilterInput(),
      'descriptionideas' => new sfWidgetFormFilterInput(),
      'priceideas'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'idcatgeoryidea'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Catgeoryidea'), 'column' => 'idcatgeoryidea')),
      'iduser'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'iduser')),
      'titreideas'       => new sfValidatorPass(array('required' => false)),
      'descriptionideas' => new sfValidatorPass(array('required' => false)),
      'priceideas'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('ideas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ideas';
  }

  public function getFields()
  {
    return array(
      'idideas'          => 'Number',
      'idcatgeoryidea'   => 'ForeignKey',
      'iduser'           => 'ForeignKey',
      'titreideas'       => 'Text',
      'descriptionideas' => 'Text',
      'priceideas'       => 'Number',
    );
  }
}
