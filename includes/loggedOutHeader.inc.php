<div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        <?php

            if ($flag == 1){
                echo ("<a class='navbar-brand' href='#'>Wrong Username or Password</a>");
            }

        ?>
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
                <a class="btn btn-info" href="signup.php" role="button">Sign Up</a>
            </form>

        </div>
