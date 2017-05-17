<?php
session_start();
include("darioDBConnection.php");

$query = "SELECT note_id " .
    "FROM loop_storage " .
    "WHERE note_id = :note_id";

$stmt = $conn->prepare($query);
$stmt->bindParam("note_id", $_POST["note_id"]);
$stmt->execute();
if($stmt->rowCount() > 0){
    foreach ($stmt as $row){
        $_SESSION["note_id"] = $row["note_id"];
        header("Location:createAccount.php?error=Exists");
    }
}