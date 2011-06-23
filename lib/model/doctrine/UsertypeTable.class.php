<?php


class UsertypeTable extends myDoctrineTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Usertype');
    }
}