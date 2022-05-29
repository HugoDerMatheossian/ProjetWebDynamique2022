<?php
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['type'])||($_SESSION['type'])!="medecin") 
{
  // Si inexistante ou nulle, ->connexion
  echo '<meta http-equiv="refresh" content="0;URL=PageLoginMedecin.html">';
  exit();
}

//On identifie la base de donnees 
$database = "omnes_sante";
$id=$_SESSION['Id'];

//On s'y connecte
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php  echo "Dr ".$_SESSION['prenom']." ".$_SESSION['login']; ?></title>
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
			position: fixed;
bottom:0;
text-align: center;
width:100%;

padding-top:50px;

height:50px;
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
    border-radius: 15px;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
		}
		.bouton:hover {
			background-color: #4169E1;
			color: white;
		}
		h1{
			text-align:center;
		}
		#infos-droite{
			text-align:center;
		}
        .boite1 {
    text-align: center;
    background-color:lightblue;
    display: flex;
    border-radius: 15px;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
    width: 25%;
    margin-left: 5%;
    height: 40%;
    float:left;
}
.boite {
    text-align: center;
    background-color:lavender;
    display: flex;
    
    margin: auto;
}
.boite2 {
    text-align: center;
    background-color:lightblue;
    display: flex;
    border-radius: 15px;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
    width: 25%;
    margin-left: 5%;

    height: 40%;
    float:left;
}
.boite3 {
    text-align: center;
    background-color:lightblue;
    display: flex;
    border-radius: 15px;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
    width: 25%;
    margin-left: 5%;
    height: 40%;
    float:left;
}
.boite4 {
    text-align: center;
    background-color:lightblue;
    display: flex;
    border-radius: 15px;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
    width: 25%;
    margin-top: 10%;
    margin-left: 5%;
    height: 40%;
    float:left;
}
.boite5 {
    text-align: center;
    background-color:lightblue;
    display: flex;
    border-radius: 15px;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
    width: 25%;
    margin-left: 5%;
    margin-top: 10%;
    height: 40%;
    float:left;
}
.boite6 {
    text-align: center;
    background-color:lightblue;
    display: flex;
    border-radius: 15px;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
    width: 25%;
    margin-top: 10%;
    margin-left: 5%;
    height: 40%;
    float:left;
}
.boite7 {
    text-align: center;
    background-color:lightblue;
    display: flex;
    border-radius: 15px;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
    width: 30%;
    margin-top: 10%;
    margin-left: 32%;
    height: 40%;
    float:left;
}
#h1 {
    text-align: center;
        }
        table {
            border-collapse: collapse;

        }

        td {
            border: 1px solid black;
        }

 </style>
</head>
<body>
	<div id="header"> 
		<h1>Omnes Santé<img src="logo.png" height="40px" ></h1>
	</div>
	<div id="infos">
		<hr>
		<div class="boite1">
            <h1 >Lundi :</h1>
            <div class="boite">
                <table>
                <tr>
                    <td>Nom du Patient</td>
                    <td> Horaire</td>
                </tr>
                <tr>
                <?php 
                $sql="SELECT * FROM rdv_medecin WHERE ID_Medecin= $id AND Jour='Lundi'";
                $res = mysqli_query($db_handle,$sql);
                //$data = mysqli_fetch_assoc($res);
                while($data = mysqli_fetch_assoc($res)){
                ?>
                <td><?php
                    echo $data["ID_Patient"];?></td>
                    <td><?php
                    $data["Heure"];?></td>
                    <?php
                  }
                ?>
                </tr>
                </table>
                
            </div>
        </div>
        <div class="boite2">
        <h1>Mardi :</h1>
        <div class="boite">
            <table>
                <tr>
                    <td>Nom du Patient</td>
                    <td> Horaire</td>
                </tr>
                <tr>
                <?php 
                $sql="SELECT * FROM rdv_medecin WHERE ID_Medecin= $id AND Jour='Mardi'";
                $res = mysqli_query($db_handle,$sql);
                //$data = mysqli_fetch_assoc($res);
                while($data = mysqli_fetch_assoc($res)){
                ?>
                <td><?php
                    echo $data["ID_Patient"];?></td>
                    <td><?php
                    $data["Heure"];?></td>
                    <?php
                  }
                ?>
                </tr>
                </table>   
            </div>
        </div>
        <div class="boite3">
            <h1>Mercredi :</h1>
            <div class="boite">
                <table>
                <tr>
                    <td>Nom du Patient</td>
                    <td> Horaire</td>
                </tr>
                <tr>
                <?php 
                $sql="SELECT * FROM rdv_medecin WHERE ID_Medecin= $id AND Jour='Mercredi'";
                $res = mysqli_query($db_handle,$sql);
                //$data = mysqli_fetch_assoc($res);
                while($data = mysqli_fetch_assoc($res)){
                ?>
                <td><?php
                    echo $data["ID_Patient"];?></td>
                    <td><?php
                    $data["Heure"];?></td>
                    <?php
                  }
                ?>
                </tr>
                </table>
            </div>
        </div>
        <div class="boite4" >
        <h1>Jeudi :</h1>
        <div class="boite">
            <table>
                <tr>
                    <td>Nom du Patient</td>
                    <td> Horaire</td>
                </tr>
                <tr>
                <?php 
                $sql="SELECT * FROM rdv_medecin WHERE ID_Medecin= $id AND Jour='Jeudi'";
                $res = mysqli_query($db_handle,$sql);
                //$data = mysqli_fetch_assoc($res);
                while($data = mysqli_fetch_assoc($res)){
                ?>
                <td><?php
                    echo $data["ID_Patient"];?></td>
                    <td><?php
                    $data["Heure"];?></td>
                    <?php
                  }
                ?>
                </tr>
            </table>  
            </div>
        </div>
        <div class="boite5" >
        <h1>Vendredi :</h1>
        <div class="boite">
            <table>
                <tr>
                    <td>Nom du Patient</td>
                    <td> Horaire</td>
                </tr>
                <tr>
                <?php 
                $sql="SELECT * FROM rdv_medecin WHERE ID_Medecin= $id AND Jour='Vendredi'";
                $res = mysqli_query($db_handle,$sql);
                //$data = mysqli_fetch_assoc($res);
                while($data = mysqli_fetch_assoc($res)){
                ?>
                <td><?php
                    echo $data["ID_Patient"];?></td>
                    <td><?php
                    $data["Heure"];?></td>
                    <?php
                  }
                ?>
                </tr>
            </table>  
            </div>
        </div>
        <div class="boite6">
        <h1>Samedi :</h1>
        <div class="boite">
            <table>
                <tr>
                    <td>Nom du Patient</td>
                    <td> Horaire</td>
                </tr>
                <tr>
                <?php 
                $sql="SELECT * FROM rdv_medecin WHERE ID_Medecin= $id AND Jour='Samedi'";
                $res = mysqli_query($db_handle,$sql);
                //$data = mysqli_fetch_assoc($res);
                while($data = mysqli_fetch_assoc($res)){
                ?>
                <td><?php
                    echo $data["ID_Patient"];?></td>
                    <td><?php
                    $data["Heure"];?></td>
                    <?php
                  }
                ?>
                </tr>
                </table>   
            </div>
        </div>
        <div class="boite7" >
        <h1>Dimanche :</h1>
        <div class="boite">
            <table>
                <tr>
                    <td>Nom du Patient</td>
                    <td> Horaire</td>
                </tr>
                <tr>
                <?php 
                $sql="SELECT * FROM rdv_medecin WHERE ID_Medecin= $id AND Jour='Dimanche'";
                $res = mysqli_query($db_handle,$sql);
                //$data = mysqli_fetch_assoc($res);
                while($data = mysqli_fetch_assoc($res)){
                ?>
                <td><?php
                    echo $data["ID_Patient"];?></td>
                    <td><?php
                    $data["Heure"];?></td>
                    <?php
                  }
                ?>
                </tr>
            </table>   
            </div>
        </div>
	  </hr>
	</div>
	<div id="footer">
		<footer>
		<small>
			<hr>
				<pre>Mail:<a href="mailto:hugo.dermatheossian@omnes_sante.fr">hugo.dermatheossian@edu.ece.fr</a>   Téléphone: <em>(+33)1 44 39 06 00</em>       Adresse:37, Quai de Grenelle,75015 Paris</pre>
			</hr>
		</small>
	</footer>
	</div>
</body>
</html>