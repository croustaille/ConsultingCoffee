<?php


class ForumtopicviewTable extends myDoctrineTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Forumtopicview');
    }
}