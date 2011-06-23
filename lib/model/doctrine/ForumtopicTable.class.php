<?php


class ForumtopicTable extends myDoctrineTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Forumtopic');
    }
}