<?php

/**
 * Hotideas filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseHotideasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'price'        => new sfWidgetFormFilterInput(),
      'image'        => new sfWidgetFormDoctrineChoice(array('model' => 'DmMedia', 'add_empty' => true)),
      'categoryidea' => new sfWidgetFormDoctrineChoice(array('model' => 'Categoryidea', 'add_empty' => true)),
      'author'       => new sfWidgetFormDoctrineChoice(array('model' => 'DmUser', 'add_empty' => true)),
      'position'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'price'        => new sfValidatorPass(array('required' => false)),
      'image'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Image'), 'column' => 'id')),
      'categoryidea' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Categoryidea'), 'column' => 'id')),
      'author'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Author'), 'column' => 'id')),
      'position'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('hotideas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Hotideas';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'price'        => 'Text',
      'image'        => 'ForeignKey',
      'categoryidea' => 'ForeignKey',
      'author'       => 'ForeignKey',
      'position'     => 'Number',
    );
  }
}
