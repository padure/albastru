<?php
    require_once "vendor/autoload.php";
    use app\DataBase;
    $config = require_once "config.php";
    $db = new DataBase($config);
    $query = $db->query('Select * from grupe', [], PDO::FETCH_OBJ);
    if(isset($_POST['nume'])){
        $insert = $db->query("Insert into grupe(nume) values(:nume)", [
            'nume'      => $_POST['numele']
        ]);
        unset($_POST['nume']);
        header('location:grupe.php');
    }

    require 'views/grupe.view.php';

    $db = null;