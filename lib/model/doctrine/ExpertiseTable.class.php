<?php


class ExpertiseTable extends myDoctrineTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Expertise');
    }
}