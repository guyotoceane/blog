
/** messages indexes **/
db.getCollection("messages").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** users indexes **/
db.getCollection("users").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** messages records **/
db.getCollection("messages").insert({
  "_id": ObjectId("5a301e096e05887c3e000029"),
  "subject": "Test ajout de reponse",
  "question": "<p>Ceci est une question</p>",
  "nb_post": NumberInt(2),
  "date_crea": ISODate("2017-12-12T18:20:57.0Z"),
  "date_modif": ISODate("2017-12-12T18:50:27.0Z"),
  "answers": [
    "<p>ceci est la premiere reponse</p>",
    "<p>Ceci est la deuxieme reponse</p>",
    "<p>Voici la 3eme reponse</p>",
    "<p>Test compteur de reponse</p>"
  ]
});
db.getCollection("messages").insert({
  "_id": ObjectId("5a3023cb6e05887c3e00002a"),
  "subject": "Probleme PHP",
  "question": "<p>Bonjour,</p>\r\n<p>Je n'arrive pas a creer un fichier php avez vous une solution ??</p>",
  "nb_post": NumberInt(1),
  "date_crea": ISODate("2017-12-12T18:45:31.0Z"),
  "date_modif": ISODate("2017-12-12T18:45:59.0Z"),
  "answers": [
    "<p>Avez vous bien un <strong>serveur local</strong> sur vtre machine ?</p>"
  ]
});
db.getCollection("messages").insert({
  "_id": ObjectId("5a3045616e05888c2d00002a"),
  "subject": null,
  "question": null,
  "nb_post": NumberInt(1),
  "date_crea": ISODate("2017-12-12T21:08:49.0Z"),
  "date_modif": ISODate("2017-12-12T21:08:49.0Z"),
  "answers": [
    
  ]
});
db.getCollection("messages").insert({
  "_id": ObjectId("5a3045746e05887c3e00002c"),
  "subject": null,
  "question": null,
  "nb_post": NumberInt(1),
  "date_crea": ISODate("2017-12-12T21:09:08.0Z"),
  "date_modif": ISODate("2017-12-12T21:09:08.0Z"),
  "answers": [
    
  ]
});

/** users records **/
db.getCollection("users").insert({
  "_id": ObjectId("5a3044e26e05885c21000029"),
  "nom": "Guyot",
  "prenom": "Oceane",
  "mail": "guyot.oceane1@gmail.com",
  "mdp": "upmc2018"
});
