<?php
require_once '../../vendor/autoload.php';
use App\Database;
use App\Notification;

$db = Database::getDb();
$n = new Notification();

if (isset($_POST['clear'])) {
    $clear = $n->deleteAllNotifs($db);

    if ($clear) {
        header('Location: /project-no-tears/index.php');
    } else {
        echo "error";
    }
}
