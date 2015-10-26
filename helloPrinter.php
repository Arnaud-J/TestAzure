<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Hello Selector</title>
</head>
<body>
<?php
    $planet = $_GET["planet"] ? $_GET["planet"] : "World";
    echo "Hello " . $planet . " !";
?>
</body>
</html>
