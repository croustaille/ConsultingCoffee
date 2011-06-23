<?php


class ConfidentialitylevelTable extends myDoctrineTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Confidentialitylevel');
    }
}