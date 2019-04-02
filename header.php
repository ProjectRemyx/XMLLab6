<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <?php
    session_start();
    require_once 'config.php';
    ?>
    <title><?php
            if (isset($title)) {
                echo $title . ' | ';
            }
            ?>
        Tollo: A Fitness and Weightlifting App</title>
</head>

<body>
    <a id="skipToMain" class="hidden" href="#mainContent" tabindex="0">Skip to main content</a>
    <header id="header">
        <div class="pageWrapper">

            <!--hidden elements-->
            <h2 class="hidden">Main Navigation</h2>
            <button id="dropdownMenu">
                <img src="<?= IMGPATH ?>hamburger.png" id="dropdownIcon" alt="Open Menu" />
            </button>
            <!--end hidden elements-->

            <div id="headerContent" class="flexContainer">
                <div id="logoAndMainNav" class="flexContainer">
                    <div id="logoContainer">
                        <a href="<?= ROOTPATH ?>index.php"><img id="siteLogo" src="<?= IMGPATH ?>be-strong-preview.png" alt="Tollo Logo" /></a>
                        <h1 id="siteName" class="hidden">Tollo</h1>
                    </div>

                    <nav id="mainNavigation" class="navbar navbar-icon-top navbar-expand-lg">
                        <!-- Display Navigation-->
                        <ul class="menu">
                            <?php
                            $menu = [
                                'Home' => ROOTPATH . 'index.php', 'Exercises' => VIEWPATH . 'listExercises.php', 'Workouts' => VIEWPATH . 'workouts.php',
                                'Goals' => VIEWPATH . 'goals.php', 'Profile' => VIEWPATH . 'profile.php'
                            ];
                            foreach ($menu as $label => $file) {
                                echo "<li><a href='$file'>$label</a></li>";
                            }
                            ?>
                        </ul>

                        <?php
                        require_once 'vendor\autoload.php';
                        include 'Controllers\notifications\notificationHeader.php';
                        ?>

                    </nav>
                </div>
                <div id="login">
                <?php
                if(isset($_SESSION['id']))
                {
                    echo "<a href='Controllers/logout.php'>Logout</a>";
                }
                else
                {
                    echo "<a href=".VIEWPATH."dashboard.php>Login</a>";
                    echo "/";
                    echo "<a href=".VIEWPATH."dashboard.php>Register</a>";

                }
                ?>
                </div>
            </div>
        </div>
    </header>

    <body>
