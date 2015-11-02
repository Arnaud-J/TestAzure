<?php

$user = $_POST['username'] ? $_POST['username'] : "";
$pwd = $_POST['password'] ? $_POST['password'] : "";
$defaultUser = "Arnaud";
$defaultpwd = "mypwd";

if($defaultUser == $user && $defaultpwd == $pwd) {
    echo "Welcome!<br>";
    setcookie("username", $user);
    setcookie("access_level","standarduser");
    echo "<a href='./index.php'>Return to homepage</a>";
} else {
    echo "Login failed<br><a href='./login.php'>Try again</a>";
}