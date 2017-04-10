<?php

	session_start();

	require_once '../data/pdogsbrapports.php';
	$mdp = $_REQUEST['mdp'];
	$login = $_REQUEST['login'];
	$pdo = PdoGsbRapports::getPdo();
	$visiteur = $pdo->getLeVisiteur($login,$mdp);
	if($visiteur != NULL){
		$_SESSION['visiteur'] = $visiteur;
		$_SESSION['visiteur']['mdp'] = $mdp;
		$_SESSION['visiteur']['login'] = $login;
	}
	echo json_encode($visiteur);





















/*


	$mdp = $_REQUEST['mdp'];
	$login = $_REQUEST['login'];
	$data = null;
	$visiteur = array('id'=>"hugo",'nom'=>"Hugo",'login'=>"hugo",'mdp'=>"lol");

	if($visiteur['login'] == $login && $visiteur['mdp'] == $mdp){
		$data = $visiteur;
	}
	
	echo json_encode($data);
*/

/*
  session_start();
  require_once '../data/pdogsbrapports.php';
  $mdp = $_REQUEST ['mdp'];
  $login = $_REQUEST ['login'];
  $pdo = PdoGsbRapports::getPdo();
  $visiteur = $pdo->getLevisiteur($login,$mdp);
  if ($visiteur!= null) {
    $_SESSION['visiteur'] = $visiteur;
    $_SESSION['visiteur'] ['mdp'] = $mdp;
    $_SESSION['visiteur']['login'] = $login;
  }
  echo json_encode($visiteur);
 ?>
 
 */
