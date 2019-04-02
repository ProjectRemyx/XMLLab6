<?php
define('ROOTPATH',"http://localhost:8080/XMLLab6/");
define('CSSPATH', ROOTPATH . "css/");
define('IMGPATH', ROOTPATH . "img/");
define('SCRIPTPATH', ROOTPATH . "scripts/");
define('VIEWPATH', ROOTPATH . 'Views/');
define('CONPATH', ROOTPATH . 'Controllers/');
define('CLASSPATH', ROOTPATH . "Classes/");
define('VENDOR', ROOTPATH . "vendor/");

?>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- Stylesheets -->
<link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?= CSSPATH ?>global.css">

<?php
if (isset($style)) {
    echo '<link rel="stylesheet" type="text/css" href="' . CSSPATH . $style . '">';
}
?>

<!-- Scripts: Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>

<!-- Scripts -->
<script src="<?= SCRIPTPATH ?>login.js"></script>
<script src="<?= SCRIPTPATH ?>exercise.js"></script>
<script src="<?= SCRIPTPATH ?>goals.js"></script>
<script src="<?= SCRIPTPATH ?>reminder.js"></script>
