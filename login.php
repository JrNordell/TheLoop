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
    <title>Login</title>
</head>
<body>
<nav>
    <div class="nav-wrapper blue-grey darken-2">
        <a href="#" class="brand-logo center">The Loop</a>
    </div>
</nav>


<div class="row">
    <div class="col m4 offset-m4">
        <div class="card">
            <div class="row">
                <div class="card-title center" style="padding-top: 10px">
                    <h5>Login with your Loop account</h5>

                </div>
                <div class="card-content center-align">
                    <?php
                    if (isset($_REQUEST['error'])) {
                        if ($_REQUEST['error'] == 'Invalid') {
                            echo "<h6> Invalid username and/or password </h6>";
                        } else if ($_REQUEST['error'] == 'Login') {
                            echo "<h6> Login Required </h6>";
                        }
                    }
                    ?>
                </div>
                    <div class="card-action">
                        <form name="login" method="post" action="processLogin.php" onsubmit="return validate();">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">perm_identity</i>
                            <input name="username" id="username" type="text" class="validate">
                            <label for="username">Username</label>
                        </div>
                        <div class="input-field col s4 offset-s2">
                            <i class="material-icons prefix">https</i>
                            <input name="password" id="password" type="password" class="validate">
                            <label for="password">Password</label>
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
<div class="row">
    <div class="col s4 offset-s4">
        <a href="createAccount.php" class="left" style="color:black; font-size: 13px;">Don't have a Loop account? Create one</a>
    </div>
</div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>