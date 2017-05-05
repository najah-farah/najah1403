<?php
/**
 * Created by PhpStorm.
 * User: najah
 * Date: 04-05-2017
 * Time: 17:26
 */
$con=mysqli_connect("127.0.0.1:55994","root","","ethics_system");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
session_start();
$result = mysqli_query ($con,"select * from admin");
$resultstudent = mysqli_query ($con,"select * from student");
$resultlecturer = mysqli_query ($con,"select * from teacher");
$resulteao = mysqli_query ($con,"select * from eao");
$resultethicsform = mysqli_query ($con,"select * from ethicsform");
$resultexperiment = mysqli_query ($con,"select * from experiment");




if ($result == "")
{
    echo "no details found";
}
else {
    echo " <br/>";
 while ($row = mysqli_fetch_array($result)) {
     echo " <br/>";
     echo "admin_info";
     echo json_encode($row);
 }
}

if ($resultstudent == "")
{
    echo "no details found";
}
else {
    echo " <br/>";
    while ($row = mysqli_fetch_array($resultstudent)) {
        echo " <br/>";
        echo "student_info";
        echo json_encode($row);
    }
}
if ($resultlecturer == "")
{
    echo "no details found";
}
else {
    echo " <br/>";
    while ($row = mysqli_fetch_array($resultlecturer)) {
        echo " <br/>";
        echo "teacher_info";
        echo json_encode($row);
    }
}

if ($resulteao == "")
{
    echo "no details found";
}
else {
    echo " <br/>";
    while ($row = mysqli_fetch_array($resulteao)) {
        echo " <br/>";
        echo "eao_info";
        echo json_encode($row);
    }
}

if ($resultethicsform == "")
{
    echo "no details found";
}
else {
    echo " <br/>";
    while ($row = mysqli_fetch_array($resultethicsform)) {
        echo " <br/>";
        echo "ethicsform_info";
        echo json_encode($row);
    }
}

if ($resultexperiment == "")
{
    echo "no details found";
}
else {
    echo " <br/>";
    while ($row = mysqli_fetch_array($resultexperiment)) {
        echo " <br/>";
        echo "experiment_info";
        echo json_encode($row);
    }
}


?>

