<? include "phplib/db.php";

if(isset($_GET['referer'])){
    $referer = $_GET['referer'];

} else {
    $referer = $_SERVER['HTTP_REFERER'];
}

?>

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
    <h1>Inscription</h1>
    <form method="post" action="phplib/newUser.php">
        <input type="text" name="name" placeholder="Nom"><br>
        <input type="text" name="lastname" placeholder="Pr&eacute;nom"><br>
        <input type="text" name="email" placeholder="Email"> <br>
        <input type="password" name="mdp" placeholder="Mot de passe"><br>
        <input type="hidden" name="hist" value="<?php echo $referer ?>">
        <input type="submit" value="Inscription">
    </form>

</div>
</body>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
