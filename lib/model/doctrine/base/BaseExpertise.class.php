<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Expertise', 'doctrine');

/**
 * BaseExpertise
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idexpertise
 * @property string $expertisename
 * @property integer $totalsupplierexpertise
 * @property Doctrine_Collection $Haveexpertisein
 * 
 * @method integer             getIdexpertise()            Returns the current record's "idexpertise" value
 * @method string              getExpertisename()          Returns the current record's "expertisename" value
 * @method integer             getTotalsupplierexpertise() Returns the current record's "totalsupplierexpertise" value
 * @method Doctrine_Collection getHaveexpertisein()        Returns the current record's "Haveexpertisein" collection
 * @method Expertise           setIdexpertise()            Sets the current record's "idexpertise" value
 * @method Expertise           setExpertisename()          Sets the current record's "expertisename" value
 * @method Expertise           setTotalsupplierexpertise() Sets the current record's "totalsupplierexpertise" value
 * @method Expertise           setHaveexpertisein()        Sets the current record's "Haveexpertisein" collection
 * 
 * @package    ConsultingCoffee
 * @subpackage model
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseExpertise extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('expertise');
        $this->hasColumn('idexpertise', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('expertisename', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 150,
             ));
        $this->hasColumn('totalsupplierexpertise', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Haveexpertisein', array(
             'local' => 'idexpertise',
             'foreign' => 'idexpertise'));
    }
}