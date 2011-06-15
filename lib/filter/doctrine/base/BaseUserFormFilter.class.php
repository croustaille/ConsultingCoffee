<?php

/**
 * User filter form base class.
 *
 * @package    ConsultingCoffee
 * @subpackage filter
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idusertype'                        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usertype'), 'add_empty' => true)),
      'titreuser'                         => new sfWidgetFormFilterInput(),
      'nameuser'                          => new sfWidgetFormFilterInput(),
      'surnameuser'                       => new sfWidgetFormFilterInput(),
      'adressuser'                        => new sfWidgetFormFilterInput(),
      'countryuser'                       => new sfWidgetFormFilterInput(),
      'raisonsocialuser'                  => new sfWidgetFormFilterInput(),
      'phonenumberuser'                   => new sfWidgetFormFilterInput(),
      'mailuser'                          => new sfWidgetFormFilterInput(),
      'pwduser'                           => new sfWidgetFormFilterInput(),
      'isactivateuser'                    => new sfWidgetFormFilterInput(),
      'lastconnexionuser'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'zipcodeuser'                       => new sfWidgetFormFilterInput(),
      'jobdescriptionuser'                => new sfWidgetFormFilterInput(),
      'corporationsize'                   => new sfWidgetFormFilterInput(),
      'isacceptemailnews'                 => new sfWidgetFormFilterInput(),
      'apayersacotisationpourpublication' => new sfWidgetFormFilterInput(),
      'datevalidationpayement'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'datefinvalidation'                 => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'isconsultant'                      => new sfWidgetFormFilterInput(),
      'isrecruteur'                       => new sfWidgetFormFilterInput(),
      'issupplier'                        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'idusertype'                        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Usertype'), 'column' => 'idusertype')),
      'titreuser'                         => new sfValidatorPass(array('required' => false)),
      'nameuser'                          => new sfValidatorPass(array('required' => false)),
      'surnameuser'                       => new sfValidatorPass(array('required' => false)),
      'adressuser'                        => new sfValidatorPass(array('required' => false)),
      'countryuser'                       => new sfValidatorPass(array('required' => false)),
      'raisonsocialuser'                  => new sfValidatorPass(array('required' => false)),
      'phonenumberuser'                   => new sfValidatorPass(array('required' => false)),
      'mailuser'                          => new sfValidatorPass(array('required' => false)),
      'pwduser'                           => new sfValidatorPass(array('required' => false)),
      'isactivateuser'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'lastconnexionuser'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'zipcodeuser'                       => new sfValidatorPass(array('required' => false)),
      'jobdescriptionuser'                => new sfValidatorPass(array('required' => false)),
      'corporationsize'                   => new sfValidatorPass(array('required' => false)),
      'isacceptemailnews'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'apayersacotisationpourpublication' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'datevalidationpayement'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'datefinvalidation'                 => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'isconsultant'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'isrecruteur'                       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'issupplier'                        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

  public function getFields()
  {
    return array(
      'iduser'                            => 'Number',
      'idusertype'                        => 'ForeignKey',
      'titreuser'                         => 'Text',
      'nameuser'                          => 'Text',
      'surnameuser'                       => 'Text',
      'adressuser'                        => 'Text',
      'countryuser'                       => 'Text',
      'raisonsocialuser'                  => 'Text',
      'phonenumberuser'                   => 'Text',
      'mailuser'                          => 'Text',
      'pwduser'                           => 'Text',
      'isactivateuser'                    => 'Number',
      'lastconnexionuser'                 => 'Date',
      'zipcodeuser'                       => 'Text',
      'jobdescriptionuser'                => 'Text',
      'corporationsize'                   => 'Text',
      'isacceptemailnews'                 => 'Number',
      'apayersacotisationpourpublication' => 'Number',
      'datevalidationpayement'            => 'Date',
      'datefinvalidation'                 => 'Date',
      'isconsultant'                      => 'Number',
      'isrecruteur'                       => 'Number',
      'issupplier'                        => 'Number',
    );
  }
}
