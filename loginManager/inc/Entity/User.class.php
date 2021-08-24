<?php

/*
`id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
*/
class User {

    //Attributes
    private $id;
    private $first_name;
    private $last_name;
    private $username;
    private $email;
    private $phone;
    private $gender;
    private $age;
    private $password;

   

    //Getters
    public function getId(){
        return $this->id;
    }
    public function getFirstName(){
        return $this->first_name;
    }
    public function getLastName(){
        return $this->last_name;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function getGender(){
        return $this->gender;
    }
    public function getAge(){
        return $this->age;
    }
    public function getPassword(){
        return $this->password;
    }
    
    

    //Verify the password
    function verifyPassword(string $passwordToVerify) : bool {
        //password comparator
        $equal = false;
        //Return a boolean based on verifying if the password given is correct for the current user
        if(password_verify($passwordToVerify,$this->getPassword())){
            //set password comparator true
            $equal = true;
        } else {
            //set password comparator false
            $equal = false;
        }
        //return the password comparator
        return $equal;
    }
}



?>