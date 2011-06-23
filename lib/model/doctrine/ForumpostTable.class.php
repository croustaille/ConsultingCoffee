<?php


class ForumpostTable extends myDoctrineTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Forumpost');
    }
}