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

if (isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header("Location: index.php");
}
//END PASSWORD - LOGIN CODE

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

        <div class="form-group">

        <a class="btn btn-warning btn-block" href="add_classified.php" role="button"><i class="glyphicon glyphicon-usd"></i>SELL</a>

        </div>

        <form role="form" id="form-buscar">
                <div class="form-group">
                    <div class="input-group">
                        <input id="1" class="form-control" type="text" name="search" placeholder="Search..." required/>
                        <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="glyphicon glyphicon-search" aria-hidden="true"></i></button></span>
                    </div>
                </div>
        </form>

        <div class="form-group">
            <select id="campus" class="form-control">
                <option value="0" selected="selected">Select Campus</option>
                <?php signupCollegeList(); ?>
            </select>

        </div>


        <div class="panel panel-default">
                    <div class="panel-heading">
                    <h1 class="panel-title"><span class="glyphicon glyphicon-random"></span> Categories</h1>
                    </div>
                    <div class="list-group">
                        <?php categoryName(); ?>
                        <div id="MainMenu">
                            <div class="list-group panel">
                                <a href="#demo3" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu"><b>More...</b></a>
                                <div class="collapse" id="demo3">
                                    <?php categoryNameBonus(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="panel panel-default">
                <div class="panel-heading">
                <h1 class="panel-title"><span class="glyphicon glyphicon-user"></span> Profile</h1>
                </div>

                 <div class="panel-body">
                    <img src="bootstrap-3.3.7-dist/images/th.jpg" class="avatar img-circle img-thumbnail" alt="avatar">
                     <br><br>
                     <p><b>
                         <?php
                         if(isset ($_SESSION['user'])){
                             echo ($_SESSION['user']);}
                         else{
                             echo('john doe');
                         }
                         ?>
                         </b></p>
                     <a class="btn btn-info" href="profile.html" role="button">View my Profile</a>
                </div>
        </div>


    </div>

    <div class="col-md-10">

            <div class="tab-content">

                <div class="tab-pane active" id="tab1" role="tabpanel">


                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/240x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="">Second Auction</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/240x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="">Second Auction</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/240x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="">Second Auction</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/240x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="">Second Auction</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/240x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="">Second Auction</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/240x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="">Second Auction</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/240x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="">Second Auction</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/240x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="">Second Auction</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/240x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="">Second Auction</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/240x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="">Second Auction</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/240x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="">Second Auction</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/240x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="">Second Auction</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>



                </div>

                <div class="tab-pane" id="tab2" role="tabpanel">


                </div>

                <div class="tab-pane" id="tab3" role="tabpanel">

                </div>

                <div class="tab-pane" id="tab4" role="tabpanel">

                </div>

                <div class="tab-pane" id="tab5" role="tabpanel">

                </div>
            </div>

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
    <div class="container">
        <div class="col-md-6">
            <p>© CollegeStuff 2017 - All Rights</p>
        </div>
        <div class="col-md-6">
            <ul class="bottom_ul">
                <li><a href="#">collegestuff.com</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</body>

</html>
