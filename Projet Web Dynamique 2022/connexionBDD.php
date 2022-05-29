<?php 
try {
    $pdo=new PDO("mysql:host=localhost;dbname=omnes_sante","root","");
}
catch(PDOException $e){
    echo $e->getMessage();
}

?>