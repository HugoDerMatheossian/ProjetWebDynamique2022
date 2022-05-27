<?php

	$login = isset($_POST["nom"])? $_POST["nom"] : "";
	$pass = isset($_POST["mdp"])? $_POST["mdp"] : "";

	//On identifie la base de donnees 
	$database = "omnes_sante";
	$type="admin";

	//On s'y connecte
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	$sql = "SELECT * FROM `admin`";
	$result = mysqli_query($db_handle, $sql);
	
	$arraylogin = array();
	$arraypass = array();
	$compteur = 0;

	while($data = mysqli_fetch_assoc($result))
	{
		$arraylogin[$compteur] = $data['Nom'];
		$arraypass[$compteur] = $data['Mdp'];
		$compteur = $compteur + 1;
	}

	//Verifier si $login est dans le tableau des utilisateurs
	$found = false;
	for($i = 0; $i < sizeof($arraylogin); $i++)
	{
		if ($arraylogin[$i] == $login) 
		{
			$found = true;
			$index = $i;
			break;
		}
	}

	//Si l'utilisateur est valide, vérifier son mot de passe
	$connexion = false;
	if ($found) 
	{
			if ($arraypass[$index] == $pass) 
			{
				$connexion = true;
			} 
	}
	//Message
	if (!$found) 
	{
		echo "Connexion refusée. Utilisateur inconnu.";
		echo '<meta http-equiv="refresh" content="5;URL=PageLoginAdmin.html">';
		echo "<br>";
		echo '<img src="mad.png" width="400px">';
		echo "<br>";
		echo "Retour à la page de connexion dans 5 secondes";
	}
	else 
	{
		if ($connexion) 
		{
			echo "Connexion reussi !";
			//On demarre une session
			session_start();

			$_SESSION['login'] = $_POST['nom'];
			$_SESSION['pass'] = $_POST['mdp'];
			$_SESSION['type'] = $type;
			$sql = "SELECT Prenom FROM `admin` WHERE Nom LIKE '%$login' AND Mdp LIKE '%$pass'";
			$result = mysqli_query($db_handle, $sql);
			$data = mysqli_fetch_assoc($result);
			$_SESSION['prenom'] = $data['Prenom'];
			$sql = "SELECT ID_Admin FROM `admin` WHERE Nom LIKE '%$login' AND Mdp LIKE '%$pass'";
			$result = mysqli_query($db_handle, $sql);
			$data = mysqli_fetch_assoc($result);
			$_SESSION['Id'] = $data['ID_Admin'];

			//Lien vers la page suivante
			//ici on met accueil, mais on changera pour des pages méta
			echo '<meta http-equiv="refresh" content="5;URL=Admin.php">';
			echo "<br>";
			echo '<img src="happy.png" width="400px">';
			echo "<br>";
			echo "Redirection vers votre page dans 5 secondes...";
		} 
		else 
		{
			echo "Connexion refusée. Mot de passe invalide.";
			echo '<meta http-equiv="refresh" content="5;URL=PageLoginAdmin.html">';
			echo "<br>";
			echo '<img src="mad.png" width="400px">';
			echo "<br>";
			echo "Retour à la page de connexion dans 5 secondes";
		}
	}
?>