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
                $id= $tab[$i]['ID_Medecin']; 
                echo '<h1>Dr <a href="medecininfo.php?id='.$id.'">' .$tab[$i]["Nom"].' '.$tab[$i]["Prenom"].' </h1></a>';
                ?></li>

                <?php } ?>
            </ol>
        </div>

        <?php } ?>

    </body>
</html>