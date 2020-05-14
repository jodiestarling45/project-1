<?php

namespace Controller;


use function Couchbase\defaultDecoder;

use model\Gun;
use model\GunDB;
use model\DBconnection;


class GunController
{
    public $gunDB;

    public function __construct()
    {
        $connection = new DBconnection("mysql:host=localhost;dbname=gun_manager", "admin", "123456");
        $this->gunDB = new GunDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            $name = $_POST['name'];
            $series = $_POST['series'];
            $branch = $_POST['branch'];
            $content = $_POST['content'];
            $origin = $_POST['origin'];
            $price = $_POST['price'];
            $status = $_POST['status'];
            $type_id = $_POST['type'];
            $size_bullet_id = $_POST['size_bullet'];
            $gun = new Gun($name, $series, $branch, $content, $origin, $price, $status, $type_id, $size_bullet_id);
            $this->gunDB->create($gun);
            $message = "Created a gun";
            header('location: index.php?page=');

        }

            include "view/add.php";


    }

    public function index()
    {
        $guns = $this->gunDB->getAll();
        include "view/list.php";
    }

    public function view()
    {
        $id = $_GET['id'];
        $guns = $this->gunDB->get($id);
        include "view/view.php";

    }

    public function delete()
    {
        $id = $_REQUEST['id'];
        $this->gunDB->delete($id);
        header('location: index.php?page=');
        include "view/delete.php";
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            $id = $_REQUEST['id'];
            $name = $_POST['name'];
            $series = $_POST['series'];
            $branch = $_POST['branch'];
            $content = $_POST['content'];
            $origin = $_POST['origin'];
            $price = $_POST['price'];
            $status = $_POST['status'];
            $type_id = $_POST['type'];
            $size_bullet_id = $_POST['size_bullet'];
            $gun = new Gun($name, $series, $branch, $content, $origin, $price, $status, $type_id, $size_bullet_id);
            $this->gunDB->update($id,$gun);
            header('location: index.php?page=');
        }
        include 'view/edit.php';
    }


    public function search()
    {
        $guns=$this->gunDB->search($_REQUEST['id']);
        include 'view/search.php';
    }


}