<?php


class CategoryideaTable extends myDoctrineTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Categoryidea');
    }
}