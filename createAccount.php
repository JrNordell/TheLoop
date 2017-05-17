
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
    </div>
</nav>

<div class="row" style="padding-top: 5%">
    <div class="col s4 offset-s4">
        <div class="card">
            <div class="row">
                <div class="card-title center" style="padding-top: .3em">
                    <h5>Create a Loop account</h5>
                </div>
                <div class="card-content center-align">
                    <?php
                    if (isset($_REQUEST['error'])) {
                        if ($_REQUEST['error'] == 'Exists') {
                            echo "<h6> Username already exists! Try again </h6>";
                        }
                    }
                    ?>
                </div>
                <div class="card-action">
                    <form name="create" method="post" action="processAccount.php" onsubmit="return validateCreate()">
                        <div class="input-field row">
                            <input name="username"  type="text" class="validate">
                            <label for="username">Username</label>
                        </div>
                        <div class="input-field row">
                            <input name="password"  type="password">
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field row">
                            <input name="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field row">
                            <input name="first" type="text">
                            <label for="first">First Name</label>
                        </div>
                        <div class="input-field row">
                            <input name="last" id="last" type="text">
                            <label for="last">Last Name</label>
                        </div>
                        <form>
                            <button class="btn-flat waves-effect right" name="action" type="submit">
                                Submit
                                <i class="material-icons right">play_arrow</i>
                            </button>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
