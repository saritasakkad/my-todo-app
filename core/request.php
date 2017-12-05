<?php
include 'connexion.php';

//



//ajouter a la bdd debut
if (!empty($_POST)&&isset($_POST['addTask'])) {
	debug($_POST);
	addTask();
}


function addTask(){
	global $bdd;
	try {
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$query = "INSERT INTO task (`task_title`, `task_desc`) VALUES (:task_title, :task_description)";
		$reponse = $bdd->prepare($query);

		$reponse->bindParam(':task_title',$_POST['task_title'],PDO::PARAM_STR);
		$reponse->bindParam(':task_description',$_POST['task_description'],PDO::PARAM_STR);
		// $reponse->bindParam(':task_start',$_POST['task_start'],PDO::PARAM_STR);
		// $reponse->bindParam(':task_end',$_POST['task_end'],PDO::PARAM_STR);
		echo "test";

		$reponse->execute();
		header('Location: ../index.php');//permet de raffrechier
	} catch (Exception $e) {
		echo "ERREUR: ";
		debug($e->getMessage());
	};
}
//ajouter a la bdd fin

//Delete a la bdd debut

if (!empty($_POST)&&isset($_POST['delete'])) {
	deleteTask($_POST['delete']);
}

function delete($id){

	$query = "DELETE FROM task WHERE id = :id limit 1";

	$reponse = $bdd->prepare($query);
	$reponse->bindParam(':id',$id,PDO::PARAM_INT);

	$reponse->execute();

	// if ($reponse->execute()) {
	// 	header('Location: ../index.php');
	// } else {
	// 	echo "OOOPS!";
	// }
}
//Delete a la bdd fin

if( isset( $_POST['getAllTask'] ) ){
  $query = "SELECT * FROM task";
  $query = $bdd->query($query);
  $query->execute();
  $reponse = $query->fetchAll(PDO::FETCH_ASSOC);
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

//afiiche dans la première page ce qu'on a ajouter dans la bdd

$query=$bdd->prepare('SELECT * FROM task');
$query->execute();
$taches = $query->fetchAll(PDO::FETCH_ASSOC);
// fin d'afiichache dans la première page ce qu'on a ajouter dans la bdd
