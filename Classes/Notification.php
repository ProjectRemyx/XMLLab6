<?php
namespace App;

class Notification
{
    public function displayNotifs($db)
    {
        $sql = "SELECT * FROM notifications WHERE status = 'unread'";
        $pst = $db->prepare($sql);

        $pst->execute();
        $n = $pst->fetchAll(\PDO::FETCH_OBJ);
        return $n;
    }

    public function addNotif($name, $message, $status, $date, $time, $db)
    {
        $sql = "INSERT INTO notifications (name, message, status, date, time)
        VALUES (:name, :message, :status, :date, :time)";

        $pst = $db->prepare($sql);

        $pst->bindParam(':name', $name);
        $pst->bindParam(':message', $message);
        $pst->bindParam(':status', $status);
        $pst->bindParam(':date', $date);
        $pst->bindParam(':time', $time);

        $count = $pst->execute();
        return $count;
    }

    public function deleteAllNotifs($db)
    {
        $sql = "TRUNCATE TABLE notifications";

        $pst = $db->prepare($sql);

        $count = $pst->execute();
        return $count;
    }
}
