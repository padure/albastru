<?php
    require_once "vendor/autoload.php";
    use app\DataBase;
    use app\Elev;
    use app\Grupa;
    $config = require_once "config.php";
    $db = new DataBase($config);
    $inmatric   = $db->query(
        'Select elevi.nume AS nume_elev, elevi.prenume AS prenume_elev, grupe.nume AS nume_grupa 
        FROM (( inmatriculare
        INNER JOIN elevi on inmatriculare.id_elev = elevi.id)
        INNER JOIN grupe on inmatriculare.id_grupa = grupe.id)', [], PDO::FETCH_OBJ);
    $elevi      = $db->query('Select * from elevis', [], PDO::FETCH_OBJ);
    $grupe      = $db->query('Select tot from grupe', [], PDO::FETCH_OBJ);
    if(isset($_POST['id_elev']) && isset($_POST['id_grupa'])){
        $insert = $db->query("Insert into elevi(id_elev, id_grupa) 
        values(:id_elev, :id_grupa)", [
            'id_elev'      => $_POST['id_elev'],
            'id_grupa'   => $_POST['id_grupa']
        ]);
        unset($_POST['id_elev']);
        unset($_POST['id_grupa']);
        header('location:inmatriculare.php');
    }

    require 'views/inmatriculare.view.php';

    $db = null;