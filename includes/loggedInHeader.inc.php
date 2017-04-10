<div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo ($_SESSION['user']); ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                <a class="btn btn-warning" href="add_classified.php" role="button"><i class="glyphicon glyphicon-usd"></i>SELL</a>
                <input type="submit" class="btn btn-success" value="logout" name = "logout">

            </form>

        </div>

