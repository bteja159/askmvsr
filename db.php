<?php
$servername = "sql111.epizy.com";
$database="epiz_19880104_industries";
$username = "epiz_19880104";
$password = "500074";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//mysqli_close($conn);
?>