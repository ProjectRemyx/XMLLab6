<?php
require_once '../Controllers/googleLoginConfig.php';
session_start();
//Put this on any page with a logout button
if (isset($_POST['Logout']))
{
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);

    //Logout for google api login
    unset($_SESSION['access_token']);
    $gClient->revokeToken();
    
    
    header("location: ../Views/dashboard.php");
}

if(isset($_SESSION['id']))
{
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    
    //Logout for google api login
    unset($_SESSION['access_token']);
    $gClient->revokeToken();
    
    session_destroy();
    header("location: ../index.php");
}
else
{
    header("location: ../index.php");
}
?>