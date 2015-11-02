<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Hello World</title>
</head>
<body>
<?php

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
</body>
</html>
