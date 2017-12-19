<?php

include "db.php";

//print_r($_POST);die;

try{
    $users = $db->users;

    $infos = array(
        "nom" => $_POST['name'],
        "prenom" => $_POST['lastname'],
        "mail" => $_POST['email'],
        'mdp' => $_POST['mdp'],


    );

    $users->insert($infos);
    $conn->close();

    header("Location:". $_POST['hist']);
    exit();

}catch (MongoException $e) {;
    echo $e->getMessage();
}