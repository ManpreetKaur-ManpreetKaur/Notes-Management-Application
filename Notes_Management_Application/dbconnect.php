<?php
$serverName="localhost";
$userName="kau13223_database";
$password="Man37preet37@";
$db="kau13223_project";

//create connection
$conn= new mysqli($serverName , $userName, $password, $db);

//check connection
if($conn -> connect_error)
{
    die("Connection failed: ".
    $conn -> connect_error);
}



?>
