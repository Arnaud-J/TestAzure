<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Hello Selector</title>
</head>
<body>
<?php
$default = "DEFAULT";
$forename = $_POST["forename"] ? $_POST["forename"] : $default;
$surname = $_POST["surname"] ? $_POST["surname"] : $default;
$dob = $_POST["dob"] ? $_POST["dob"] : $default;
$gender = $_POST["gender"] ? $_POST["gender"] : $default;
$fly = $_POST["fly"] ? $_POST["fly"] : $default;
$lasers = $_POST["lasers"] ? $_POST["lasers"] : $default;
$superstrength = $_POST["superstrength"] ? $_POST["superstrength"] : $default;

echo "<h1>" . $forename . " " . $surname . "</h1>
        <p>"
            . $dob . "<br/>"
            . $gender . "<br/>"
            . "Superpowers:<br/>"
            . $fly ? "Fly ; " : ""
            . $lasers ? "Lasers ; " : ""
            . $superstrength ? "Super-strength ; " : ""
        . "</p>"
?>
</body>
</html>
