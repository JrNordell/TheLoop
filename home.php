<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location:login.php?error=Login");
}
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/override.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
<nav>
    <div class="nav-wrapper blue-grey darken-2">
        <a href="#" class="brand-logo center">The Loop</a>
        <ul>
            <li class="right" style="padding-right: 10px">
                <a class="dropdown-button" data-beloworigin="true" href="#" data-activates="dropdown1"><i
                            class="material-icons">perm_identity</i></a>
                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content'>
                    <li>
                        <a href="home.php">
                            <?php
                            echo $_SESSION["username"];
                            ?>
                        </a>
                    <li><a href="logout.php">Logout</a></li>
                    </li>
                </ul>
    </div>
</nav>


<div class="row">
    <div class="col s4 offset-s1">
        <div class="card">
            <div class="card-content">
                <a class="btn-floating waves-effect waves-light orange darken-4 right" href="createNote.php"><i
                            class="material-icons">add</i></a>
                <span class="card-title">Notes</span>
            </div>
            <div class="card-content">
                <hr>

                <?php $i = 0;
                foreach ($_SESSION["titles"] as $title): ?>
                    <ul class='collection'>
                        <span class='title' style="padding-left: 10px">
                            <?php
                            echo $title;
                            ?>
                        </span>
                        <p style="padding-left: 10px">
                            <?php
                            echo $_SESSION["notesd"][$i];
                            $i++;
                            ?>
                        </p>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="col s4 offset-s2">
        <div class="card">
            <div class="card-content">
                <a class="btn-floating waves-effect waves-light orange darken-4 right" href="createEvent.php"><i
                            class="material-icons">add</i></a>
                <span class="card-title">Events</span>
            </div>
            <div class="card-content">
                <hr>
                <?php $i = 0;
                foreach ($_SESSION["eTitles"] as $eTitle): ?>
                    <ul class='collection'>
                        <span class='title' style="padding-left: 10px">
                            <?php
                            echo $eTitle;
                            ?>
                        </span>
                        <p style="padding-left: 10px">
                            <?php
                            echo $_SESSION["eventsd"][$i];
                            $i++;
                            ?>
                        </p>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>