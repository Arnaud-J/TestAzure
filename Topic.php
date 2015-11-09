<?php

/**
 * Created by PhpStorm.
 * User: 1508770
 * Date: 09/11/2015
 * Time: 15:33
 */
class Topic
{
    private $topicID;
    private $topicName;

    /**
     * @return mixed
     */
    public function getTopicID()
    {
        return $this->topicID;
    }

    /**
     * @return mixed
     */
    public function getTopicName()
    {
        return $this->topicName;
    }



    /**
     * The __toString method allows a class to decide how it will react when it is converted to a string.
     *
     * @return string
     * @link http://php.net/manual/en/language.oop5.magic.php#language.oop5.magic.tostring
     */
    function __toString()
    {
        return $this->getTopicID()
            .". "
            . $this->getTopicName();
    }


    /**
     * Topic constructor.
     */
    public function __construct($id, $name)
    {
        $this->topicID = $id;
        $this->topicName = $name;
    }
}