<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting('-1');

require_once "commonFunctions.php";
require_once "Section.php";
require_once "BD.php";
require_once "DataAccess.php";

$sectionID = isset($_GET['sectionID']) ? $_GET['sectionID'] : "1";
$section = DataAccess::getSection($sectionID);
$topics = DataAccess::getTopics();

htmlHead("Index","","");

foreach($topics as $topic) {
    echo $topic;
}

echo $section;


htmlFoot();
?>