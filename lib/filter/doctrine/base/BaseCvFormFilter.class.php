<?php

/**
 * Cv filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCvFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'             => new sfWidgetFormFilterInput(),
      'description'       => new sfWidgetFormFilterInput(),
      'datedisponibilite' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'to_date' => new sfWidgetFormInputText(array(), array("class" => "datepicker_me")), 'with_empty' => true)),
      'user'              => new sfWidgetFormDoctrineChoice(array('model' => 'DmUser', 'add_empty' => true)),
      'tarif'             => new sfWidgetFormFilterInput(),
      'isvisible'         => new sfWidgetFormChoice(array('choices' => array('' => dm::getI18n()->__('yes or no', array(), 'dm'), 1 => dm::getI18n()->__('yes', array(), 'dm'), 0 => dm::getI18n()->__('no', array(), 'dm')))),
      'isdisponible'      => new sfWidgetFormChoice(array('choices' => array('' => dm::getI18n()->__('yes or no', array(), 'dm'), 1 => dm::getI18n()->__('yes', array(), 'dm'), 0 => dm::getI18n()->__('no', array(), 'dm')))),
    ));

    $this->setValidators(array(
      'title'             => new sfValidatorPass(array('required' => false)),
      'description'       => new sfValidatorPass(array('required' => false)),
      'datedisponibilite' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'user'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'tarif'             => new sfValidatorPass(array('required' => false)),
      'isvisible'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'isdisponible'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('cv_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cv';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'title'             => 'Text',
      'description'       => 'Text',
      'datedisponibilite' => 'Date',
      'user'              => 'ForeignKey',
      'tarif'             => 'Text',
      'isvisible'         => 'Boolean',
      'isdisponible'      => 'Boolean',
    );
  }
}
