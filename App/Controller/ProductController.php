<?php

namespace App\Controller;

use App\Model\CategoryModel;
use App\Model\ProductModel;

class ProductController
{
    public $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function getAll()
    {
        $products = $this->productModel->getAll();
        include "App/View/products/list.php";
    }

    public function getById()
    {
        $products = $this->productModel->showById($_GET['id']);
        $category = new CategoryModel();
        $categories = $category->showAll();
        include "App/View/products/detail.php";
    }
    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            $category = new CategoryModel();
            $categories = $category->showAll();
            $categoriess = $category->getAll();
//            var_dump($categories);
//            die();
            include "App/View/products/create.php";
        }
        else{
            $this->productModel->create($_POST);
            header('location:index.php?page=product-list');
        }
    }

    public function update()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            $category = new CategoryModel();
            $categories = $category->showAll();
           $products = $this->productModel->showById($_GET['id']);
            include "App/View/products/edit.php";
        }
        else{
            $this->productModel->update($_POST,$_GET['id']);
            header('location:index.php?page=product-list');
        }
    }

    public function delete()
    {
        $this->productModel->deleteById($_GET['id']);
        header("location:index.php?page=product-list");
    }

    public function search()
    {
        if ($_SERVER["REQUEST_METHOD"]=="GET"){
            $products = $this->productController->showAll();
            include "App/View/products/list.php";
        }else{
            $data =  $this->productController->search($_POST);
            var_dump($data);
            die();
            include "App/View/products/search.php";
        }
    }
}