<?php
include('conexion.php');
$societe = $_GET['societe'];
$resulta = $bdd->query("SELECT * FROM societes WHERE id_societes = '$societe'");
$info = $resulta->fetchAll()[0];
$resulta1 = $bdd->query("SELECT * FROM factures WHERE Id_societe = '$societe'");
$factures = $resulta1->fetchAll();
$resulta2 = $bdd->query("SELECT * FROM personne WHERE id_societe = '$societe'");
$persones = $resulta2->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<title>Detail Societe</title>
	<style>
	.es th{
		border: 1px solid black;
		padding: 0px; 
	}
	.es td{
		border: 1px solid black;
	}
	.es table{
		margin: auto;
	}
	</style>
	</head>
	<body>
<!-- 	<pre>
	<?php 
		print_r($factures);
	?>
</pre> -->
		<h1>Societe:</h1>
		<div style="border:1px solid black; width: 50%; float:left; margin: 1px;">
		<h2>Detail societe:</h2>
			<table>
				<tr>
					<td><b>Nom:</b></td>
					<td><?php echo $info['nom_societe'];?></td>
				</tr>
				<tr>
					<td><b>Adresse:</b></td>
					<td><?php echo $info['adresse_societe'];?></td>
				</tr>
				<tr>
					<td><b>Telephone:</b></td>
					<td><?php echo $info['tel_societe'];?></td>
				</tr>
				<tr>
					<td><b>TVA:</b></td>
					<td><?php echo $info['tva_societe'];?></td>
				</tr>
				<tr>
					<td><b>Compte Bancaire:</b></td>
					<td><?php echo $info['banca'];?></td>
				</tr>
			</table>
		</div>
		<div class="es" style="border:1px solid black; width: 45%; float:left; margin: 1px;">
		<h2>Facture liées:</h2>
			<table>
				<tr>
					<th>Numero Facture</th>
					<th>Date Facture</th>
				</tr>
				<?php 
					foreach ($factures as $rx) {
				?>
				<tr>
					<td><?= $rx['numero_facture'];?></td>
					<td><?= $rx['date_facture'];?></td>
				</tr>
				<?php 
			}
				?>
			</table>
		</div>
		<div class="es" style="margin: auto; width: 50%; border:1px solid black;clear:both;" >
			<h2>Travaillant dans la société:</h2>
			<table>
				<tr>
					<th>Nom:</th>
					<th>Prenom:</th>
				</tr>
				<?php 
					foreach ($persones as $rz) {
				?>
				<tr>
					<td><?= $rz['nom_personne'];?></td>
					<td><?= $rz['prenom_personne'];?></td>
				</tr>
					<?php 
				}
				?>
			</table>
		</div>
	</body>
</html>