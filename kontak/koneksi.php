<?php
$host = "Localhost";
$user = "root";
$password = "";
$database = "kontak_db";

$conn = mysqli_connect($host,$user,$password,$database);


if(!$conn) {
    die("mysql not connet".mysqli_connet_error());
}

?>