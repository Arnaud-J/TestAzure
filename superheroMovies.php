<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Superhero Movies</title>
</head>
<body>
<?php

$year = $_GET["year"] ? $_GET["year"] : "";
$whereYear = !empty($year) ? "year = "

// connect to your server and select database
$db = new mysqli(
"eu-cdbr-azure-west-c.cloudapp.net",
"b1c87bb73c0095",
"f3ba36d7",
"testazure_1508770"
);

// test if connection was established, and print any errors
if($db->connect_errno){
    die("Connectfailed['.$db->connect_error.']");
}

// create a SQL query as a string
$sql_query = "SELECT * FROM marvelmovies " . !empty($year) ? ("WHERE yearReleased = " . $year) : "";

// execute the SQL query
$result = $db->query($sql_query);

// iterate over $result object one $row at a time
// use fetch_array() to return an associative array

while($row = $result->fetch_array()){
   // print out fields from row of data
   echo $row['marvelMovieID'] . " - "
       . $row['yearReleased'] . " - "
       . $row['title'] . " - "
       . $row['productionStudio'] . " - "
       . $row['notes'] . "<br>";
}

$result->close();
   // close connection to database
   $db->close();
?>
</body>
</html>
