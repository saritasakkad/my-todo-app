<?php
include 'config.php';

try{

    $bdd = new PDO(
        'mysql:host=' . $dbconfig['host'] . ';dbname=' . $dbconfig['dbname'] . ';charset=utf8',
        $dbconfig['user'],
        $dbconfig['password']
    );
}catch (Exception $e){
  die('Erreur : ' . $e->getMessage());
}


?>
