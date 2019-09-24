<?php

namespace controller;

use model\database\DBconnect;
use model\Product;
use model\ProductManager;

class ProductController
{
    public $productDB;

    public function __construct()
    {

        $this->productDB = new ProductManager();
    }

    public function index()
    {
        $products = $this->productDB->getAll();
        include "view/list.php";
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->productDB->destroy($id);
        header('Location: index.php');
    }

    public function insert()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $products = $this->productDB->getAll();
            include "view/add.php";
        } else {
            $product = new Product($_POST['name'], $_POST['price'], $_POST['description'], $_POST['vendor']);
            $this->productDB->add($product);
            header('Location:index.php');
        }
    }

    public function repair()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET["id"];
            $product = $this->productDB->convertToObject($this->productDB->getEach($id));
            include "view/update.php";
        } else {
            $idProduct = $_POST['id'];
            $products = new Product($_POST['name'], $_POST['price'], $_POST['description'], $_POST['vendor']);
            $array = [
                "name = '" . $products->getName() . "'",
                "price = '" . $products->getPrice() . "'",
                "description ='" . $products->getDescription() . "'",
                "vendor ='" . $products->getVendor() . "'"
            ];
            $array = implode(',', $array);
            $this->productDB->update($array, $idProduct);
            header('Location:index.php');
        }
    }
}