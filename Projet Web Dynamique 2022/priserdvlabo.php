<!---Idée pour l'arrangement des créneaux ainsi que la prise de réservation donner par ALEXIS AUBLET TD3-->

<?php
    session_start();


?>


<html>

<head>

    <style type="text/css">
        table {
            border-collapse: collapse;

        }

        td {
            border: 1px solid black;
        }

        #tableau {
            background-color: antiquewhite;
            text-align: center;
            width: 50%;
            height: 50%;
            border-radius: 15px;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            -ms-border-radius: 15px;
            -o-border-radius: 15px;

        }

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


        #footer {
            bottom:0;
text-align: center;
width:100%;

padding-top:50px;

height:50px;
        }

        .bouton {
            background-color: #00BFFF;
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
            text-align: center;
        }

        #boite {
            text-align: center;
            background-color: lightblue;
            display: flex;
            border-radius: 15px;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            -ms-border-radius: 15px;
            -o-border-radius: 15px;
            width: 60%;
            height: 60%;
            margin-left: auto;
            margin-right: auto;
        }

        #emploi {
            text-align: center;
            background-color: whitesmoke;
            margin-top: auto;
            margin-bottom: auto;
            display: flex;
            margin-left: auto;
            margin-right: auto;
        }

        #table {
            text-align: center;
        }
    </style>
</head>

<body>
<?php

$database = "omnes_sante";
$db_handle = mysqli_connect('localhost', 'root', '' );
$db_found = mysqli_select_db($db_handle, $database);
if ($db_found) {
  $sql = "SELECT * FROM rdv_labo" ;
  $result = mysqli_query($db_handle, $sql);
  while ($data = mysqli_fetch_assoc($result)) { 

    if (mysqli_num_rows($result) == 0) {
    }
      else {
        switch($data['Jour']){
            case 'Lundi ':
                switch($data['Heure']){
                    case '9h':
                        ?>  <style type="text/css">
                         .L9h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '10h':
                        ?>  <style type="text/css">
                         .L10h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '11h':
                        ?>  <style type="text/css">
                         .L11h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '12h':
                        ?>  <style type="text/css">
                         .L12h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '13h':
                        ?> <style type="text/css">
                        .L13h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;
                    case '14h':
                        ?> <style type="text/css">
                        .L14h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;
                    case '15h':
                        ?> <style type="text/css">
                        .L15h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;
                    case '16h':
                        ?> <style type="text/css">
                        .L16h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;
                    case '17h':
                        ?> <style type="text/css">
                        .L17h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;
                    case '18h':
                        ?> <style type="text/css">
                        .L18h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;            
                    }
                break;
            case 'Samedi ':
                switch($data['Heure']){
                    case '9h':
                        ?>  <style type="text/css">
                         .S9h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '10h':
                        ?>  <style type="text/css">
                         .S10h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '11h':
                        ?>  <style type="text/css">
                         .S11h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '12h':
                        ?>  <style type="text/css">
                         .S12h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '13h':
                        ?> <style type="text/css">
                        .S13h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;
                    case '14h':
                        ?> <style type="text/css">
                        .S14h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                    break;
                    case '15h':
                        ?> <style type="text/css">
                        .S15h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;
                    case '16h':
                         ?> <style type="text/css">
                        .S16h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;
                    case '17h':
                        ?> <style type="text/css">
                        .S17h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;
                    case '18h':
                        ?> <style type="text/css">
                        .S18h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;            
                    }
                break;
            case 'Dimanche ':
                switch($data['Heure']){
                    case '9h':
                        ?>  <style type="text/css">
                         .D9h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '10h':
                        ?>  <style type="text/css">
                         .D10h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '11h':
                        ?>  <style type="text/css">
                         .D11h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '12h':
                        ?>  <style type="text/css">
                         .D12h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '13h':
                        ?> <style type="text/css">
                        .D13h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;
                    case '14h':
                        ?> <style type="text/css">
                        .D14h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;
                    case '15h':
                        ?> <style type="text/css">
                        .D15h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;
                    case '16h':
                        ?> <style type="text/css">
                        .D16h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;
                    case '17h':
                        ?> <style type="text/css">
                        .D17h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;
                    case '18h':
                        ?> <style type="text/css">
                        .D18h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;            
                    }
                break;
            case 'Mardi ':
                switch($data['Heure']){
                    case '9h':
                        ?>  <style type="text/css">
                         .M9h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '10h':
                        ?>  <style type="text/css">
                         .M10h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '11h':
                        ?>  <style type="text/css">
                         .M11h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '12h':
                        ?>  <style type="text/css">
                         .M12{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '14':
                        ?>  <style type="text/css">
                         .M14{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '15':
                        ?>  <style type="text/css">
                         .M15{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '16':
                        ?>  <style type="text/css">
                         .M16{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '17':
                        ?>  <style type="text/css">
                         .M17{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '18h':
                        ?> <style type="text/css">
                        .M18h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;
                    case '13h':
                        ?> <style type="text/css">
                        .M13h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;      
                    }
                break;  
            case 'Mercredi ':
                switch($data['Heure']){
                    case '9h':
                        ?>  <style type="text/css">
                         .M9h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '10h':
                        ?>  <style type="text/css">
                         .MM10h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '11h':
                        ?>  <style type="text/css">
                         .MM11h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '12h':
                        ?>  <style type="text/css">
                         .MM12h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '14h':
                        ?>  <style type="text/css">
                         .MM14h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '15h':
                        ?>  <style type="text/css">
                         .MM15h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '16h':
                        ?>  <style type="text/css">
                         .MM16h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '17h':
                        ?>  <style type="text/css">
                         .M17h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '18h':
                        ?> <style type="text/css">
                        .MM18h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break; 
                    case '13h':
                        ?> <style type="text/css">
                        .MM13h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;     
                    }
                break;
            case 'Jeudi ':
                switch($data['Heure']){
                    case '9h':
                        ?>  <style type="text/css">
                         .J9h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '10h':
                        ?>  <style type="text/css">
                         .J10h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '11h':
                        ?>  <style type="text/css">
                         .J11h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '12h':
                        ?>  <style type="text/css">
                         .J12h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '14h':
                        ?>  <style type="text/css">
                         .J14h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '15h':
                        ?>  <style type="text/css">
                         .J15h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '16h':
                        ?>  <style type="text/css">
                         .J16h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '17h':
                        ?>  <style type="text/css">
                         .J17h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '18h':
                        ?> <style type="text/css">
                        .L18h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;   
                    case '18h':
                        ?> <style type="text/css">
                        .L18h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;   
                    }
                break;
            case 'Vendredi ':
                switch($data['Heure']){
                    case '9h':
                        ?>  <style type="text/css">
                         .V9h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '10h':
                        ?>  <style type="text/css">
                         .V10h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '11h':
                        ?>  <style type="text/css">
                         .V11h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '12h':
                        ?>  <style type="text/css">
                         .V12h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '14h':
                        ?>  <style type="text/css">
                         .V14h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '15h':
                        ?>  <style type="text/css">
                         .V15h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '16h':
                        ?>  <style type="text/css">
                         .V16h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '17h':
                        ?>  <style type="text/css">
                         .V17h{
                            background: red;
                            pointer-events: none;
                        }
                        </style> <?php
                        break;
                    case '18h':
                        ?> <style type="text/css">
                        .L18h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break; 
                    case '18h':
                        ?> <style type="text/css">
                        .L18h{
                            background-color: red;
                            pointer-events: none;
                        }
                        </style><?php
                        break;     
                    }
                break;
        }
    
    }

  
  
  }//end while

}
else {
 echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);
?>


    <div id="header">
        <h1>Omnes Santé<img src="logo.png" height="40px"></h1>
    </div>

    <div id="nav">
        <hr>
        <table>
            <a href="Accueil.php" class="bouton" style="width: 160px">Accueil</a>
            <?php 
                    switch($_SESSION['type']){
                        case 'patient':
                            echo '<a href="toutparcourir.html" class="bouton" style="width: 160px">Tout Parcourir</a>';
                            break;
                        default :
                            echo '<a href="" class="bouton" style="width: 160px">Tout Parcourir</a>';
                            break;
                    }
                ?>
                <?php 
                    switch($_SESSION['type']){
                        case 'patient':
                            echo '<a href="recherche.php" class="bouton" style="width: 160px">Recherche</a>';
                            break;
                        default :
                            echo '<a href="" class="bouton" style="width: 160px">Recherche</a>';
                            break;
                    }
                ?>
                <?php 
                    switch($_SESSION['type']){
                        case 'patient':
                            echo '<a href="rdv.html" class="bouton" style="width: 160px">Rendez-vous</a>';
                            break;
                        case 'medecin':
                            echo '<a href="rdv.html" class="bouton" style="width: 160px">Rendez-vous</a>';
                            break;
                        default :
                            echo '<a href="" class="bouton" style="width: 160px">Rendez-vous</a>';
                            break;
                    }
                ?>
                <?php 
                switch($_SESSION['type']){
                    case "patient":
                        echo "<input type='button' class='bouton' style='width:160px' title='Votre Compte' value='Votre Compte' onclick=\"location.href='patient.php'\">";
                        break;
                    case "medecin":
                        echo '<a href="Med.php" class="bouton" style="width: 160px">Votre Compte</a>';
                        break;
                    case "admin":
                        echo '<a href="" class="bouton" style="width: 160px">Votre Compte</a>';
                        break;
                    default:
                        echo '<a href="choixTypeCompte.html" class="bouton" style="width: 160px">Connexion</a>';
                        break;
                    }   
                ?>
        </table>
                </hr>
    </div>
<hr>
<?php 
$database="omnes_sante";

// on se connecte ensuite
$db_handle=mysqli_connect("localhost","root","");
$db_found = mysqli_select_db($db_handle,$database);

// on fait un traitement de la base de donnée si elle existe
if ($db_found){ 
    $id = $_GET['id'];
    $sql ="SELECT * FROM services WHERE ID_Service = $id";
    $res = mysqli_query($db_handle,$sql);

    $data = mysqli_fetch_assoc($res);
  
}

// si existe pas 
else {
    echo"Database not found";
}

// on ferme la connection
mysqli_close($db_handle);
?>
<h1>Disponibilité du laboratoire</h1>
    <div class="Boite" id="boite">
        <div id="emploi">
           
            <table id="table">

                <tr>

                    <td>Lundi</td>
                    <td>Mardi</td>
                    <td>Mercredi</td>
                    <td>Jeudi</td>
                    <td>Vendredi</td>
                    <td>Samedi</td>
                    <td>Dimanche</td>
                </tr>
                <tr>
                    <td  class='L8h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Lundi &heure=8h">8h</a></td>
                    <td  class='M8h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Mardi &heure=8h">8h</a></td>
                    <td  class='MM8h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Mercredi &heure=8h">8h</a></td>
                    <td  class='J8h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Jeudi &heure=8h">8h</a></td>
                    <td  class='V8h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Vendredi &heure=8h">8h</a></td>
                    <td  class='S8h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Samedi &heure=8h">8h</a></td>
                    <td  class='D8h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Dimanche &heure=8h">8h</a></td>

                </tr>
                <tr>
                    <td id="LM" class='L9h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Lundi &heure=9h">9h</a></td>
                    <td id="MM" class='M9h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Mardi &heure=9h">9h</a></td>
                    <td id="MMM" class='MM9h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Mercredi &heure=9h">9h</a></td>
                    <td id="JM" class='J9h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Jeudi &heure=9h">9h</a></td>
                    <td id="VM" class='V9h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Vendredi &heure=9h">9h</a></td>
                    <td id="SM" class='S9h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Samedi &heure=9h">9h</a></td>
                    <td id="DM" class='D9h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Dimanche &heure=9h">9h</a></td>

                </tr>
                <tr>
                    <td id="LM" class='L10h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Lundi &heure=10h">10h</a></td>
                    <td id="MM" class='M10h'><a href="Accueil.php&id=<?php echo $id ?>&jour=Mardi &heure=10h">10h</a></td>
                    <td id="MMM" class='MM10h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Mercredi &heure=10h">10h</a></td>
                    <td id="JM" class='J10h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Jeudi &heure=10h">10h</a></td>
                    <td id="VM" class='V10h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Vendredi &heure=10h">10h</a></td>
                    <td id="SM" class='S10h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Samedi &heure=10h">10h</a></td>
                    <td id="DM" class='D10h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Dimanche &heure=10h">10h</a></td>

                </tr>
                <tr>
                    <td id="LM" class='L11h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Lundi &heure=11h">11h</a></td>
                    <td id="MM" class='M11h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Mardi &heure=11h">11h</a></td>
                    <td id="MMM" class='MM11h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Mercredi &heure=11h">11h</a></td>
                    <td id="JM" class='J11h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Jeudi &heure=11h">11h</a></td>
                    <td id="VM" class='V11h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Vendredi &heure=11h">11h</a></td>
                    <td id="SM" class='S11h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Samedi &heure=11h">11h</a></td>
                    <td id="DM" class='D11h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Dimanche &heure=11h">11h</a></td>
                </tr>
                <tr>
                    <td id="LM" class='L12h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Lundi &heure=12h">12h</a></td>
                    <td id="MM" class='M12h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Mardi &heure=12h">12h</a></td>
                    <td id="MMM" class='MM12h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Mercredi &heure=12h">12h</a></td>
                    <td id="JM" class='J12h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Jeudi &heure=12h">12h</a></td>
                    <td id="VM" class='V12h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Vendredi &heure=12h">12h</a></td>
                    <td id="SM" class='S12h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Samedi &heure=12h">12h</a></td>
                    <td id="DM" class='D12h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Dimanche &heure=12h">12h</a></td>

                </tr>
                <tr>
                    <td id="LM" class='L13h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Lundi &heure=13h">13h</a></td>
                    <td id="MM" class='M13h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Mardi &heure=13h">13h</a></td>
                    <td id="MMM" class='MM13h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Mercredi &heure=13h">13h</a></td>
                    <td id="JM" class='J13h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Jeudi &heure=13h">13h</a></td>
                    <td id="VM" class='V13h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Vendredi &heure=13h">13h</a></td>
                    <td id="SM" class='S13h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Samedi &heure=13h">13h</a></td>
                    <td id="DM" class='D13h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Dimanche &heure=13h">13h</a></td>

                </tr>
                <tr>
                    <td id="LA" class='L14h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Lundi &heure=14h">14h</a></td>
                    <td id="MA" class='M14h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Mardi &heure=14h">14h</a></td>
                    <td id="MMA" class='MM14h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Mercredi &heure=14h">14h</a></td>
                    <td id="JA" class='J14h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Jeudi &heure=14h">14h</a></td>
                    <td id="VA" class='V14h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Vendredi &heure=14h">14h</a></td>
                    <td id="SA" class='S14h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Samedi &heure=14h">14h</a></td>
                    <td id="DA" class='D14h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Dimanche &heure=14h">14h</a></td>

                </tr>
                <tr>
                    <td id="LA" class='L15h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Lundi &heure=15h">15h</a></td>
                    <td id="MA" class='M15h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Mardi &heure=15h">15h</a></td>
                    <td id="MMA" class='MM15h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Mercredi &heure=15h">15h</a></td>
                    <td id="JA" class='J15h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Jeudi &heure=15h">15h</a></td>
                    <td id="VA" class='V15h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Vendredi &heure=15h">15h</a></td>
                    <td id="SA" class='S15h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Samedi &heure=15h">15h</a></td>
                    <td id="DA" class='D15h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Dimanche &heure=15h">15h</a></td>


                </tr>
                <tr>
                    <td id="LA" class='L16h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Lundi &heure=16h">16h</a></td>
                    <td id="MA" class='M16h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Mardi &heure=16h">16h</a></td>
                    <td id="MMA" class='MM16h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Mercredi &heure=16h">16h</a></td>
                    <td id="JA" class='J16h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Jeudi &heure=16h">16h</a></td>
                    <td id="VA" class='V16h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Vendredi &heure=16h">16h</a></td>
                    <td id="SA" class='S16h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Samedi &heure=16h">16h</a></td>
                    <td id="DA" class='D16h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Dimanche &heure=16h">16h</a></td>

                </tr>
                <tr>
                    <td id="LA" class='L17h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Lundi &heure=17h">17h</a></td>
                    <td id="MA" class='M17h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Mardi &heure=17h">17h</a></td>
                    <td id="MMA" class='MM17h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Mercredi &heure=17h">17h</a></td>
                    <td id="JA" class='J17h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Jeudi &heure=17h">17h</a></td>
                    <td id="VA" class='V17h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Vendredi &heure=17h">17h</a></td>
                    <td id="SA" class='S17h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Samedi &heure=17h">17h</a></td>
                    <td id="DA" class='D17h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Dimanche &heure=17h">17h</a></td>


                </tr>
                <tr>
                    <td id="LA" class='L18h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Lundi &heure=18h">18h</a></td>
                    <td id="MA" class='M18h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Mardi &heure=18h">18h</a></td>
                    <td id="MMA" class='MM18h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Mercredi &heure=18h">18h</a></td>
                    <td id="JA" class='J18h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Jeudi &heure=18h">18h</a></td>
                    <td id="VA" class='V18h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Vendredi &heure=18h">18h</a></td>
                    <td id="SA" class='S18h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Samedi &heure=18h">18h</a></td>
                    <td id="DA" class='D18h'><a href="Accueil.php?&id=<?php echo $id ?>&jour=Dimanche &heure=18h">18h</a></td>

                </tr>


            </table>
        </div>
    
    </div>
                </hr>

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