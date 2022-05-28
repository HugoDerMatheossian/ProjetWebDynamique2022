<?php
  $host = 'localhost';
  $dbname = 'omnes_sante';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  $sql = "SELECT Nom,Prenom,Specialite FROM medecin where Specialite LIKE 'Generaliste'";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style type="text/css">
    #head {
      background-color: white;
        color: blue;
        text-align: center;
        padding: 0px;
    }

    #navi {
      background-color: white;
      color: black;
      text-align: center;
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
    .retour{
      background-color:#FF337A;
      border: solid;
      color: navajowhite;
      padding: 2px;
      margin: 2px;
      text-align: center;
      display: inline-block;
      font-size: 18px;
      cursor: pointer;
      position:relative; 
          display:inline-block; 
      float: right;
      width: 70px;
      height: 20px;
    }
  </style>
</head>
<body>
  <div id="head" align="center" style="color:#5F9EA0;"><h1>Liste des Médecins Généralistes</h1>
  </div>
 <div id="navi">
    <table>
       <thead>
        <tr>
           <th>Nom</th>
           <th>Prenom</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <tr>
           <td><a href="PageAffichage.html"><?php echo htmlspecialchars($row['Nom']);?></a></td>
          <td><?php echo htmlspecialchars($row['Prenom']); ?></td>
        </tr>
         <?php endwhile; ?>
      </tbody>
    </table>
 </div>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <div id="footer">
    <footer>
    <small>
      <hr>
        <pre>Mail:<a href="mailto:hugo.dermatheossian@omnes_sante.fr">hugo.dermatheossian@edu.ece.fr</a>   Téléphone: <em>(+33)1 44 39 06 00</em>       Adresse:37, Quai de Grenelle,75015 Paris<a href="toutparcourir.html" type="button" class="retour">RETOUR</a></pre>
      </hr>
    </small>
 </footer>
  </div>
</body>
</html>