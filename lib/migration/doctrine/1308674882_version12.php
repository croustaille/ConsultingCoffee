<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version12 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('hotideas', 'hotideas_categoryidea_categoryidea_id', array(
             'name' => 'hotideas_categoryidea_categoryidea_id',
             'local' => 'categoryidea',
             'foreign' => 'id',
             'foreignTable' => 'categoryidea',
             ));
        $this->createForeignKey('hotideas', 'hotideas_image_dm_media_id', array(
             'name' => 'hotideas_image_dm_media_id',
             'local' => 'image',
             'foreign' => 'id',
             'foreignTable' => 'dm_media',
             ));
        $this->createForeignKey('hotideas', 'hotideas_author_dm_user_id', array(
             'name' => 'hotideas_author_dm_user_id',
             'local' => 'author',
             'foreign' => 'id',
             'foreignTable' => 'dm_user',
             ));
        $this->createForeignKey('hotideas_translation', 'hotideas_translation_id_hotideas_id', array(
             'name' => 'hotideas_translation_id_hotideas_id',
             'local' => 'id',
             'foreign' => 'id',
             'foreignTable' => 'hotideas',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('hotideas_translation_version', 'hotideas_translation_version_id_hotideas_translation_id', array(
             'name' => 'hotideas_translation_version_id_hotideas_translation_id',
             'local' => 'id',
             'foreign' => 'id',
             'foreignTable' => 'hotideas_translation',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->addIndex('hotideas', 'hotideas_categoryidea', array(
             'fields' => 
             array(
              0 => 'categoryidea',
             ),
             ));
        $this->addIndex('hotideas', 'hotideas_image', array(
             'fields' => 
             array(
              0 => 'image',
             ),
             ));
        $this->addIndex('hotideas', 'hotideas_author', array(
             'fields' => 
             array(
              0 => 'author',
             ),
             ));
        $this->addIndex('hotideas_translation', 'hotideas_translation_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->addIndex('hotideas_translation_version', 'hotideas_translation_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('hotideas', 'hotideas_categoryidea_categoryidea_id');
        $this->dropForeignKey('hotideas', 'hotideas_image_dm_media_id');
        $this->dropForeignKey('hotideas', 'hotideas_author_dm_user_id');
        $this->dropForeignKey('hotideas_translation', 'hotideas_translation_id_hotideas_id');
        $this->dropForeignKey('hotideas_translation_version', 'hotideas_translation_version_id_hotideas_translation_id');
        $this->removeIndex('hotideas', 'hotideas_categoryidea', array(
             'fields' => 
             array(
              0 => 'categoryidea',
             ),
             ));
        $this->removeIndex('hotideas', 'hotideas_image', array(
             'fields' => 
             array(
              0 => 'image',
             ),
             ));
        $this->removeIndex('hotideas', 'hotideas_author', array(
             'fields' => 
             array(
              0 => 'author',
             ),
             ));
        $this->removeIndex('hotideas_translation', 'hotideas_translation_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
        $this->removeIndex('hotideas_translation_version', 'hotideas_translation_version_id', array(
             'fields' => 
             array(
              0 => 'id',
             ),
             ));
    }
}