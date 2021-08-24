<?php
//Require Files
require_once("inc/config.inc.php");

require_once("inc/Entity/User.class.php");

require_once("inc/Utility/PDOAgent.class.php");
require_once("inc/Utility/UserDAO.class.php");

require_once("inc/Utility/Page.class.php");

//Check if the form was posted
if(!empty($_POST)){

    //Initialize the DAO
    UserDAO::init();
    //Get the current user 
    $userName = $_POST['username'];
    $authUser = UserDAO::getUser($userName);
    //Check the DAO returned an object of type user
    if( (gettype($authUser) == "object") && (get_class($authUser) == "User") ){
        
        //Check the password
        if ($authUser->verifyPassword($_POST['password']))  {
            //Start the session
            session_start();
            //Set the user to logged in
            $_SESSION["loggedin"] = true;
            $_SESSION['username'] = $authUser;

            //Send the user to the user managment page Lab09-gfr_91-updateaccount.php
            header("Location: Lab09-gfr-91-updateaccount.php");
            exit();
        }
    }
}
    

//Set the age Title
Page::header();
Page::showLogin();
Page::footer();


?>