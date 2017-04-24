<?php
session_start();

require_once("includes/dbFunctions.inc.php");

if(!isset($_SESSION['user'])){ //if login in session is not set
    header("Location: login_redirect.php");
}

if(isset($_POST['deleteItem'])){
    deleteListing($_POST['deleteItem']);
    header("Location: profile.php");
}

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CollegeStuff</title>
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-3.3.7-dist/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="bootstrap-3.3.7-dist/js/ie-emulation-modes-warning.js"></script>
    <script src="bootstrap-3.3.7-dist/js/thumbnail.js"></script>
    <script src="bootstrap-3.3.7-dist/js/jquery-1.11.3.min.js"></script>
    <link href="bootstrap-3.3.7-dist/css/style.css" rel="stylesheet">
    <link href="favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">

</head>

<body>

<div class="container-fluid">

    <div class="container-fluid">
        <div class="row">

            <div style="padding-top:50px;"> </div>
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="media">
                            <div class="media-body">
                                <h3><strong>My Information</strong></h3>
                                <?php userInfo($_SESSION['user']); ?>
                                <hr>
                                <a href = index.php><input type="btn" class="btn btn-primary btn-block" value="Go Back"style="border-radius: 5px;"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <span>
                        <h1 class="panel-title pull-left" style="font-size:30px;">My Listings </h1>
                        </span>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="container-fluid" style="padding-top: 10px;">
                            <div class="row">
                                <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <table class = "table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Listing</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php profileListing($_SESSION['user']); ?>
                                            </tbody>
                                        </table>
                                    </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="copyright">
    <div class="container-fluid">
        <div class="col-md-8">
            <br>
            <p>© CollegeStuff 2017 - Web Designed & Developed By ITS 492 Students - Gallaudet University</p>
            <br>
        </div>
        <div class="col-md-4">
            <br>
            <ul class="bottom_ul">
                <li><a href="index.php">collegestuff.com</a></li>
                <li><a href="contact_us.html">Contact us</a></li>
            </ul>
            <br>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</body>

</html>
