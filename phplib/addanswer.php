<?php

include "db.php";


try{
    $collection = $db->messages;
    $cursor = $collection->findOne(array('_id'=>new MongoId($_POST['id_subject'])));
    $answer = $cursor['answers'];

    array_push($answer, $_POST['answer']);

    $cursor['answers'] = $answer;

    $cursor['date_modif'] = new MongoDate();
    $cursor['nb_post'] = $cursor['nb_post']+1;

    $collection->save($cursor);

    header('Location: ../subject.php?id='.$_POST['id_subject']);

} catch (MongoException $e) {;

    echo $e->getMessage();
}