<?php

/**
 * Created by PhpStorm.
 * User: 1508770
 * Date: 09/11/2015
 * Time: 13:46
 */
class DataAccess
{
    public static function getTitle($sectionID) {
        $query = "select sectionName from sections where sectionID =". $sectionID;
        $result=BD::getInstance()->prepareAndExecuteQueryWithResult($query,'');
        return $result;
    }
}