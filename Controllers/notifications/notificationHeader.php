<?php
use App\Database;
use App\Notification;
?>
<div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto" id="scrollable-menu">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php
                                        //get notifications in the dropdown 
                $db = Database::getDb();
                $n = new Notification();
                $notif = $n->displayNotifs($db);

                ?>
                <i class="fa fa-bell">
                    <span class="badge badge-light"><?php echo count($notif); ?></span>
                </i>
            </a>
            <div class="dropdown-menu scrollable-menu" aria-labelledby="navbarDropdown">
                <form method="POST" action="<?= CONPATH ?>notifications\deleteNotifs.php">
                    <button type="submit" name="clear" id="clearBtn" class="btn btn-outline-primary">Clear</button>
                </form>
                <div class="dropdown-divider"></div>
                <?php
                foreach ($notif as $n) {
                    echo '<a class="dropdown-item" href="#">
                                             <b>' . $n->name . '</b><br>' .
                        '<p>' . $n->message . '</p>' .
                        '<small><i>' . $n->date . ' ' . $n->time . '</i></small><br>
                                                </a>
                                                <div class="dropdown-divider"></div>';
                }
                ?>

            </div>

        </li>
    </ul>
</div> 