<?php
include('conexion.php');
$resultat = $bdd->query("SELECT * FROM societes WHERE type = 2");
$societe = $resultat->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Client</title>
	</head>
	<body>
		<h1>Client:</h1>
		<table>
			<tr>
				<th>Nom Societe</th>
				<th>TVA Societe</th>
			</tr>
			<?php
					foreach ($societe as $row) {
				?>
			<tr>				
				<td><a href="<?= "detailsociete.php?societe=".$row['id_societes'];?>"><?= $row['nom_societe'];?></a></td>
				<td><?= $row['tva_societe'];?></td>
			</tr>
			<?php
					}
				?>
		</table>
	</body>
</html>