<?php
function displayListingThumb($search, $location, $category){
    $db = setconnection();
    $query = "SELECT DISTINCT Title, Listing_ID, Description, Price, Path FROM Listings, Users WHERE users.User_ID = Listings.User_ID";

    if ($location != 'no'){
        $query .= " AND listings.Location_ID = " . $location;
    }

    if ($category != 'no'){
        $query .= " AND listings.Category_ID = " . $category;
    }

    if ($search != 'no'){
        $query .= ' AND Listings.Title LIKE  "' . $search . '"';
    }

    $temp = $db->query($query);
    $temp->setFetchMode(PDO::FETCH_ASSOC);
    while ($r = $temp->fetch()){
        $modal = "#myModal" . $r['Listing_ID'];
        echo('
            <div class="col-sm-3 col-lg-3 col-md-3">
            <div class="thumbnail">
            <img src="images/' . $r['Path'] . '" alt="" style="height:150px;">
            <div class="caption">
            <h4 class="pull-right"><span class="itemPrice2">$' . $r['Price'] . '</span></h4>
            <h4>
            <a href = "' . $modal . '" data-toggle="modal">' . substr($r['Title'], 0, 16) . '...</a>

            </h4>
            </div>
            </div>
            </div>
            ');

    }
}

function displayListingBig($search, $location, $category){

    $db = setconnection();
    $query = "SELECT DISTINCT Email, Listing_ID, Title, Description, Price, Path FROM Listings, Users WHERE users.User_ID = Listings.User_ID";

    if ($location != 'no'){
        $query .= " AND listings.Location_ID = " . $location;
    }

    if ($category != 'no'){
        $query .= " AND listings.Category_ID = " . $category;
    }

    if ($search != 'no'){
        $query .= ' AND Listings.Title LIKE  "' . $search . '"';
    }

    $temp = $db->query($query);
    $temp->setFetchMode(PDO::FETCH_ASSOC);
    while ($r = $temp->fetch()){
        $modal = "myModal" . $r['Listing_ID'];
        echo('
            <div class="modal fade" id="' . $modal . '" role="dialog">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="row">
            <div class="col-md-12">
            <div class="panel panel-default  panel--styled">
            <div class="panel-body">
            <div class="col-md-12 panelTop">
            <div class="col-md-6">
            <img class="img-responsive" src="images/' . $r['Path'] . '" alt=""/>
            </div>
            <div class="col-md-6">
            <h2>' . $r['Title'] . '</h2>
            <p>' . $r['Description'] . '</p>
            <br>
            <h4>Price<span class="itemPrice"> $' . $r['Price'] . '</span></h4>
            <h4>Email<span class="itemEmail"> ' . $r['Email'] . '</span></h4>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>

            ');

    }
}
