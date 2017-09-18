<!DOCTYPE html>
<?php
try
{
// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=facturation;charset=utf8', 'pablo', 'user');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
// En cas d'erreur, on affiche un message et on arrête tout
die('Erreur : '.$e->getMessage());
}
$resultat = $bdd->query('SELECT * FROM personne');
$personne = array();
while ($donnees = $resultat->fetch())
{
$personne[] = $donnees;
}
$resultat = $bdd->query('SELECT * FROM societes');
$societe = array();
while ($donnees = $resultat->fetch())
{
$societe[] = $donnees;
}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Annuaire</title>
</head>
<body>
	<h1>Annuqire</h1>
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
				<td><?= $row ['id_personne']?></td>
				<td><?= $row ['nom_personne']?></td>
				<td><?= $row ['prenom_personne']?></td>
				<td><?= $row ['id_societe']?></td>
				<?php
			}
			?>
			<?php
				foreach ($societe as $row)  {
			?>
			<td><?= $row ['nom_societe']?></td>
				<?php
			}
			?>
			</tr>
			
		</table>
</body>
</html>