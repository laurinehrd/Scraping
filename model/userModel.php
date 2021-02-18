<?php

class UserModel
{
    private $db;


    public function __construct()
    {
        $servername = "localhost";
        $dbname = "scraping";
        $username = "root";
        $password = "root";
        
        try {
            $this->db = new PDO("mysql:host=$servername; dbname=$dbname; charset=utf8", $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }


    public function signIn($email)
    {
        
        $request = $this->db->prepare("SELECT email, password FROM user WHERE email = ? ");
        $request->bindParam(1, $email);
        
        $result = $request->execute();
        $result = $request->fetch(PDO::FETCH_ASSOC);
        return $result;        
    }


    public function signOn($name, $firstname, $email, $password)
    {
        $password = password_hash($password, PASSWORD_DEFAULT); // hasher le mot de passe en bdd

        $request = $this->db->prepare('INSERT INTO user SET name = ?, firstname = ?, email = ?, password = ?');
        $request->bindParam(1, $name);
        $request->bindParam(2, $firstname);
        $request->bindParam(3, $email);
        $request->bindParam(4, $password);
        $request->execute();
    }


    public function emailExist($email)
    {
        $request = $this->db->prepare("SELECT email FROM user WHERE email = ? ");
        $request->bindParam(1, $email);

        $result = $request->execute();
        $result = $request->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public function user($email)
    {
        $request = $this->db->prepare("SELECT name, firstname, email FROM user WHERE email = ? ");
        $request->bindParam(1, $email);

        $result = $request->execute();
        $result = $request->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


    public function updateAccount($newfirstname, $newname, $newemail, $email)
    {
        $request = $this->db->prepare("UPDATE `user` SET `name`= ?, `firstname` = ?, `email` = ? WHERE `email`= ?");
        $request->bindParam(1, $newname);
        $request->bindParam(2, $newfirstname);
        $request->bindParam(3, $newemail);
        $request->bindParam(4, $email);
        $request->execute();
    }


    public function deleteAccount($email)
    {
        $request = $this->db->prepare("DELETE FROM `user` WHERE email = ?");
        $request->bindParam(1, $email);
        $request->execute();
    }


}
