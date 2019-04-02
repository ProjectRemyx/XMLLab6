<?php
require_once "../GoogleAPI/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId("507207058585-lsq73p1uie0uor729s51hd50rvu0pnin.apps.googleusercontent.com");
$gClient->setClientSecret("_5728-2GomLBPr9WBKZwBG7C");
$gClient->setApplicationName("Tollo");
$gClient->setRedirectUri("http://localhost:8080/XMLLab6/Views/googleCallback.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
