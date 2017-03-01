<?php
require_once('includes/dbFunctions.inc.php');
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
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" placeholder="Username" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Log In</button>
                <a class="btn btn-primary" href="signup.html" role="button">Sign Up</a>
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

                    <div class="col-md-6">
                        <div class="container-fluid">
                            <div class="row">
                        <button type="button" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Buy</button>
                        <button type="button" class="btn btn-warning"><i class="glyphicon glyphicon-usd"></i> Sell</button>
                            </div>
                            </div>
                    </div>

                    <div class="col-md-6">
                        <div class="container-fluid">
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

                        </div>
                    </div>

</div>

<div class="container-fluid">
<hr>
</div>

<div class="container-fluid">

    <div class="col-md-2">

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
                                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                            </div><!--/row-fluid-->
                                        </div><!--/item-->

                                        <div class="item">
                                            <div class="row-fluid">
                                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                             </div><!--/row-fluid-->
                                        </div><!--/item-->

                                        <div class="item">
                                            <div class="row-fluid">
                                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
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
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label1</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label2</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label3</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label4</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label5</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label6</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label1</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label2</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab2" role="tabpanel">
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label1</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label2</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label3</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label4</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label5</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label6</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label7</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label8</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab3" role="tabpanel">
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label1</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label2</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label3</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label4</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label5</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label6</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label1</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label2</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab4" role="tabpanel">
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label1</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label2</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label3</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label4</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label5</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label6</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label1</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label2</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab5" role="tabpanel">
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label1</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label2</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label3</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label4</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label5</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label6</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label7</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <img alt="..." src="http://placehold.it/240x150">
                            <div class="caption">
                                <h3>Thumbnail label8</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                    Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-success btn-product">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></p>
                            </div>
                        </div>
                    </div>
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

<footer class="footer">
    <div class="main-footer" data-pg-collapsed>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <div class="widget w-footer widget_black_studio_tinymce">
                        <h6 class="widget-title"><span class="light">About</span> Us</h6>
                        <div class="textwidget">The CollegeStuff is a website for anyone who are students, staff and
                            others on campus of a college/university in the United States of America. It is comfortable, quick, simple
                            and secure website for selling or buying a stuff.
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="widget w-footer widget_nav_menu">
                        <h6 class="widget-title"><span class="light">Extra</span> Navigation</h6>
                        <div class="menu-footer-menu-container">
                            <ul id="menu-footer-menu" class="menu">
                                <li id="menu-item-6694" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6694">
                                    <a href="https://demos.qreativethemes.com/thelandscaper/shortcodes/">Shortcodes</a>
                                </li>
                                <li id="menu-item-6696" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6696">
                                    <a href="http://www.qreativethemes.com/docs/thelandscaper">Documentation</a>
                                </li>
                                <li id="menu-item-6692" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6692">
                                    <a href="https://demos.qreativethemes.com/thelandscaper/make-an-appointment/">Make an Appointment</a>
                                </li>
                                <li id="menu-item-6695" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6695">
                                    <a href="https://demos.qreativethemes.com/thelandscaper/case-study/">Case Study</a>
                                </li>
                                <li id="menu-item-6691" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6691">
                                    <a href="https://demos.qreativethemes.com/thelandscaper/frequently-asked-questions/">Frequently Asked Questions</a>
                                </li>
                                <li id="menu-item-6693" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6693">
                                    <a href="https://demos.qreativethemes.com/thelandscaper/prices-and-delivery/">Prices & Delivery</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="widget w-footer widget_nav_menu">
                        <h6 class="widget-title"><span class="light">Our</span> Services</h6>
                        <div class="menu-services-menu-container">
                            <ul id="menu-services-menu" class="menu">
                                <li id="menu-item-6684" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6684">
                                    <a href="https://demos.qreativethemes.com/thelandscaper/services/">See all Services</a>
                                </li>
                                <li id="menu-item-6685" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6685">
                                    <a href="https://demos.qreativethemes.com/thelandscaper/services/irrigation-and-drainage/">Irrigation & Drainage</a>
                                </li>
                                <li id="menu-item-6686" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6686">
                                    <a href="https://demos.qreativethemes.com/thelandscaper/services/lawn-and-garden-care/">Lawn & Garden Care</a>
                                </li>
                                <li id="menu-item-6687" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6687">
                                    <a href="https://demos.qreativethemes.com/thelandscaper/services/planting-and-removal/">Planting & Removal</a>
                                </li>
                                <li id="menu-item-6688" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6688">
                                    <a href="https://demos.qreativethemes.com/thelandscaper/services/snow-and-ice-removal/">Snow & Ice Removal</a>
                                </li>
                                <li id="menu-item-6689" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6689">
                                    <a href="https://demos.qreativethemes.com/thelandscaper/services/spring-and-fall-cleanup/">Spring & Fall Cleanup</a>
                                </li>
                                <li id="menu-item-6690" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6690">
                                    <a href="https://demos.qreativethemes.com/thelandscaper/services/stone-and-hardscaping/">Stone & Hardscaping</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="widget w-footer widget-opening-hours">
                        <h6 class="widget-title"><span class="light">Working</span> Hours</h6>
                        <div class="opening-times">
                            <ul>
                                <li class="weekday">Monday
                                    <span class="right">8:00am-5:00pm</span>
                                </li>
                                <li class="weekday">Tuesday
                                    <span class="right">8:00am-5:00pm</span>
                                </li>
                                <li class="weekday">Wednesday
                                    <span class="right">8:00am-5:00pm</span>
                                </li>
                                <li class="weekday">Thursday
                                    <span class="right">8:00am-5:00pm</span>
                                </li>
                                <li class="weekday">Friday
                                    <span class="right">8:00am-5:00pm</span>
                                </li>
                                <li class="weekday">Saturday
                                    <span class="right">8:00am-5:00pm</span>
                                </li>
                                <li class="weekday today">Sunday
                                    <span class="right label">CLOSED</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer" data-pg-collapsed>
        <div class="container-fluid">
            <p>© 2017 <a href="" target="_blank">CollegeStuff. All Rights Reserved</a></p>
        </div>
    </div>

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</body>

</html>
