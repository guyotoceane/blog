<? include "phplib/db.php"; $referer=$_SERVER['HTTP_REFERER'] ?>

<!DOCTYPE html>
<html>
<head>
    <title>Blablatons.com</title>
    <link href="https://fonts.googleapis.com/css?family=Kite+One" rel="stylesheet">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">

</head>

<body>


<div class="container">
    <h1>Connexion</h1>
    <form method="post" action="phplib/connect.php">
        <input type="text" name="email" placeholder="Email"> <br>
        <input type="password" name="mdp" placeholder="Mot de passe"><br>
        <input type="hidden" name="hist" value="<?php echo $referer ?>">
        <input type="submit" value="Connexion">

        <div>
            Vous n'avez pas de compte ?<br>
            <a class="button" href="inscription.php?referer=<?php echo $referer ?>">Inscrivez vous ici</a>
        </div>

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
