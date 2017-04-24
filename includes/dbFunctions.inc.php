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

//-------------------------------------------------------Login code-----------------------------------------------------------

function login($user, $pass){
    $passback = "null";
    $db = setconnection();
    $temp = $db->prepare("SELECT Login_Name, Password FROM `Password` WHERE Login_Name = :userparam AND Password = :passparam;");

    $temp->bindParam(':userparam', $user, PDO::PARAM_STR);
    $temp->bindParam(':passparam', $pass, PDO::PARAM_STR);

    $temp->execute();
    $temp->setFetchMode(PDO::FETCH_ASSOC);
    while ($r = $temp->fetch()){
        $passback = ($r['Login_Name']);
    }
    return $passback;
}

//--------------------------------------General functions used throughout page------------------------------------------------

function setSessionDefault(){
    $_SESSION['search'] = "no";
    $_SESSION['location'] = "no";
    $_SESSION['category'] = "no";
}

//-----------------college and category functions meant for dropdown lists-----------------

function signupCollegeList(){
    $db = setconnection();
    $query = "SELECT Location_ID, CollegeName FROM `Location` ORDER BY CollegeName";

    $temp = $db->query($query);
    $temp->setFetchMode(PDO::FETCH_ASSOC);
    while ($r = $temp->fetch()){
        echo ("<option value='" . $r[Location_ID] . "'>" . $r['CollegeName'] . "</option>");
    }
}

function signupCategoryList(){
    $db = setconnection();
    $query = "SELECT Category_ID, CategoryName FROM `Category` ORDER BY `CategoryName` ASC";

    $temp = $db->query($query);
    $temp->setFetchMode(PDO::FETCH_ASSOC);
    while ($r = $temp->fetch()){
        echo ("<option value='" . $r['Category_ID'] . "'>" . $r['CategoryName'] . "</option>");
    }
}


//------------------------------------------------Uploading to Database code below---------------------------------------------


function newUser($Fname, $Lname, $email, $phone, $username, $college, $password){
        $db = setconnection();
        $temp = $db->prepare("INSERT INTO `Password` (`Login_Name`, `Password`) VALUES (:userparam, :passparam);");

        $temp->bindParam(':userparam', $username, PDO::PARAM_STR);
        $temp->bindParam(':passparam', $password, PDO::PARAM_STR);

        $temp->execute();

        $temp2 = $db->prepare("INSERT INTO `Users` (`FirstName`, `LastName`, `Email`, `Phone`, `Location_ID`, `Login_Name`) VALUES (:fnameparam, :lnameparam, :emailparam, :phoneparam, :collegeparam, :userparam);");
        $temp2->bindParam(':fnameparam', $Fname, PDO::PARAM_STR);
        $temp2->bindParam(':lnameparam', $Lname, PDO::PARAM_STR);
        $temp2->bindParam(':emailparam', $email, PDO::PARAM_STR);
        $temp2->bindParam(':phoneparam', $phone, PDO::PARAM_INT);
        $temp2->bindParam(':collegeparam', $college, PDO::PARAM_INT);
        $temp2->bindParam(':userparam', $username, PDO::PARAM_STR);

        $temp2->execute();
}

function uploadImage($File){
    $ok=1;
    $filetype= $_FILES['uploadedfile']['type'];


    //This is our limit file type condition
    if ($filetype =="image/jpeg" ||  $filetype =="image/png")
    {
        $ok=0;
    }
    else
    {
        return "type";
    }

    $temp = explode(".", $_FILES["uploadedfile"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);

    if ( $ok == 0)
    {
        if(move_uploaded_file($_FILES["uploadedfile"]["tmp_name"], "images/" . $newfilename)){
            echo "<br> The file ".  basename( $_FILES['uploadedfile']['name']). " has been uploaded.";
            return $newfilename;
        }

        else{
            echo "There was an error uploading the file, please try again!";
            return "error";
        }
    }
}

function newListing($title, $desc, $price, $path, $user, $location, $category){
    $userID = getUserID($user);

    $db = setconnection();

    $temp = $db->prepare("INSERT INTO `Listings`(`Title`, `Description`, `Price`, `Path`, `User_ID`, `Location_ID`, `Category_ID`) VALUES (:titleparam, :descparam, :priceparam, :pathparam, :userIDparam, :locationparam, :categoryparam);");
    $temp->bindParam(':titleparam', $title, PDO::PARAM_STR);
    $temp->bindParam(':descparam', $desc, PDO::PARAM_STR);
    $temp->bindParam(':priceparam', $price, PDO::PARAM_INT);
    $temp->bindParam(':pathparam', $path, PDO::PARAM_STR);
    $temp->bindParam(':userIDparam', $userID, PDO::PARAM_INT);
    $temp->bindParam(':locationparam', $location, PDO::PARAM_INT);
    $temp->bindParam(':categoryparam', $category, PDO::PARAM_INT);

    $temp->execute();


}

function getUserID($user){
    $passback = "null";
    $db = setconnection();

    $temp = $db->prepare("SELECT User_ID FROM Users WHERE Users.Login_Name = :userparam;");
    $temp->bindParam(':userparam', $user, PDO::PARAM_STR);

    $temp->execute();
    $temp->setFetchMode(PDO::FETCH_ASSOC);
    while ($r = $temp->fetch()){
        $passback = ($r['User_ID']);
    }
    return $passback;
}

//----------------------------------------Profile code below - includes delete-----------------------------

function profileListing($user){
    $userID = getUserID($user);

    $db = setconnection();
    $temp = $db->prepare("SELECT Listing_ID, Title FROM `Listings` WHERE User_ID = :userparam;");

    $temp->bindParam(':userparam', $userID, PDO::PARAM_INT);

    $temp->execute();
    $temp->setFetchMode(PDO::FETCH_ASSOC);
    while ($r = $temp->fetch()){
        echo(
            '<tr>
                <td>' . substr($r['Title'], 0, 16) . '</td>
                <td><input type="submit" class="btn btn-danger btn-xs" name="deleteItem" value="' . $r['Listing_ID'] . '" style="color: red; border-radius: 5px; width: 50%"></td>
            </tr>'
        );
    }
}

function userInfo($user){
    $id = getUserID($user);

    $db = setconnection();
    $temp = $db->prepare("SELECT FirstName, LastName, Email, Phone, CollegeName FROM Users, Location WHERE Location.Location_ID = Users.Location_ID AND User_ID =  :userparam;");
    $temp->bindParam(':userparam', $id, PDO::PARAM_INT);
    $temp->execute();
    while ($r = $temp->fetch()){
        echo('
            <hr>
            <p>Name: ' . $r['FirstName'] . ' ' . $r['LastName'] . '</p>
            <hr>
            <p>Email: ' . $r['Email'] . '</p>
            <hr>
            <p>Phone: ' . $r['Phone'] . '</p>
            <hr>
            <p>Location: ' . $r['CollegeName'] . '</p>
        ');
    }
}

function deleteListing($id){

    deleteImage($id);

    $db = setconnection();
    $temp = $db->prepare("DELETE FROM `Listings` WHERE Listing_ID =  :deleteparam;");
    $temp->bindParam(':deleteparam', $id, PDO::PARAM_INT);
    $temp->execute();
}

function deleteImage($id){

    $img = null;

    $db = setconnection();
    $temp = $db->prepare("SELECT Path FROM `Listings` where Listing_ID = :imgparam;");
    $temp->bindParam(':imgparam', $id, PDO::PARAM_INT);
    $temp->execute();
    while ($r = $temp->fetch()){
        $img = ($r['Path']);
    }

    $imgPath = "images/" . $img;

    try{
        unlink($imgPath);
    }
    catch(Exception $e){}
}
