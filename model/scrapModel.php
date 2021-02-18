<?php

class ScrapModel
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


    public function scrap($scrapName, $category, $scrapUrl, $selectParent, $underSelector)
    {
        $request = $this->db->prepare('INSERT INTO scrap SET name = ?, category = ?, url = ?, selectParent = ?, underSelector = ?');
        $request->bindParam(1, $scrapName);
        $request->bindParam(2, $category);
        $request->bindParam(3, $scrapUrl);
        $request->bindParam(4, $selectParent);
        $request->bindParam(5, $underSelector);
        $request->execute();
    }

    public function detailScrap($selectorChild, $id_scrap, $id_type, $scrap)
    {
        $request = $this->db->prepare('INSERT INTO detailScrap SET selectorChild = ?, id_scrap = ?, id_type = ?, scrap = ?');
        $request->bindParam(1, $selectorChild, PDO::PARAM_STR);
        $request->bindParam(2, $id_scrap, PDO::PARAM_INT);
        $request->bindParam(3, $id_type, PDO::PARAM_INT);
        $request->bindParam(4, $scrap, PDO::PARAM_STR);
        $request->execute();
    }


    public function lastId()
    {
        return $this->db->lastInsertId();
    }


    public function typeAll()
    {
        $request = $this->db->prepare("SELECT id_type, type FROM type");
        $result = $request->execute();
        $result = $request->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public function listScrap()
    {
        $request = $this->db->prepare("SELECT id, name, category, url FROM scrap");
        $request->bindParam(1, $id);
        $request->bindParam(2, $name);
        $request->bindParam(3, $category);
        $request->bindParam(4, $url);
        $result = $request->execute();
        $result = $request->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function deleteScrap($id)
    {
        $request = $this->db->prepare("DELETE FROM `scrap` WHERE id = ?");
        $request->bindParam(1, $id);
        $request->execute();
    }

    public function deleteDetailScrap($id)
    {
        $request = $this->db->prepare("DELETE FROM `detailScrap` WHERE id_scrap = ?");
        $request->bindParam(1, $id);
        $request->execute();
    }




}
