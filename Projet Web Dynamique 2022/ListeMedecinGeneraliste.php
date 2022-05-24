<?php
  $host = 'localhost';
  $dbname = 'omnes_sante';
  $username = 'root';
  $password = 'root';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  $sql = "SELECT Nom,Prenom,Specialite FROM medecin where Specialite LIKE 'Généraliste'";
   
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
<head></head>
<body>
 <h1>Liste des Médecins Géneralistes</h1>
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
</body>
</html>