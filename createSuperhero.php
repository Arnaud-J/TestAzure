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
$powers = $_POST["powers"] ? $_POST["powers"] : null;


echo "<h1>" . $forename . " " . $surname . "</h1>
        <p>"
            . $dob . "<br/>"
            . $gender . "<br/>"
            . "Superpowers: "
            . $powers
        . "</p>" ;
?>
</body>
</html>
