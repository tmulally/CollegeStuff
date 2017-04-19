<?php
session_start();
require_once('includes/dbFunctions.inc.php');

//PASSWORD - LOGIN CODE
$flag = 0;
if (isset ($_POST['login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $loggedIn = login($user, $pass);

    if ($loggedIn == "null"){
        $flag = 1;
    }

    else{
        $_SESSION['user']=$loggedIn;
        header("Location: index.php");
    }

}

//END PASSWORD - LOGIN CODE

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/style2.css">
    <link href="favicon.ico" rel="shortcut icon">
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <title>CollegeStuff</title>
</head>
<body>
<div class="container">
    <div class="row main">
        <div class="main-login main-center">
            <h3>Sign in</h3>
            <form class="" method="post" action="#">

                <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label">Username</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="user" id="user"  placeholder="Enter your Username"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="pass" id="pass"  placeholder="Enter your Password"/>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="login" name = "login">
                </div>
                <?php
                if ($flag == 1){
                    echo("<div class='form-group'>Wrong username or password</div>");
                }
                ?>
            </form>
            <p>Or <a href = "signup.php" style="color:khaki;"> sign up... </a></p>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
