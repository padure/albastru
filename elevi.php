<?php
    require_once "vendor/autoload.php";
    use app\DataBase;
    $config = require_once "../config.php";
    $db = new DataBase($config);

    $query = $db->prepare('Select * from elevi', [], PDO::FETCH_OBJ);
    if(isset($_POST['nume']) && isset($_POST['prenume'])){
        $insert = $db->query("Insert into elevi(nume, prenume) values(:nume, :prenume)", [
            'nume'      => $_POST['nume'],
            'prenume'   => $_POST['prenume']
        ]);
        unset($_POST['nume']);
        unset($_POST['prenume']);
        header('location:elevi.php');
    }

    require 'views/elevi.view.php';

    $db = null;