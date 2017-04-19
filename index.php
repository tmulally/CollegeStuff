<?php
session_start();
require_once('includes/dbFunctions.inc.php');
require_once('includes/dbListings.inc.php');

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

if (isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header("Location: index.php");
}
//END PASSWORD - LOGIN CODE

//BEGIN SEARCH CODE
if (!isset($_SESSION['search'])){
    setSessionDefault();
}


if(isset($_POST['search'])){
    setSessionDefault();

    if(!empty($_POST['string'])){
        $_SESSION['search'] = "%" . $_POST['string'] . "%";
    }

    if(!empty($_POST['campus'])){
        $_SESSION['location'] = $_POST['campus'];
    }

    if(!empty($_POST['category'])){
        $_SESSION['category'] = $_POST['category'];
    }

}
//END SEARCH CODE

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

</head>

<body>

<div class="container-fluid">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <?php
        if(isset($_SESSION['user'])){
        include 'includes/loggedInHeader.inc.php';
        }
        else{
        include 'includes/loggedOutHeader.inc.php';
        }
        ?>

    </div>
</nav>
</div>

<div class="jumbotron text-center">
    <h1 class="minititle">askmiotnlhj</h1>
    <h1 class="bigt" >CollegeStuff</h1>
</div>


<div class="container-fluid">

    <div class="col-md-2">
        <div class="panel panel-default">
            <a class="btn btn-warning btn-block" href="add_classified.php" role="button"><i class="glyphicon glyphicon-usd"></i>SELL</a>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title"><i class="glyphicon glyphicon-search" aria-hidden="true"></i> Search </h1>
            </div>

            <div class="panel-body">
                <form role = "form" id="form-buscar" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <div class="input-group">
                        <input id="1" class="form-control" type="text" name="string" placeholder="Search..." />
                        </div>
                    </div>

                    <div class="form-group">
                        <select name="campus" class="form-control">
                            <option value="0" selected="selected">Select Campus</option>
                            <option value="0">All</option>
                            <?php signupCollegeList(); ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="category" class="form-control">
                            <option value="0" selected="selected">Select Category</option>
                            <option value="0">All</option>
                            <?php signupCategoryList(); ?>
                        </select>

                    </div>

                    <div class="form-group ">
                        <span class="input-group-btn">
                            <input type="submit" class="btn btn-success btn-block" name="search" value="Search!"style="border-radius: 5px;"/>
                        </span>
                    </div>
                </form>
            </div>
        </div>

        <?php
        if(isset ($_SESSION['user'])){include 'includes/profileThumb.php';}
        ?>


    </div>

    <div class="col-md-10">

            <div class="tab-content">

                <div class="tab-pane active" id="tab1" role="tabpanel">

                    <!--WINDOW STUFF BUY-->

                    <?php displayListingBig($_SESSION['search'], $_SESSION['location'], $_SESSION['category']); ?>


                    <!--STUFF THUMBNAIL-->
                    <?php displayListingThumb($_SESSION['search'], $_SESSION['location'], $_SESSION['category']); ?>

                </div>

                <!--NEED DATABASE PAGINATION-->
                <div class="tab-pane" id="tab2" role="tabpanel">


                </div>

                <div class="tab-pane" id="tab3" role="tabpanel">

                </div>

                <div class="tab-pane" id="tab4" role="tabpanel">

                </div>

                <div class="tab-pane" id="tab5" role="tabpanel">

                </div>

            </div>

            <!--NEED DATABASE NEW PAGINATION-->
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="pagination" role="tablist">
                        <li class="previous" onclick="goTo(1);"><a href="#"><span aria-hidden="true">←</span> Previous</a></li>
                        <li class="active" id="first">
                            <a aria-controls="tab1" data-toggle="tab" href="#tab1" role="tab">1</a>
                        </li>
                        <li>
                            <a aria-controls="tab2" data-toggle="tab" href="#tab2" role="tab">2</a>
                        </li>
                        <li>
                            <a aria-controls="tab3" data-toggle="tab" href="#tab3" role="tab">3</a>
                        </li>
                        <li>
                            <a aria-controls="tab4" data-toggle="tab" href="#tab4" role="tab">4</a>
                        </li>
                        <li id="last">
                            <a aria-controls="tab5" data-toggle="tab" href="#tab5" role="tab">5</a>
                        </li>
                        <li class="next" onclick="goTo(2);"><a href="#">Next <span aria-hidden="true">→</span></a></li>
                    </ul>
                </div>
            </div>

    </div>

</div>


<div class="copyright">
    <div class="container-fluid">
        <div class="col-md-8">
            <br>
            <p>© CollegeStuff 2017 - Website Designed & Developed By ITS 492 Students - Gallaudet University</p>
            <br>
        </div>
        <div class="col-md-4">
            <br>
            <ul class="bottom_ul">
                <li><a href="#">collegestuff.com</a></li>
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
