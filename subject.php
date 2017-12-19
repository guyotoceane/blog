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

    <div>

        <?php

        try {
            // Choix de la collection
            $collection = $db->messages;
            // Rapatriement de tous documents de la collection
            $cursor = $collection->findOne(array('_id'=>new MongoId($_GET['id'])));

            // loop over the results

            echo "<h1>".$cursor['subject']."</h1>";

            echo "<div class='question'>".$cursor['question']."</div>";

            echo "<h2>R&eacute;ponses au sujet</h2>";

            foreach ($cursor['answers'] as $obj){
                echo "<div class='answer'>";
                echo $obj;
                echo "</div>";
            }


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

    <form method="post" action="phplib/addanswer.php">
        <h3>R&eacute;pondre au sujet</h3>
        <textarea name="answer"></textarea>
        <input type="hidden" name="id_subject" value="<?php echo (string) $cursor['_id'] ?>">
        <input type="submit" value="Valider ma r&eacute;ponse">
    </form>


</div>
</body>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinyMCE.init({
        mode : "textareas",
        menubar: false,
    });
</script>
</html>
