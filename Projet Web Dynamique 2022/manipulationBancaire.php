<?php 
session_start(); 
$database = "omnes_sante";
$type="patient";
//On s'y connecte
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
$sql="SELECT * FROM `patient`";
$result = mysqli_query($db_handle, $sql);
while($data = mysqli_fetch_assoc($result)){
  if ($data['Nom']==$_SESSION['login']){
    if ($data['E-mail']==$_SESSION['email']) {
      $_SESSION['ID_Patient']=$data['ID_Patient'];
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vos infos Bancaires</title>
	<style type="text/css">

    #header {
      background-color: white;
        color: blue;
        text-align: center;
        padding: 0px;
    }

    #nav {
      background-color: white;
      color: black;
      text-align: center;
      padding: 0px;
    }

    #section {
      
      background-color: white;
      color: black;
      clear: both;
      text-align: center;
      font-weight: bold;
      padding: 0px;
    }

    #footer {
      position: absolute;
      width: 100%;
      background-color: white;
      color: black;
      clear: both;
      text-align: center;
      padding: 0px;
      bottom: 0px;
    }

    .bouton{
      background-color:#00BFFF;
      border: solid;
      color: black;
      padding: 10px;
      margin: 10px;
      text-align: center;
      display: inline-block;
      font-size: 20px;
      cursor: pointer;
    }
    .bouton:hover {
      background-color: #4169E1;
      color: white;
    }
    .retour{
      background-color:#FF337A;
      border: solid;
      color: navajowhite;
      padding: 2px;
      margin: 2px;
      text-align: center;
      display: inline-block;
      font-size: 18px;
      cursor: pointer;
      position:relative; 
          display:inline-block; 
      float: right;
      width: 70px;
      height: 20px;
    }
    h1{
      text-align:center;
    }
    #formulaire{
    	float: center;
    	margin-left:42%;
    	margin-right:42%;
    }
    fieldset{
    margin:auto;
    display: inline-block;
    text-align:center;
	}
	legend {
    background-color: blue;
    color: white;
    
	}
 </style>
</head>
<body>
	<div id="header"> 
    	<h1>Omnes Santé<img src="logo.png" height="70px" ></h1>
  	</div>
  	<h1>Rentrez/modifiez vos informations bancaires:</h1>
  	<div id="formulaire">
  		<form action="infosBancaires.php" method="post">
  			<fieldset>
  				<legend>Informations Bancaires:</legend>
  				<label >Type de carte</label><br/>
  				<select id="type_carte" name="type_carte" required><br>
  					<option value="Visa" selected>Visa</option>
  					<option value="MasterCard">MasterCard</option>
  					<option value="American Express">American Express</option>
  					<option value="PayPal">PayPal</option>
  				</select><br>
  				<label >N° Bancaire</label><br/>
  				<input type="number" id="numero_carte" name="numero_carte" required><br>
  				<label >Nom sur la carte</label><br/>
  				<input type="text" id="nom_carte" name="nom_carte"required><br>
  				<label >Date d'expiration</label><br/>
  				<input type="text" id="date_carte" name="date_carte"required><br>
  				<label >Code Secret</label><br/>
  				<input type="number" id="code_carte" name="code_carte"required><br>
  				<input type="submit" id="submit" value="Valider">
  			</fieldset>
  		</form>
  	</div>
  	<div id="footer">
    <footer>
    <small>
      <hr>
        <pre>Mail:<a href="mailto:hugo.dermatheossian@omnes_sante.fr">hugo.dermatheossian@edu.ece.fr</a>   Téléphone: <em>(+33)1 44 39 06 00</em>       Adresse:37, Quai de Grenelle,75015 Paris<a href="patient.php" type="button" class="retour">RETOUR</a></pre>
      </hr>
    </small>
  </footer>
  </div>
</body>
</html>