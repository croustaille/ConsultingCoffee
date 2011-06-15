<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Formatlistaccept', 'doctrine');

/**
 * BaseFormatlistaccept
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $iddocumenttype
 * @property integer $iddocument
 * @property Document $Document
 * @property Documenttype $Documenttype
 * 
 * @method integer          getIddocumenttype() Returns the current record's "iddocumenttype" value
 * @method integer          getIddocument()     Returns the current record's "iddocument" value
 * @method Document         getDocument()       Returns the current record's "Document" value
 * @method Documenttype     getDocumenttype()   Returns the current record's "Documenttype" value
 * @method Formatlistaccept setIddocumenttype() Sets the current record's "iddocumenttype" value
 * @method Formatlistaccept setIddocument()     Sets the current record's "iddocument" value
 * @method Formatlistaccept setDocument()       Sets the current record's "Document" value
 * @method Formatlistaccept setDocumenttype()   Sets the current record's "Documenttype" value
 * 
 * @package    ConsultingCoffee
 * @subpackage model
 * @author     OUTTRABADY Lucky
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFormatlistaccept extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('formatlistaccept');
        $this->hasColumn('iddocumenttype', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('iddocument', 'integer', 4, array(
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
        $this->hasOne('Document', array(
             'local' => 'iddocument',
             'foreign' => 'iddocument'));

        $this->hasOne('Documenttype', array(
             'local' => 'iddocumenttype',
             'foreign' => 'iddocumenttype'));
    }
}