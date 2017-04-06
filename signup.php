<?php

require_once('includes/dbFunctions.inc.php');

$Fname = "ZZZ";
$Lname = "ZZZ";
$email = "ZZZ";
$phone = "0000000000";
$username = "ZZZ";
$college = "0";
$password = "ZZZ";

try{
    if (isset($_POST['Fname'])){
        $Fname = $_POST['Fname'];
    }
    if (isset($_POST['Lname'])){
        $Lname = $_POST['Lname'];
    }
    if (isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if (isset($_POST['phone'])){
        $phone = $_POST['phone'];
    }
    if (isset($_POST['username'])){
        $username = $_POST['username'];
    }
    if (isset($_POST['college'])){
        $college = $_POST['college'];
        if ($college != 0){
        }
    }
    if (isset($_POST['password'])){
        $password = $_POST['password'];
    }
}
catch(Exception $e){}

if (isset($_POST['password'])){
    newUser($Fname, $Lname, $email, $phone, $username, $college, $password);
    header("Location: index.php");
}


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


    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/validate_password.js"></script>



    <title>CollegeStuff</title>
</head>
<body>
<div class="container">
    <div class="row main">
        <div class="main-login main-center">
            <h3>Sign up</h3>
            <form class="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                <div class="form-group">
                    <label for="Fname" class="cols-sm-2 control-label">Your First Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="Fname" id="Fname"  placeholder="Enter your First Name"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Lname" class="cols-sm-2 control-label">Your Last Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="Lname" id="Lname"  placeholder="Enter your Last Name"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Your Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="phone" class="cols-sm-2 control-label">Your Phone Number</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="phone" id="phone"  placeholder="Enter your phone"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label">Username</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="college" class="cols-sm-2 control-label">College/University</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                              <select class="form-control" name="college">
                                  <option value = "0">Select a College</option>
                                  <?php signupCollegeList(); ?>
                              </select>
                        </div>
                    </div>
                </div>














                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="pass2" id="pass2" on placeholder="Confirm your Password"/>








                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Submit">
                </div>

            </form>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
