<?php


class HotideasTable extends myDoctrineTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Hotideas');
    }
}