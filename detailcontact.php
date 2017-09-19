<?php 
include('conexion.php');

$contact = $_GET['contact'];
$resultat = $bdd->query("SELECT personne.*, societes.nom_societe FROM personne,societes WHERE personne.Id_societe = societes.id_societes AND id_personne = '$contact' ");
  $personne = array();
  while ($donnees = $resultat->fetch())
          {
             $personne = $donnees;
          }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detail Contac</title>
</head>
<body>

<h1>Detail de Contact:</h1>
		<div style="border: 1px solid black; width: 50%; padding:20px;">
			<h1>Contact:</h1>
			<table>
				<tr>
					<td><b>Nom:</b></td>
					<td><?php echo $personne['nom_personne'];?></td>
				</tr>
				<tr>
					<td><b>Prenom:</b></td>
					<td><?php echo $personne['prenom_personne'];?></td>
				</tr>
				<tr>
					<td><b>Tlf:</b></td>
					<td><?php echo $personne['tel_personne'];?></td>
				</tr>
				<tr>
					<td><b>Email:</b></td>
					<td><?php echo $personne['email_personne'];?></td>
				</tr>
				<tr>
					<td><b>Societe:</b></td>
					<td><?php echo $personne['nom_societe'];?></td>
				</tr>
			</table>	
		</div>
</body>
</html>