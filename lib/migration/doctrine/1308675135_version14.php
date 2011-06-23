<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version14 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('subjobcategory', 'subjobcategory_jobcategory_jobcategory_id', array(
             'name' => 'subjobcategory_jobcategory_jobcategory_id',
             'local' => 'jobcategory',
             'foreign' => 'id',
             'foreignTable' => 'jobcategory',
             ));
        $this->addIndex('subjobcategory', 'subjobcategory_jobcategory', array(
             'fields' => 
             array(
              0 => 'jobcategory',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('subjobcategory', 'subjobcategory_jobcategory_jobcategory_id');
        $this->removeIndex('subjobcategory', 'subjobcategory_jobcategory', array(
             'fields' => 
             array(
              0 => 'jobcategory',
             ),
             ));
    }
}