<?php

session_start();
//session_destroy();

if (isset($_SESSION['id'])) {
    $menu = "<li> " . $_SESSION['login'] . " </li>";
} else {
    $menu = "<li class=\"nav-item dropdown col-lg-4\" style=\"text-align: right\">
                <a href=\"login.php\">Connexion</a>
            </li>
            <li>|</li>
            <li class=\"nav-item dropdown col-lg-4\">
                <a href=\"inscription.php\">Inscription</a>
            </li>";
}


?>

<nav class="navbar navbar-toggleable-md navbar-light container">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="col-lg-6 col-md-9"><a class="navbar-brand" href="index.php"><img src="img/logo.svg"></a></div>

    <div class="collapse navbar-collapse col-lg-6 row justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav col-lg-12 justify-content-end">
            <?php echo $menu?>
        </ul>
    </div>
</nav>