<?php

require_once('dbConnect.inc.php');

function setConnection(){
    $db_host = DBHOST;
    $db_name = DBNAME;
    $db_user = DBUSER;
    $db_pass = DBPASS;
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $db;
}

function collegeList(){
    $db = setconnection();
    $query = "SELECT CollegeName FROM `Location` ORDER BY CollegeName";

    $temp = $db->query($query);
    $temp->setFetchMode(PDO::FETCH_ASSOC);
    while ($r = $temp->fetch()){
        echo ("<li class='list-group-item'><a href='#'>" . $r['CollegeName'] . "</a></li>");
    }
}

function categoryName(){
    $db = setconnection();
    $query = "SELECT CategoryName FROM Category ORDER BY CategoryName LIMIT 5";

    $temp = $db->query($query);
    $temp->setFetchMode(PDO::FETCH_ASSOC);
    while ($r = $temp->fetch()){
        echo ('<a href="#" class="list-group-item">' . $r['CategoryName'] . '</a>');
    }
}

function categoryNameBonus(){
    $db = setconnection();
    $query = "SELECT CategoryName FROM Category ORDER BY CategoryName";
    $i = 0;

    $temp = $db->query($query);
    $temp->setFetchMode(PDO::FETCH_ASSOC);
    while ($r = $temp->fetch()){
        if ($i > 4){
            echo ('<a href="#" class="list-group-item">' . $r['CategoryName'] . '</a>');
        }
        else{
            $i++;
        }
    }
}



function leftRailPopCount(){
    $db = setconnection();
    $query = "SELECT DISTINCT geocountries.ISO, geocountries.CountryName FROM `geocountries`, `travelimagedetails` WHERE geocountries.ISO = travelimagedetails.CountryCodeISO;";

    $temp = $db->query($query);
    $temp->setFetchMode(PDO::FETCH_ASSOC);
    while ($r = $temp->fetch()){
        echo ("<li class='list-group-item'><a href='browse-images.php?city=0&country=" . $r['ISO'] . "'>" . $r['CountryName'] . "</a></li>");
    }
}

function displayImages(){
    $db = setconnection();
    $query = "SELECT Path FROM `travelimage`;";

    $temp = $db->query($query);
    $temp->setFetchMode(PDO::FETCH_ASSOC);
    while ($r = $temp->fetch()){
        echo ("<img src ='images/travel/square/" . $r['Path'] . "' class='img-thumbnail'></img>");
    }
}

function searchImages($city, $country){
    if ($city == 0){
        if ($country == "ZZZ"){
            displayImages();
        }
        else{
            countrySearch($country);
        }
    }
    else if($country == "ZZZ"){
        citySearch($city);
    }
    else{
        dualSearch($city, $country);
    }
}

function citySearch($city){
    $db = setconnection();

    $temp = $db->prepare('SELECT DISTINCT Path FROM `travelimage`, `travelimagedetails` WHERE travelimage.UID = travelimagedetails.ImageID AND travelimagedetails.CityCode = :parameter ;');
    $temp->bindParam(':parameter', $city, PDO::PARAM_STR);
    $temp->execute();

    $temp->setFetchMode(PDO::FETCH_ASSOC);
    while ($r = $temp->fetch()){
        echo ("<img src ='images/travel/square/" . $r['Path'] . "' class='img-thumbnail'></img>");
    }
}

function countrySearch($country){
    $db = setconnection();

    $temp = $db->prepare('SELECT DISTINCT Path FROM `travelimage`, `travelimagedetails` WHERE travelimage.UID = travelimagedetails.ImageID AND travelimagedetails.CountryCodeISO = :parameter ;');
    $temp->bindParam(':parameter', $country, PDO::PARAM_STR);
    $temp->execute();

    $temp->setFetchMode(PDO::FETCH_ASSOC);
    while ($r = $temp->fetch()){
        echo ("<img src ='images/travel/square/" . $r['Path'] . "' class='img-thumbnail'></img>");
    }
}

function dualSearch($city, $country){
    $db = setconnection();

    $temp = $db->prepare('SELECT DISTINCT Path FROM `travelimage`, `travelimagedetails` WHERE travelimage.UID = travelimagedetails.ImageID AND travelimagedetails.CountryCodeISO = :parameter1 AND travelimagedetails.CityCode = :parameter2');
    $temp->bindParam(':parameter1', $country, PDO::PARAM_STR);
    $temp->bindParam(':parameter2', $city, PDO::PARAM_STR);
    $temp->execute();

    $temp->setFetchMode(PDO::FETCH_ASSOC);
    while ($r = $temp->fetch()){
        echo ("<img src ='images/travel/square/" . $r['Path'] . "' class='img-thumbnail'></img>");
    }
}

?>
