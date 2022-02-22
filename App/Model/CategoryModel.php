<?php

namespace App\Model;

class CategoryModel
{
    public $connect;
    public function __construct()
    {
        $db = new DBConnect();
        $this->connect = $db->connect();
    }

    public function getAll()
    {
        $sql = "select * from categories";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
        
    }
    public function showAll()
    {
        $sql = "select categories.id,categories.name as ctname,products.name as pdname from categories join products on categories.id = products.category_id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }
}