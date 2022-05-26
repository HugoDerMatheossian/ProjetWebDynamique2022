<?php  
$database="omnes_sante";

// on se connecte ensuite
$db_handle=mysqli_connect("localhost","root","");
$db_found = mysqli_select_db($db_handle,$database);
if ($db_found){

    echo $_GET['id']; 
    echo $_GET['jour']; 
    echo $_GET['heure']; 

  $id=$_GET['id'];
  $jour=$_GET['jour']; 
  $heure=$_GET['heure'];

  $sql = "INSERT INTO rdv_medecin(ID_Patient,ID_Medecin,Jour,Heure) VALUES ('1','" . $id ."','" . $jour ."','" .$heure . "');";
    $res = mysqli_query($db_handle,$sql);
}

// si existe pas 
else {
    echo"Database not found";
}

// on ferme la connection
mysqli_close($db_handle);
?>

