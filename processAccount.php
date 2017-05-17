
<?php
session_start();

$_SESSION["user_id"];
$_SESSION["username"];
$_SESSION["email"];$note_array = array();
$noted_array = array();
$event_array = array();
$eventd_array = array();
$title_array = array();
$eTitle_array = array();
$_SESSION["notesd"] = array();
$_SESSION["notes"] = array();
$_SESSION["events"] = array();
$_SESSION["eventsd"] = array();
$_SESSION["titles"] = array();
$_SESSION["eTitles"] = array();

include("darioDBConnection.php");
$query = "SELECT user_id, email, username " .
    "FROM loop_account " .
    "WHERE username = :username";

$stmt = $conn->prepare($query);
$stmt->bindParam(":username", $_POST["username"]);
$stmt->execute();
if($stmt->rowCount() > 0){
    foreach ($stmt as $row){
        unset($_SESSION["username"]);
        header("Location:createAccount.php?error=Exists");
    }
}else {
    $query = "INSERT INTO loop_account (username, password, name_first, name_last, email) " .
        "VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["first"]."','".$_POST["last"]."','".$_POST["email"]."')";
    $conn->query($query);

    $query = "SELECT user_id " .
        "FROM loop_account " .
        "WHERE username = '".$_POST["username"]."'";
    foreach ($stmt as $row) {
        $_SESSION["user_id"] = $row["user_id"];
    }

    $_SESSION["username"] = $_POST["username"];
    $_SESSION["email"] = $_POST["email"];

    $query = "SELECT note_id, title, note " .
        "FROM note_storage " .
        "WHERE user_id = :user_id";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(":user_id", $_SESSION["user_id"]);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        $inc = 0;
        foreach ($stmt as $row){
            $note_array[$inc] = $row["note_id"];
            $noted_array[$inc] = $row["note"];
            $title_array[$inc] = $row["title"];
            $inc = $inc + 1;
        }
        $_SESSION["notes"] = $note_array;
        $_SESSION["notesd"] = $noted_array;
        $_SESSION["titles"] = $title_array;

    }

    $query = "SELECT event_id, e_title, event " .
        "FROM event_storage " .
        "WHERE user_id = :user_id";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(":user_id", $_SESSION["user_id"]);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        $inc = 0;
        foreach ($stmt as $row){
            $event_array[$inc] = $row["event_id"];
            $eventd_array[$inc] = $row["event"];
            $eTitle_array[$inc] = $row["e_title"];
            $inc = $inc + 1;
        }
        $_SESSION["events"] = $event_array;
        $_SESSION["eventsd"] = $eventd_array;
        $_SESSION["eTitles"] = $eTitle_array;
    }

    header("Location:home.php");
}
$conn->close();