<?php


class SubjobcategoryTable extends myDoctrineTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Subjobcategory');
    }
}