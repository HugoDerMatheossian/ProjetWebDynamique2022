<?php

    @$keywords=$_GET["keywords"];
    @$valider=$_GET["valider"];
    if (isset($valider) && !empty(trim($keywords))){
       include ("connexionBDD.php"); 
    $res=$pdo->prepare("SELECT * FROM medecin  WHERE Specialite LIKE '%$keywords%' OR Nom LIKE '%$keywords%'");
$res->setFetchMode(PDO::FETCH_ASSOC);
$res->execute();
$tab = $res->fetchAll();
    $afficher="oui";

}
 
?>

<!DOCTYPE html>
<html>
    <head>
<title> Barre de recherche</title>
<meta charest="utf-8"/>
<link rel="stylesheet" href="css/barrederecherche.css?t=<?php echo time()?>"/>
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

    </style>
<meta name="viewport" content="width=device-width"/>
    </head>
    <body>
    <div id="header"> 
        <h1>Omnes Santé<img src="logo.png" height="70px" ></h1>
    </div>
    <div id="nav">
		<hr>
			<table>
				<br>
				<a href="Accueil.html" class="bouton" style="width: 250px">Accueil</a>
				<a href="toutparcourir.html" class="bouton" style="width: 250px">Tout Parcourir</a>
				<a href="recherche.php" class="bouton" style="width: 250px">Recherche</a>
				<a href="rdv.html" class="bouton" style="width: 250px">Rendez-vous</a>
				<a href="patient.php" class="bouton" style="width: 250px">Votre Compte</a>
			</table>
		</hr>
	</div>
        <form name ="fo" method="get" action="">
            <input type="text" name="keywords" value="<?php echo $keywords?>" placeholder="Mots-clés" />
            <input type="submit" name="valider" placeholder="Rechercher" />
            
        </form>
        <?php if (@$afficher=="oui") { ?>
        <div id="resultats">
            <div id="nbr"><?=count($tab)." ".(count($tab)>1?"résultats trouvés":"résultat trouvé") ?></div>
            <ol>
                <?php for ($i=0;$i<count($tab);$i++){ ?>

                <li><?php 
                $id= $tab[$i]['ID_Medecin']; 
                echo '<h1>Dr <a href="medecininfo.php?id='.$id.'">' .$tab[$i]["Nom"].' '.$tab[$i]["Prenom"].' </h1></a>';
                ?></li>

                <?php } ?>
            </ol>
        </div><?php } ?>
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