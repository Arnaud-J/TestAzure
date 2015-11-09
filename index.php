<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting('-1');

require_once "commonFunctions.php";
require_once "Section.php";
require_once "Topic.php";
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

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            Topics
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
