<!DOCTYPE html>
<?php
include('conexion.php');

$resultat = $bdd->query('SELECT personne.*, societes.nom_societe FROM personne,societes WHERE personne.Id_societe = societes.id_societes');
$personne = $resultat->fetchAll();

?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Annuaire</title>
</head>
<body>
	<h1>Annuaire</h1>
	<table>
			<tr>
				<th>Id</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Societe</th>
			</tr>
			<?php
				foreach ($personne as $row)  {
			?>
			<tr>
				<td><a href="<?= "detailcontact.php?contact=".$row['id_personne'];?>"><?= $row ['id_personne']?></a></td>
				<td><?= $row ['nom_personne']?></td>
				<td><?= $row ['prenom_personne']?></td>
				<td><?= $row ['nom_societe']?></td>
				<?php
			}
			?>
			</tr>		
		</table>
</body>
</html>