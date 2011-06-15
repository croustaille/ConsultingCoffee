<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Experience', 'doctrine');

/**
 * BaseExperience
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idexperience
 * @property integer $id_cv
 * @property string $titreexperience
 * @property string $descriptionexperience
 * @property date $datedebexperience
 * @property date $datefinexperience
 * @property Cv $Cv
 * 
 * @method integer    getIdexperience()          Returns the current record's "idexperience" value
 * @method integer    getIdCv()                  Returns the current record's "id_cv" value
 * @method string     getTitreexperience()       Returns the current record's "titreexperience" value
 * @method string     getDescriptionexperience() Returns the current record's "descriptionexperience" value
 * @method date       getDatedebexperience()     Returns the current record's "datedebexperience" value
 * @method date       getDatefinexperience()     Returns the current record's "datefinexperience" value
 * @method Cv         getCv()                    Returns the current record's "Cv" value
 * @method Experience setIdexperience()          Sets the current record's "idexperience" value
 * @method Experience setIdCv()                  Sets the current record's "id_cv" value
 * @method Experience setTitreexperience()       Sets the current record's "titreexperience" value
 * @method Experience setDescriptionexperience() Sets the current record's "descriptionexperience" value
 * @method Experience setDatedebexperience()     Sets the current record's "datedebexperience" value
 * @method Experience setDatefinexperience()     Sets the current record's "datefinexperience" value
 * @method Experience setCv()                    Sets the current record's "Cv" value
 * 
 * @package    ConsultingCoffee
 * @subpackage model
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseExperience extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('experience');
        $this->hasColumn('idexperience', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('id_cv', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('titreexperience', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 150,
             ));
        $this->hasColumn('descriptionexperience', 'string', 4000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4000,
             ));
        $this->hasColumn('datedebexperience', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('datefinexperience', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Cv', array(
             'local' => 'id_cv',
             'foreign' => 'id_cv'));
    }
}