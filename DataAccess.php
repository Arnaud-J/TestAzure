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
        $query = "select sectionName from sections where sectionID = ?";
        $param= array(0  => array($sectionID, PDO::PARAM_STR));
        $result=BD::getInstance()->prepareAndExecuteQueryWithResult($query,$param);
        foreach($result as $value) {
            $sectionName[] = $value['sectionName'];
        }
        return $sectionName['sectionName'];
    }
}