<?php

/**
 * Created by PhpStorm.
 * User: 1508770
 * Date: 09/11/2015
 * Time: 14:38
 */
class Section
{
    private $sectionID;
    private $topicID;
    private $sectionName="";
    private $orderID;
    private $textID;
    private $text="";

    /**
     * @return mixed
     */
    public function getSectionID()
    {
        return $this->sectionID;
    }

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
    public function getSectionName()
    {
        return $this->sectionName;
    }

    /**
     * @return mixed
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * @return mixed
     */
    public function getTextID()
    {
        return $this->textID;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }


    /**
     * Section constructor.
     */
    public function __construct($sectionID, $topicID, $sectionName, $orderID, $textID, $text)
    {
        $this->sectionID = $sectionID;
        $this->topicID = $topicID;
        $this->sectionName = $sectionName;
        $this->orderID = $orderID;
        $this-> textID = $textID;
        if(isset($text)) {
            $this->text=$text;
        }
    }

    /**
     * The __toString method allows a class to decide how it will react when it is converted to a string.
     *
     * @return string
     * @link http://php.net/manual/en/language.oop5.magic.php#language.oop5.magic.tostring
     */
    function __toString()
    {
        return "Section ID: ".$this->getSectionID()
        ."<br>Topic ID: ".$this->getTopicID()
        ."<br>Section Name: ".$this->getSectionName()
        ."<br>Order ID: ".$this->getOrderID()
        ."<br>Text ID: ".$this->getTextID()
        ."<br>Text: ".$this->getText()
        ."<br>";
    }

}