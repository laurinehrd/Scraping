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
        }
    }


    public function signIn($email, $password)
    {
        // $sql = 'SELECT name, firstname, email FROM user WHERE email = :email, password = :password';
        // $sth = $this->db->prepare($sql);
        // $sth->bindParam(':email', $email, PDO::PARAM_STR);
        // $sth->bindParam(':password', $password, PDO::PARAM_STR);
        // $sth->execute();
        // return $sth->fetchAll(PDO::FETCH_ASSOC);

        $request = $this->db->prepare("SELECT email, password FROM user WHERE email = '.$email.' AND password = '.$password.'");
        // $request->bindParam(1, $email);
        // $request->bindParam(2, $password);
        
        $result = $request->execute();
        return $result;
        var_dump($result);
        
        
    }

    public function signOn($name, $firstname, $email, $password)
    {
        // $sql = 'INSERT INTO user (name, firstname, email, password) VALUE name = :name, firstname = :firstname, email = :email, password = :password';
        // $sth = $this->db->prepare($sql);
        // $sth->bindParam(':name', $name, PDO::PARAM_STR);
        // $sth->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        // $sth->bindParam(':email', $email, PDO::PARAM_STR);
        // $sth->bindParam(':password', $password, PDO::PARAM_STR);
        // $sth->execute();
        // return $sth->fetchAll(PDO::FETCH_ASSOC);

        $request = $this->db->prepare('INSERT INTO user SET name = ?, firstname = ?, email = ?, password = ?');
        $request->bindParam(1, $name);
        $request->bindParam(2, $firstname);
        $request->bindParam(3, $email);
        $request->bindParam(4, $password);
        $request->execute();
    }


}
