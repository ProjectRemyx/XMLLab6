<?php
namespace App;
class User
{
    //Add a new user
    public function addUser($username, $password, $email, $avatar, $db)
    {
        $sql = "INSERT INTO users (username, password, email, avatar)
            VALUES (:username, :password, :email, :avatar)";
        $pst = $db->prepare($sql);

        $pst->bindParam(':username', $username);
        $pst->bindParam(':password', $password);
        $pst->bindParam(':email', $email);
        $pst->bindParam(':avatar', $avatar);

        $count = $pst->execute();
        return $count;
    }

    //Check for existing user
    public function checkExistingUser($username, $db)
    {
        $sql = "SELECT * FROM users WHERE username = :username";
        $pdostm = $db->prepare($sql);
        $pdostm->bindValue(':username', $username, \PDO::PARAM_STR);
        $pdostm->execute();
        $u = $pdostm->fetchAll(\PDO::FETCH_OBJ);
        return $u;
    }

    //Get user info in an associative array that will be put into the $user variable
    public function getUser($username, $db)
    {
        $sql = "SELECT * FROM users WHERE username = :username";
        $pdostm = $db->prepare($sql);
        $pdostm->bindValue(':username', $username, \PDO::PARAM_STR);
        $pdostm->execute();
        $u = $pdostm->fetch(\PDO::FETCH_ASSOC);
        return $u;
    }

}
