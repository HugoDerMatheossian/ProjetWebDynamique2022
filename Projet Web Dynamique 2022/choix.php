<?php 
//si on a appuyé sur le boutton de validation
if(isset($_POST['submit'])){
	$typeChoisi = $_POST['compte'];
	if(strcasecmp($typeChoisi, 'Patient') == 0){
		echo '<meta http-equiv="refresh" content="1;URL=PageLoginPatient.html">';
	}else if (strcasecmp($typeChoisi, 'Medecin') == 0){
		echo '<meta http-equiv="refresh" content="1;URL=PageLoginMedecin.html">';
	}else{
		echo '<meta http-equiv="refresh" content="1;URL=PageLoginAdmin.html">';
	}
}
?>