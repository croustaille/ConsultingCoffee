<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Workinsector', 'doctrine');

/**
 * BaseWorkinsector
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_sector
 * @property integer $iduser
 * @property User $User
 * @property Sector $Sector
 * 
 * @method integer      getIdSector()  Returns the current record's "id_sector" value
 * @method integer      getIduser()    Returns the current record's "iduser" value
 * @method User         getUser()      Returns the current record's "User" value
 * @method Sector       getSector()    Returns the current record's "Sector" value
 * @method Workinsector setIdSector()  Sets the current record's "id_sector" value
 * @method Workinsector setIduser()    Sets the current record's "iduser" value
 * @method Workinsector setUser()      Sets the current record's "User" value
 * @method Workinsector setSector()    Sets the current record's "Sector" value
 * 
 * @package    ConsultingCoffee
 * @subpackage model
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseWorkinsector extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('workinsector');
        $this->hasColumn('id_sector', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('iduser', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('User', array(
             'local' => 'iduser',
             'foreign' => 'iduser'));

        $this->hasOne('Sector', array(
             'local' => 'id_sector',
             'foreign' => 'id_sector'));
    }
}