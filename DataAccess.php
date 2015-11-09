<?php

/**
 * Created by PhpStorm.
 * User: 1508770
 * Date: 09/11/2015
 * Time: 13:46
 */
class DataAccess
{
    public static function getSection($sectionID) {
//        $query = "select * from sections, articleText where sections.textID = articleText.textID and sectionID = ?";
        $query = "SELECT * FROM sections LEFT OUTER JOIN articleText ON sections.textID = articleText.textID WHERE sectionID = ?";
        $param= array(0  => array($sectionID, PDO::PARAM_STR));
        $result=BD::getInstance()->prepareAndExecuteQueryWithResult($query,$param);
        foreach($result as $value) {
            $section = new Section($value['sectionID'], $value['topicID'], $value['sectionName'], $value['orderID'], $value['textID'], $value['text']);
        }
        return isset($section) ? $section : null;
    }

    public static function getTopics() {
        $query = "SELECT * FROM topics";
        $result=BD::getInstance()->prepareAndExecuteQueryWithResult($query,"");
        foreach($result as $value) {
            $topics[] = new Topic($value['topicID'], $value['topicName']);
        }
        return $topics;
    }
}