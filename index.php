<?include "phplib/db.php" ?>

<!DOCTYPE html>
<html>
<head>
    <title>Blablatons.com</title>
    <link href="https://fonts.googleapis.com/css?family=Kite+One" rel="stylesheet">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
<?php include "parts/header.php"?>

<div class="container">
    <a href="newSubject.php">Nouveau sujet</a>

    <div>

    <?php

    try {
        // Choix de la collection
        $collection = $db->messages;
        // Rapatriement de tous documents de la collection
        $cursor = $collection->find();
        $cursor->sort(array("_id" => -1));
        // loop over the results
        echo "<table>";
        foreach ($cursor as $obj) {

            echo '<tr>
                    <td class="resume-table"> <a href="subject.php?id='.(string)$obj['_id'].'"> '.$obj['subject'].' </a></td>
                    <td class="resume-table"> '.$obj['nb_post'].' message(s)</td>
                </tr>';
        }
        echo "</div>";
        // clore la connexion à  MongoDB
        $conn->close();
    } catch (MongoConnectionException $e) {
        // gestion des erreurs lors de la connexion
        echo $e->getMessage();
    } catch (MongoException $e) {
        echo $e->getMessage();
    }



    ?>
    </div>


</div>
</body>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
