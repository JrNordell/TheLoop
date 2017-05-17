
<?php
session_start();
include("darioDBConnection.php");

//if(isset($_SESSION["note_id"])){
//    $query = "SELECT note_id " .
//        "FROM loop_storage " .
//        "WHERE note_id = :note_id";
//
//    $stmt = $conn->prepare($query);
//    $stmt->bindParam("note_id", $_POST["note_id"]);
//    $stmt->execute();
//}




$query = "INSERT INTO note_storage (user_id, title, note)" .
    "VALUES('".$_SESSION["user_id"]."','".$_POST["title"]."','".$_POST["note"]."')";
$conn->query($query);
array_push($_SESSION["titles"], $_POST["title"]);
array_push($_SESSION["notesd"], $_POST["note"]);
header("Location:home.php");
$conn->close();