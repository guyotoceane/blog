<?php

include "db.php";

//print_r($_POST);die;

try{
    $message = $db->messages;

    $infos = array(
        "subject" => $_POST['subject'],
        "question" => $_POST['msg'],
        "nb_post" => 1,
        'date_crea' => new MongoDate(),
        'date_modif' => new MongoDate(),
        'answers' => array()

    );

    $message->insert($infos);
    $conn->close();

    header('Location: ../index.php');

}catch (MongoException $e) {;
    echo $e->getMessage();
}