<!DOCTYPE html>
<?php
include('conexion.php');

$resultat = $bdd->query('SELECT * FROM factures ORDER BY date_facture DESC');
$factuer = array();
while ($donnees = $resultat->fetch())
{
$factuer[] = $donnees;
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
		<title>COGIPapp</title>
	</head>
	<body>

		<h1>Accueil</h1>

		<p><b>Bonjour Ms. Jean-Christian Ranu</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum aperiam excepturi beatae perferendis, voluptas obcaecati inventore corporis deleniti odit iste, ad incidunt at velit laudantium dolorum, eum officiis numquam itaque!</p>

		<h1>Dernier 5 facture</h1>

		<table>
			<tr>
				<th>Numero Facture</th>
				<th>Date Facture</th>
			</tr>
			<?php
				foreach ($factuer as $row) {
			?>
			<tr>
				<td><?= $row['numero_facture']?></td>
				<td><?= $row['date_facture']?></td>
			</tr>
			<?php
			}
			?>
		</table>
			<strong><a href="facture.php">List de tout la factue...</a></strong>
			<hr>

			<h1>Dernier 5 personne</h1>
			<?php
			foreach ($personne as $row) {
			?>
			<ol>
				<?= $row ['id_personne']?>.
				<a href="detailcontact.php"><?= $row ['nom_personne']?>
				<?= $row ['prenom_personne']?></a>
			</ol>
			<?php }
			?>
			<strong><a href="annuaire.php">List de tous les personnes...</a></strong>
			<hr>
			<h1>Dernier 5 entreprises</h1>
			<?php
			foreach ($societe as $row) {
			?>
			<ol>
				<?= $row ['id_societes']?>.
				<a href="detailsociete.php"><?= $row ['nom_societe']?></a>
			</ol>
			
			<?php }
			?>
			<hr>
			<h2><a href="client.php">Clients</a></h2>
			<h2><a href="fournisseur.php">Fournisseurs</a></h2>
		</body>
	</html>