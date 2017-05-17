<?php
    $server = "dario.cs.uwec.edu";
    $username = "NORDELJR2317";
    $password = "KGXWTBY3";

    try{
        $conn = new PDO("mysql:host=".$server.";dbname=".$username, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }