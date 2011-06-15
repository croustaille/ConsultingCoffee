<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Ideas', 'doctrine');

/**
 * BaseIdeas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idideas
 * @property integer $idcatgeoryidea
 * @property integer $iduser
 * @property string $titreideas
 * @property string $descriptionideas
 * @property float $priceideas
 * @property Catgeoryidea $Catgeoryidea
 * @property User $User
 * @property Doctrine_Collection $Avendu
 * @property Doctrine_Collection $Document
 * 
 * @method integer             getIdideas()          Returns the current record's "idideas" value
 * @method integer             getIdcatgeoryidea()   Returns the current record's "idcatgeoryidea" value
 * @method integer             getIduser()           Returns the current record's "iduser" value
 * @method string              getTitreideas()       Returns the current record's "titreideas" value
 * @method string              getDescriptionideas() Returns the current record's "descriptionideas" value
 * @method float               getPriceideas()       Returns the current record's "priceideas" value
 * @method Catgeoryidea        getCatgeoryidea()     Returns the current record's "Catgeoryidea" value
 * @method User                getUser()             Returns the current record's "User" value
 * @method Doctrine_Collection getAvendu()           Returns the current record's "Avendu" collection
 * @method Doctrine_Collection getDocument()         Returns the current record's "Document" collection
 * @method Ideas               setIdideas()          Sets the current record's "idideas" value
 * @method Ideas               setIdcatgeoryidea()   Sets the current record's "idcatgeoryidea" value
 * @method Ideas               setIduser()           Sets the current record's "iduser" value
 * @method Ideas               setTitreideas()       Sets the current record's "titreideas" value
 * @method Ideas               setDescriptionideas() Sets the current record's "descriptionideas" value
 * @method Ideas               setPriceideas()       Sets the current record's "priceideas" value
 * @method Ideas               setCatgeoryidea()     Sets the current record's "Catgeoryidea" value
 * @method Ideas               setUser()             Sets the current record's "User" value
 * @method Ideas               setAvendu()           Sets the current record's "Avendu" collection
 * @method Ideas               setDocument()         Sets the current record's "Document" collection
 * 
 * @package    ConsultingCoffee
 * @subpackage model
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseIdeas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ideas');
        $this->hasColumn('idideas', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('idcatgeoryidea', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('iduser', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('titreideas', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('descriptionideas', 'string', 4000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4000,
             ));
        $this->hasColumn('priceideas', 'float', 15, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 15,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Catgeoryidea', array(
             'local' => 'idcatgeoryidea',
             'foreign' => 'idcatgeoryidea'));

        $this->hasOne('User', array(
             'local' => 'iduser',
             'foreign' => 'iduser'));

        $this->hasMany('Avendu', array(
             'local' => 'idideas',
             'foreign' => 'idideas'));

        $this->hasMany('Document', array(
             'local' => 'idideas',
             'foreign' => 'idideas'));
    }
}