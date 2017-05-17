
<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location:login.php?error=Login");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/override.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="js/custom.js"></script>
    <script src="js/materialize.js"></script>
    <meta charset="UTF-8">
    <title>Create</title>
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
                    </li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
    </div>
</nav>

<div class="row" style="padding-top: 5%">
    <div class="col s6 offset-s3">
        <form name="create" method="post" action="processNote.php">
        <div class="card">
            <div class="row">
                <div class="card-title center" style="padding-top: .3em">
                    <div class="row">
                        <h5>Create a Note</h5>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="title" id="input_text" type="text" maxlength="10" data-length="10">
                            <label for="input_text">Title</label>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <div class="input-field col s12" style="padding-bottom: 1em;">
                        <textarea name="note" id="textarea1" class="materialize-textarea" maxlength="120" data-length="120"
                                  style="padding-bottom: 10px;"></textarea>
                        <label for="textarea1">Note</label>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn waves-effect right" name="action" type="submit">
            Done
            <i class="material-icons right">send</i>
        </button>
        </form>
    </div>
</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>