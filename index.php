<?php
session_start();

require_once('includes/dbFunctions.inc.php');
echo $_POST['pass'];

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
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Profile Name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <input type="text" placeholder="Username" class="form-control" name = "user">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control" name = "pass">
                </div>
                <input type="submit" class="btn btn-success" value="login" name = "login">
            </form>
        </div>
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

        <button type="button" class="btn btn-success btn-block"><i class="glyphicon glyphicon-shopping-cart"></i> BUY</button>
        <button type="button" class="btn btn-warning btn-block"><i class="glyphicon glyphicon-usd"></i> SELL</button>

        </div>

        <div class="form-group">
            <select id="campus" class="form-control">
                <option value="0" selected="selected">Select Campus</option>
                <option value="1">Gallaudet University</option>
                <option value="32">American University</option>
                <option value="4">Howard University</option>
                <option value="5">Georgetown University</option>
            </select>

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
                     <p><b>Jennifer Lopez</b></p>
                     <a class="btn btn-info" href="profile.html" role="button">View my Profile</a>
                </div>
                </div>

        <div class="panel panel-default">
                    <div class="panel-heading">
                    <h3 class="panel-title">
                    <span class="glyphicon glyphicon-eye-open"></span>
                    Recently View
                    </h3>
                    </div>
                    <div class="panel-body">


                            <div id="myCarousel" class="carousel slide">


                                    <!-- Carousel items -->
                                    <div class="carousel-inner">

                                        <div class="item active">
                                            <div class="row-fluid">
                                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/240x150" alt="Image" style="max-width:100%;" /></a></div>
                                            </div><!--/row-fluid-->
                                        </div><!--/item-->

                                        <div class="item">
                                            <div class="row-fluid">
                                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/240x150" alt="Image" style="max-width:100%;" /></a></div>
                                             </div><!--/row-fluid-->
                                        </div><!--/item-->

                                        <div class="item">
                                            <div class="row-fluid">
                                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/240x150" alt="Image" style="max-width:100%;" /></a></div>
                                            </div><!--/row-fluid-->
                                        </div><!--/item-->
                                    </div><!--/carousel-inner-->

                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                            </div><!--/myCarousel-->

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

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 footerleft ">
                <div class="logofooter"> Logo</div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                <p><i class="fa fa-map-pin"></i> 800, Florida Ave NE, Washington, DC 20002, USA</p>
                <p><i class="fa fa-phone"></i> Phone (USA) : +1 9999 878 398</p>
                <p><i class="fa fa-envelope"></i> E-mail : collegestuff@gmail.com</p>

            </div>
            <div class="col-md-2 col-sm-6 paddingtop-bottom">
                <h6 class="heading7">GENERAL LINKS</h6>
                <ul class="footer-ul">
                    <li><a href="#"> Career</a></li>
                    <li><a href="#"> Privacy Policy</a></li>
                    <li><a href="#"> Terms & Conditions</a></li>
                    <li><a href="#"> Client Gateway</a></li>
                    <li><a href="#"> Ranking</a></li>
                    <li><a href="#"> Case Studies</a></li>
                    <li><a href="#"> Frequently Ask Questions</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 paddingtop-bottom">
                <h6 class="heading7">LATEST POST</h6>
                <div class="post">
                    <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                    <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                    <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 paddingtop-bottom">
                <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

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
                <li><a href="#">Site Map</a></li>
            </ul>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</body>

</html>


<?php

if (isset ($_POST['login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    echo ("<font color=white size='4pt'>" . $user . "<br>");
    echo ("<font color=white size='4pt'>" . $pass . "<br>");
    $loggedIn = login($user, $pass);
    echo ("<font color=blue size='4pt'>" . $loggedIn);
    $_SESSION['user']=$loggedIn;
}
?>
