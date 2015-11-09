<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting('-1');

require_once "commonFunctions.php";
require_once "BD.php";
require_once "DataAccess.php";

$sectionID = isset($_GET['sectionID']) ? $_GET['sectionID'] : "1";
$titles = DataAccess::getTitle($sectionID);

htmlHead("Index","","");

foreach($titles as $title) {
    echo $title;
}

htmlFoot();
?>