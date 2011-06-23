<?php

/**
 * Hotideas form base class.
 *
 * @method Hotideas getObject() Returns the current form's model object
 *
 * @package    ConsultingCoffee
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id$
 */
abstract class BaseHotideasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'price'        => new sfWidgetFormInputText(),
      'image'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Image'), 'add_empty' => true)),
      'categoryidea' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categoryidea'), 'add_empty' => true)),
      'author'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Author'), 'add_empty' => false)),
      'position'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'price'        => new sfValidatorString(array('max_length' => 80)),
      'image'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Image'), 'required' => false)),
      'categoryidea' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Categoryidea'), 'required' => false)),
      'author'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Author'))),
      'position'     => new sfValidatorInteger(array('required' => false)),
    ));

    /*
     * Embed Media form for image
     */
    $this->embedForm('image_form', $this->createMediaFormForImage());
    unset($this['image']);

		if('embed' == sfConfig::get('dm_i18n_form'))
    {
      $this->embedI18n(sfConfig::get('dm_i18n_cultures'));
    }
    else
    {
      $this->mergeI18nForm();
		}

    $this->widgetSchema->setNameFormat('hotideas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
    
    // Unset automatic fields like 'created_at', 'updated_at', 'position'
    // override this method in your form to keep them
    parent::unsetAutoFields();
  }

  /**
   * Creates a DmMediaForm instance for image
   *
   * @return DmMediaForm a form instance for the related media
   */
  protected function createMediaFormForImage()
  {
    return DmMediaForRecordForm::factory($this->object, 'image', 'Image', $this->validatorSchema['image']->getOption('required'));
  }

  protected function doBind(array $values)
  {
    $values = $this->filterValuesByEmbeddedMediaForm($values, 'image');
    parent::doBind($values);
  }
  
  public function processValues($values)
  {
    $values = parent::processValues($values);
    $values = $this->processValuesForEmbeddedMediaForm($values, 'image');
    return $values;
  }
  
  protected function doUpdateObject($values)
  {
    parent::doUpdateObject($values);
    $this->doUpdateObjectForEmbeddedMediaForm($values, 'image', 'Image');
  }

  public function getModelName()
  {
    return 'Hotideas';
  }

}