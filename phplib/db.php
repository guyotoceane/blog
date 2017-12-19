<?php
try {
// Connexion à MongoDB
    $conn = new Mongo('localhost');
// Connexion à la base de données "test"
    $db = $conn->og_blog;
} catch
(MongoConnectionException $e) {
    echo $e->getMessage(); die;
}