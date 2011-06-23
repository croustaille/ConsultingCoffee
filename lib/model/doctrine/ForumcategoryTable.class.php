<?php


class ForumcategoryTable extends myDoctrineTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Forumcategory');
    }
}