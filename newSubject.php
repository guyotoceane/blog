<? include "phplib/db.php" ?>

<!DOCTYPE html>
<html>
<head>
    <title>Blablatons.com</title>
    <link href="https://fonts.googleapis.com/css?family=Kite+One" rel="stylesheet">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
<?php include "parts/header.php" ?>

<div class="container">
    <h1>Nouveau message</h1>
    <form method="post" action="phplib/addSubject.php">
        <input type="text" name="subject" placeholder="Sujet">
        <textarea name="msg"></textarea>
        <input type="submit" value="Ajouter mon message">
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
