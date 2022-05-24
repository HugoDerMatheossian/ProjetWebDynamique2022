<?php  
$database="omnes_sante";

// on se connecte ensuite
$db_handle=mysqli_connect("localhost","root","");
$db_found = mysqli_select_db($db_handle,$database);

// on fait un traitement de la base de donnée si elle existe
if ($db_found){
  /*  $sql = "SELECT * FROM membre";
    $result = mysqli_query($db_handle,$sql);
    while ($data = mysli_fetch_assoc($result))
    {
        echo "ID :". $data['ID'].'<br>';
        echo "Nom :". $data['Nom'].'<br>';
        echo "Prénom :". $data['Prenom'].'<br>';
        echo "Statut :". $data['Statut'].'<br>';
        echo "Date de naissance :". $data['Date de naissance'].'<br>';
    } */
    $id=$_GET['id']; 
       echo '<h2>Adresse: ' . $id . ' </h2>';
    $sql ="SELECT * FROM medecin  WHERE ID_Medecin=$id ";
    $res = mysqli_query($db_handle,$sql);

    $data = mysqli_fetch_assoc($res);
   // echo "ID :". $data['PDP'];
    echo('<img src="' . $data["PDP"] . '">');
}

// si existe pas 
else {
    echo"Database not found";
}

// on ferme la connection
mysqli_close($db_handle);
?>