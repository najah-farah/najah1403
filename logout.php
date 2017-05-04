<?php

session_start();
$_SESSION["gatekeeper"] = "";
$_SESSION["gatekeeperPerson"] ="";
header('Location: HomePage.html');
  
?>