<?php

class User {

    public $name;
    public $firstname;


    public function setName($name)
    {
        $this->name = $name;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

}

$user = new User();
$user->setName('Laurine');

echo "je m'appelle : ".$user->name;