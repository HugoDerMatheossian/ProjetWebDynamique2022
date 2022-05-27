<?php

	$login = isset($_POST["nom"])? $_POST["nom"] : "";
	$mail = isset($_POST["email"])? $_POST["email"] : "";

	//On identifie la base de donnees 
	$database = "omnes_sante";
	$type="medecin";

	//On s'y connecte
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	$sql = "SELECT * FROM `medecin`";
	$result = mysqli_query($db_handle, $sql);
	
	$arraylogin = array();
	$arraymail = array();
	$compteur = 0;

	while($data = mysqli_fetch_assoc($result))
	{
		$arraylogin[$compteur] = $data['Nom'];
		$arraymail[$compteur] = $data['E-mail'];
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

	//Si l'utilisateur est valide, vérifier son mail
	$connexion = false;
	if ($found) 
	{
			if ($arraymail[$index] == $mail) 
			{
				$connexion = true;
			} 
	}
	//Message
	if (!$found) 
	{
		echo "Connexion refusée. Utilisateur inconnu.";
		echo '<meta http-equiv="refresh" content="5;URL=PageLoginMedecin.html">';
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

			
			$sql = "SELECT * FROM `medecin`";
			$result = mysqli_query($db_handle, $sql);
			while($data = mysqli_fetch_assoc($result)){
				if($data['Nom']==$_POST['nom']){
					if ($data['E-mail']==$_POST['email']) {
						$_SESSION['prenom']= $data['Prenom'];
						$_SESSION['login'] = $_POST['nom'];
						$_SESSION['email'] = $_POST['email'];
						$_SESSION['type'] = $type;
						$_SESSION['specialite'] = $data['Specialite'];
						$_SESSION['salle'] = $data['Salle'];
						$_SESSION['tel'] = $data['Tel'];
						$_SESSION['Id'] = $data['ID_Medecin'];
						$_SESSION['photo'] = $data['PDP'];
					}
				}
			}

			//Lien vers la page suivante

			echo '<meta http-equiv="refresh" content="5;URL=Med.php">';
			echo "<br>";
			echo '<img src="happy.png" width="400px">';
			echo "<br>";
			echo "Redirection vers votre page dans 5 secondes...";
		} 
		else 
		{
			echo "Connexion refusée. Mot de passe invalide.";
			echo '<meta http-equiv="refresh" content="5;URL=PageLoginMedecin.html">';
			echo "<br>";
			echo '<img src="mad.png" width="400px">';
			echo "<br>";
			echo "Retour à la page de connexion dans 5 secondes";
		}
	}
?>