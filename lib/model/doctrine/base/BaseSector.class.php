<?php

/**
 * BaseSector
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property Doctrine_Collection $DmUser
 * 
 * @method string              getTitle()  Returns the current record's "title" value
 * @method Doctrine_Collection getDmUser() Returns the current record's "DmUser" collection
 * @method Sector              setTitle()  Sets the current record's "title" value
 * @method Sector              setDmUser() Sets the current record's "DmUser" collection
 * 
 * @package    ConsultingCoffee
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSector extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sector');
        $this->hasColumn('title', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('DmUser', array(
             'local' => 'id',
             'foreign' => 'sector'));
    }
}