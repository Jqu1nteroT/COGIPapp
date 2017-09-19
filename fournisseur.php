<?php
include('conexion.php');
$resultat = $bdd->query("SELECT * FROM societes WHERE type = 1");
$societe = $resultat->fetchAll();
print_r($societe);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Fournisseur</title>
	</head>
	<body>
		<h1>Fournisseur:</h1>
		<table>
			<tr>
				<th>Nom Societe</th>
				<th>TVA Societe</th>
			</tr>
			<tr>
				<?php
					foreach ($societe as $row) {
				?>
				<td><a href="<?= "detailsociete.php?societe=".$row['id_societe'];?>"><?= $row['nom_societe'];?></a></td>
				<td><?= $row['tva_societe'];?></td>
				<?php
					}
				?>
			</tr>
		</table>
	</body>
</html>