<div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title"><span class="glyphicon glyphicon-user"></span>Profile</h1>
                </div>

                 <div class="panel-body"><h4 style="text-align:center;">
                         <?php
                         echo ($_SESSION['user']);
                     ?></h4>
                     <a class="btn btn-info btn-block" href="profile.php" role="button">View my Profile</a>
                </div>
        </div>

