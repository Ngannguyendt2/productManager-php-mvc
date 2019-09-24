<?php


namespace model;

use model\database\DBconnect;
use model\Product;


class ProductManager
{
    public $connection;

    public function __construct()
    {
        $conn = new DBconnect();
        $this->connection = $conn->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->connection->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $product = new Product($item['name'], $item['price'], $item['description'], $item['vendor']);
            $product->setId($item['id']);
            array_push($arr, $product);
        }
        return $arr;
    }

    public function convertToObject($arr)
    {
        foreach ($arr as $item) {
            $product = new Product($item["name"], $item["price"], $item["description"], $item["vendor"]);
            $product->setId($item["id"]);
        }
        return $product;
    }

    public function getEach($id)
    {
        $sql = "SELECT * FROM products WHERE id=$id";
        $stmt = $this->connection->query($sql);
        $result = $stmt->fetchAll();
        return $result;
    }

    public function destroy($productId)
    {
        $sql = "DELETE FROM products WHERE id=$productId";
        $this->connection->query($sql);
    }

    public function add($product)
    {
        $sql = "INSERT INTO products(name,price,description,vendor) VALUES(?,?,?,?) ";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $product->getName());
        $stmt->bindParam(2, $product->getPrice());
        $stmt->bindParam(3, $product->getDescription());
        $stmt->bindParam(4, $product->getVendor());
        $stmt->execute();
    }

    public function update($data, $id)
    {
        $sql = "UPDATE products SET $data WHERE id=$id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute(array_values($data));

    }
}