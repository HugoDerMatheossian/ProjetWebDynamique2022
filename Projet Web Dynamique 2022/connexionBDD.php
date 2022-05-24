<?php 
try {
    $pdo=new PDO("mysql:host=localhost;dbname=omnes_sante","root","");
}
catch(PDOExeption $e){
    echo $e->getMessage();
}

?>