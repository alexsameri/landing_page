<?php
$host = "localhost";
$port = 3307;
$username = "root";
$password = "";
$dbname = "landing_page";

$mysqli = new mysqli($host,$username,$password,$dbname,$port);

if($mysqli->connect_error){
    die("Connection failed: ".$mysqli->connect_error);
}
// else{
//     echo "Connected successfully";
// }