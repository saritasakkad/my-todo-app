<?php


// voire river amendi a envoyer le insérer ici 



include 'connexion.php';
// Notre requete à la base de donnée
// SELECT = prend moi; * = tout ;FROM = de quel tableau ? film = mettreLeNomDeVotreTable

if( isset( $_POST['getAllTask'] ) ){
  $query = "SELECT * FROM task";
  $query = $bdd->query($query);
  $query->execute();
  $reponse = $query->fetchAll();
  // var_dump($reponse);
  echo json_encode($reponse);
}

if( isset( $_POST['getTask'] ) ){
  $id = $_POST['getTask'];

  $query = "SELECT * FROM task WHERE task_id = :id";
  $query = $bdd->prepare($query);
  $query->bindParam(':id', $id, PDO::PARAM_INT);
  $query->execute();
  $reponse = $query->fetch();
  // var_dump($reponse);
  echo json_encode($reponse);
}

?>

<form method="post">
  <input type="submit" name="getTask" value="1">
</form>
