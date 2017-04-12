<?php
session_start();

require_once('includes/dbFunctions.inc.php');

if(!isset($_SESSION['user'])){ //if login in session is not set
    header("Location: login_redirect.php");
}
if($_POST){
    if(!empty($_POST['title']) && !empty($_POST['desc']) && !empty($_POST['price']) && !empty($_POST['campus']) && !empty($_POST['category'])){
        echo ($_POST['title']);
        if(isset($_FILES['uploadedfile'])){
            if($_FILES['uploadedfile']['size']!=0){
                $uploaded = uploadImage($_FILES['uploadedfile']);
                if($uploaded != "type" && $uploaded != "error"){
                    echo("success");
                    $price = round($_POST['price']);
                    newListing($_POST['title'], $_POST['desc'], $price, $uploaded, $_SESSION['user'], $_POST['campus'], $_POST['category']);
                    header('Location: sell_confirmation.html');
                }

                else{
                    echo("Incorrect image file type.");
                }

            }

            else{
                echo("Please upload an image.");
            }

        }
    }

    else{
        echo("Please fill out all fields.");
    }
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

            <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Classified details</h3>
                    </div>
                    <div class="panel-body">

                        <!--Heading-->
                        <div class="form-group">
                            <label for="heading">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="eg. Apple iPad mini 32GB Wi-Fi + Cellular 1 Year Warranty">
                        </div>

                        <!--Description-->
                        <div class="form-group">
                            <label for="text">Description</label>
                            <textarea name="desc" class="form-control" rows="8"></textarea>
                        </div>

                        <!--Price-->
                        <div class="form-group">
                            <label>Price</label>
                            <div class="form-inline">
                                <div class="form-group">
                                    <div class="input-group" style="width: 150px;">
                                        <input type="text" class="form-control" name="price" placeholder="$0">
                                        <span class="input-group-addon">$</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Campus-->
                        <div class="form-group">
                            <label for="campus">Campus</label>
                            <select name="campus" class="form-control">
                                <option value="0" selected="selected">Select Campus</option>
                                <?php signupCollegeList(); ?>
                            </select>
                        </div>

                        <!--category-->
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category" class="form-control">
                                <option value="0" selected="selected">Select Category</option>
                                <?php signupCategoryList(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Select image</label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="5100000" />
                            <input name="uploadedfile" type="file" size="49" /><br />
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Sell!"/>
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
