<?php
					//include("db_conf.php");
//$con=mysqli_connect("127.0.0.1","root","","ethics_system","52967");
$con=mysqli_connect("127.0.0.1:55994","admin123","123","ethics_system");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>