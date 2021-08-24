<?php

class UserDAO   {

    //Store the PDO agent here.
    private static $db;

    static function init()  {
        //Initialize the internal PDO Agent
        self::$db = new PDOAgent('User');
    }

    //Get the user
    static function getUser(string $userName)  {
        $sql = "SELECT * FROM users WHERE username=:username";
        //Query!
        self::$db->query($sql);
        //Bind!
        self::$db->bind(":username",$userName);
        //Execute!
        self::$db->execute();
        //Return the reuslts!
        return self::$db->singleResult();
    }

    static function getUsers()  {
        $sql = "SELECT id,first_name,last_name,username,email,phone,gender,age FROM users";
        //Query!
        self::$db->query($sql);

        //Execute!
        self::$db->execute();
        //Return the reuslts!
        return self::$db->getResultSet();
    }
    
}