<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting('-1');

require_once "commonFunctions.php";

htmlHead("Index","","");

echo $_COOKIE['username'] ? ('<h1>Welcome '.$_COOKIE['username'].'</h1>') : '';

function displayAccessLevelInformation($access_level) {
    if ($access_level == "standarduser") {
        echo "<p>You are currently logged in as a standard user</p>";
    }
    elseif ($access_level== "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}

if($_COOKIE['access_level']) {
    displayAccessLevelInformation($_COOKIE['access_level']);
}

?>

<p>
    <a href="./helloSelector.php">Hello Selector</a>
</p>
<p>
    <a href="./formSuperhero.php">Register as a Superhero</a>
</p>
<p>
    <a href="./login.php">Login</a>
</p>

<?php
    htmlFoot();
?>