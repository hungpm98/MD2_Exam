<?php

namespace App\Model;

use PDO;

class ProductModel
{
    public $connect;

    public function __construct()
    {
        $db = new DBConnect();
        $this->connect = $db->connect();
    }

    public function getAll()
    {
        $sql = "select products.id,products.name as pdname, categories.name as ctname, price, quantity, description from products join categories on products.category_id = categories.id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getById($id)
    {
        $sql = "select * from products where id = $id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function deleteById($id)
    {
        $sql = "delete from products where id = $id";
        $this->connect->query($sql);
    }

    public function create($data)
    {
        $sql = "insert into products (name,price,quantity,date,description,category_id) values (?,?,?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['price']);
        $stmt->bindParam(3, $data['quantity']);
        $stmt->bindParam(4, $data['date']);
        $stmt->bindParam(5, $data['description']);
        $stmt->bindParam(6, $data['category_id']);
        $stmt->execute();
    }

    public function update($data, $id)
    {
        $sql = "update products set name =?,price =?, quantity =?,date =?,description=?,category_id=? where id=$id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['price']);
        $stmt->bindParam(3, $data['quantity']);
        $stmt->bindParam(4, $data['date']);
        $stmt->bindParam(5, $data['description']);
        $stmt->bindParam(6, $data['category_id']);
        $stmt->execute();
    }

    public function search($data)
    {
        $sql = "select * from products where name like %?%";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['search']);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);

    }

    public function showById($id)
    {
        $sql = "select products.id , products.name as pdname , categories.name as ctname , price , quantity , description from products 
join categories on products.category_id = categories.id where products.id = $id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

}
