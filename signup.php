<?php
require_once('includes/dbFunctions.inc.php');
if($_POST){
    if(!empty($_POST['Fname']) && !empty($_POST['Lname']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['username']) && !empty($_POST['college']) && !empty($_POST['password'])){
        newUser($_POST['Fname'], $_POST['Lname'], $_POST['email'], $_POST['phone'], $_POST['username'], $_POST['college'], $_POST['password']);
        header("Location: signup_confirmation.html");
    }
    else{
        echo("Please fill out all fields.");
    }
}
?>

<html>
<head>
    <title> Signup! </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/style2.css">
    <link href="favicon.ico" rel="shortcut icon">
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>


    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/validate_password.js"></script>

    <script src="bootstrap-3.3.7-dist/js/jquery-1.9.0.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="bootstrap-3.3.7-dist/js/jquery.maskedinput.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            $.mask.definitions['~'] = "[+-]";
            $("#date").mask("99/99/9999",{placeholder:"mm/dd/yyyy",completed:function(){alert("completed!");}});
            $(".phone1").mask("(999) 999-9999");
            $("#phoneExt").mask("(999) 999-9999? x99999");
            $("#iphone").mask("+33 999 999 999");
            $("#tin").mask("99-9999999");
            $("#ssn").mask("999-99-9999");
            $("#product").mask("a*-999-a999", { placeholder: " " });
            $("#eyescript").mask("~9.99 ~9.99 999");
            $("#po").mask("PO: aaa-999-***");
            $("#pct").mask("99%");
            $("#phoneAutoclearFalse").mask("(999) 999-9999", { autoclear: false, completed:function(){alert("completed autoclear!");} });
            $("#phoneExtAutoclearFalse").mask("(999) 999-9999? x99999", { autoclear: false });
            $("input").blur(function() {
                $("#info").html("Unmasked value: " + $(this).mask());
            }).dblclick(function() {
                $(this).unmask();
            });
        });
    </script>
</head>
<body>
<table>
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
                                <input type="text" class="form-control phone1" name="phone" placeholder="(999) 9999-9999"/>
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
                    <input type="password" class="form-control" name="pass2" id="pass2" on placeholder="Confirm your Password" onkeyup="checkPass(); return false;">
                    <span id="confirmMessage" class="confirmMessage"></span>
                    </div>
                    </div>
                    </div>

                    <div class="form-group ">
                        <input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Submit">
                    </div>

                </form>
                <input type="button" class="btn btn-danger btn-lg btn-block login-button" onclick="location.href='index.php';" value="Cancel">
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
