<?php
require_once '../../vendor/autoload.php';
use App\Database;
use App\Reminder;
use App\Notification;

//session_start();

$db = Database::getDb();
$r = new Reminder();
//get all reminders from db
$reminder = $r->listReminder($db);

//format date and time
$timezone = date_default_timezone_set('US/Eastern');
$d = date('Y-m-d');
$t = date('G:i:s');

echo $t;

foreach ($reminder as $rem) {
    $rdate = $rem->date;
    $rtime = $rem->time;

    echo "
        <div id='listRem'>
            <ul>
                <li>
                    <p><b> $rem->title </b></p>" . " " .
        "<p> $rdate </p>" . " " .
        "<p> $rtime </p>" . " " . "


                    <form action='../Controllers/reminders/updateReminder.php' method='post'>
                    <input type='hidden' name='id' value='$rem->id' />
                    
                    </form>
                    <form action='../Controllers/reminders/deleteReminder.php' method='post'>
                    <input type='hidden' name='id' value='$rem->id' />
                    </form>
                </li>
            </ul>
        </div>
    ";

    //checks if date and time are met 
    if ($rdate == $d && $t >= $rtime) {
        $newName = 'Reminder';
        $newMessage = $rem->title;
        $newStatus = 'unread';

        //inputs the reminder data into the notifications table
        //will grab data from Notifications table in header.php to insert into dropdown    
        $n = new Notification();
        $newNotif = $n->addNotif($newName, $newMessage, $newStatus, $rdate, $rtime, $db);

        if ($newNotif) {
            echo "Reminder added to notif";
        } else {
            echo "error adding reminder";
        }
    }
}

// $email = $_SESSION['email'];
// echo $email;
