<?php
/*$database="omnes_sante";
$db_handle=mysqli_connect("localhost","root","");
$db_found = mysqli_select_db($db_handle,$database);*/

// on fait un traitement de la base de donnée si elle existe
//if ($db_found){
    //Select * from rdv_medecin as rdvm, rdv_labo as rdvl where rdvm.id_patient=rdvl.id_patient and rdvl.id_patient=1; 

    @$keywords=$_GET["keywords"];
    @$valider=$_GET["valider"];
    if (isset($valider) && !empty(trim($keywords))){
       include ("connexionBDD.php"); 
    $res=$pdo->prepare("SELECT * FROM medecin  WHERE Specialite LIKE '%$keywords%' OR Nom LIKE '%$keywords%'");
$res->setFetchMode(PDO::FETCH_ASSOC);
$res->execute();
$tab = $res->fetchAll();
    //$res = mysqli_query($db_handle,$sql);
    $afficher="oui";

    

    /*while ($data = mysqli_fetch_assoc($res)) {

       echo " Dr ". $data['Nom']."<br>";
           }
    }*/

}

// si existe pas 
/*else {
    echo"Database not found";
}


mysqli_close($db_handle);*/
 
?>

<!DOCTYPE html>
<html>
    <head>
<title> Barre de recherche</title>
<meta charest="utf-8"/>
<link rel="stylesheet" href="css/barrederecherche.css?t=<?php echo time()?>"/>
<meta name="viewport" content="width=device-width"/>
    </head>
    <body>
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
                echo "Dr ".$tab[$i]["Nom"]." ".$tab[$i]["Prenom"];
                ?></li>

                <?php } ?>
            </ol>
        </div>

        <?php } ?>

    </body>
</html>