<?php
session_start();
if(!isset($_SESSION['user'])){ //if login in session is not set
    header("Location: login_redirect.php");
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

    <title>CollegeStuff</title>
</head>
<body>
<div class="container">
    <div class="row main">
        <div class="main-center2">
            <h2>Sell Your Stuff!</h2>
            <form class="" method="post" action="#">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Classified details</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select id="category" class="form-control">
                                <option value="0" selected="selected">Select Category</option>
                                <option value="1">Textbooks/Books</option>
                                <option value="32">Electronics</option>
                                <option value="4">Furniture</option>
                                <option value="5">Music</option>
                                <option value="25">Games</option>
                                <option value="30">Collectibles & Art</option>
                                <option value="27">Sporting Goods</option>
                            </select>
                        </div>

                        <!--Heading-->
                        <div class="form-group">
                            <label for="heading">Title</label>
                            <input type="text" class="form-control" id="heading" placeholder="eg. Apple iPad mini 32GB Wi-Fi + Cellular 1 Year Warranty">
                        </div>

                        <!--Description-->
                        <div class="form-group">
                            <label for="text">Description</label>
                            <textarea id="text" class="form-control" rows="8"></textarea>
                        </div>

                        <!--Condition-->
                        <div class="form-group">
                            <label for="condition">Condition</label>
                            <select id="condition" class="form-control">
                                <option value="0" selected="selected">Select Condition</option>
                                <option value="1">New</option>
                                <option value="32">Refurbished</option>
                                <option value="4">Used - Like New</option>
                                <option value="5">Used - Very Good</option>
                                <option value="25">Used - Good</option>
                                <option value="30">Used - Acceptable</option>
                            </select>
                        </div>

                        <!--Campus-->
                        <div class="form-group">
                            <label for="campus">Campus</label>
                            <select id="campus" class="form-control">
                                <option value="0" selected="selected">Select Campus</option>
                                <option value="1">Gallaudet University</option>
                                <option value="32">American University</option>
                                <option value="4">Howard University</option>
                                <option value="5">Georgetown University</option>
                            </select>
                        </div>

                        <!--Price-->
                        <div class="form-group">
                            <label>Price</label>
                            <div class="form-inline">
                                <div class="form-group">
                                    <div class="input-group" style="width: 150px;">
                                        <input type="text" class="form-control" id="price" placeholder="0.00">
                                        <span class="input-group-addon">$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Classified images</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Select images</label>
                            <input type="file" id="image1">
                            <input type="file" id="image2">
                            <input type="file" id="image3">
                        </div>
                        <div class="form-group">
                            <label for="video">Video (YouTube embed code)</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="video">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-link"></span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <a href="" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Sell!</a>
                </div>
            </form>
        </div>
    </div>
    <div class="footer">
        <div class="footer-content">
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>