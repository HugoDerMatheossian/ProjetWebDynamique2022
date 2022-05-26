<?php  
$database="omnes_sante";

// on se connecte ensuite
$db_handle=mysqli_connect("localhost","root","");
$db_found = mysqli_select_db($db_handle,$database);
if ($db_found){

    $id=$_GET['id']; 
    $jour=$_GET['jour']; 
    $heure=$_GET['heure']; 

    $sql ="INSERT into rdv_medecin (ID_Patient,ID_Medecin,Jour,Heure) values (1,$id,$jour,$heure)";
    $res = mysqli_query($db_handle,$sql);
}

// si existe pas 
else {
    echo"Database not found";
}

// on ferme la connection
mysqli_close($db_handle);
?>
<?php  
$database="omnes_sante";

// on se connecte ensuite
$db_handle=mysqli_connect("localhost","root","");
$db_found = mysqli_select_db($db_handle,$database);
if ($db_found){

    $id=$_GET['id']; 
    $jour=$_GET['jour']; 
    $heure=$_GET['heure']; 

    $sql ="SELECT * FROM rdv_medecin WHERE ID_RDV_Medecin=1";
    $res = mysqli_query($db_handle,$sql);

    $data = mysqli_fetch_assoc($res);
    
    echo "Médecin : ".$data["ID_Medecin"]."<br>";
    echo "Jour : ".$data["Jour"]."<br>";
    echo "Heure : ".$data["Heure"]."<br>";


}

// si existe pas 
else {
    echo"Database not found";
}

// on ferme la connection
mysqli_close($db_handle);
?>
