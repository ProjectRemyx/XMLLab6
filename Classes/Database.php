<?php
namespace App;

class Database
{
    // private static $user = 'delanh_notears';
    // private static $pass = 'Fr_-K8??5K=Xnw^=';
    // private static $dsn = 'mysql:host=zeus.24x7onlinedns.com;dbname=delanh_tollo';

    private static $user = 'root';
    private static $pass = '';
    private static $dsn = 'mysql:host=localhost; dbname=tollo';
    private static $dbcon;
    private function __construct()
    { }
    public static function getDb()
    {
        if (!isset(self::$dbcon)) {
            try {
                self::$dbcon = new \PDO(self::$dsn, self::$user, self::$pass);
                self::$dbcon->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                $errorMessage = $e->getMessage();
                include 'error.php';
                exit();
            }
        }
        return self::$dbcon;
    }
}
Database::getDb();
