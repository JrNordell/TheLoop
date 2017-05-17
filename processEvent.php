<?php
session_start();
include("darioDBConnection.php");

$query = "INSERT INTO event_storage (user_id, e_title, event)" .
    "VALUES('".$_SESSION["user_id"]."','".$_POST["title"]."','".$_POST["event"]."')";
$conn->query($query);
echo "hello";
array_push($_SESSION["eTitles"], $_POST["title"]);
array_push($_SESSION["eventsd"], $_POST["event"]);
header("Location:home.php");
$conn->close();