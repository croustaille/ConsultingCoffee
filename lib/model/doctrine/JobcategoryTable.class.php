<?php


class JobcategoryTable extends myDoctrineTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Jobcategory');
    }
}