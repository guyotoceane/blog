<?php
include('db.php');
try {
    $img = $db->users;
    $identifiant = "function(){
        return this.mail == '".$_POST['email']."'
    }";
    $cursor = $img->find(array('$where'=>$identifiant));

    // Nbre de documents trouvés
    $num_docs = $cursor->count();
    if($num_docs==0){
        echo "identifiant incorrect";
    }
    else{
        $identifiant = "function(){
        return this.mdp == '".$_POST['mdp']."'
    }";
        $cursor = $img->find(array('$where'=>$identifiant));
        // Nbre de documents trouvés
        $num_docs = $cursor->count();
        if($num_docs==0){
            echo "mdp incorrect";
        }
        else{
            session_start();
            $_SESSION['login'] = $_POST['email'];
            $_SESSION['pwd'] = $_POST['mdp'];
            foreach ($cursor as $obj)
            {
                $_SESSION['id'] = (string) $obj["_id"];
            }
//            header('Location: ../index.php');

            header("Location:". $_POST['hist']);
            exit();

        }
    }
} catch (MongoException $e) {
    echo $e->getMessage();
}