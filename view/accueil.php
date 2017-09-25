<section id="accueil">
	<div class="container-fluid">
		<div class="col-md-12 accueil">
			<h1>Accueil</h1>
			<p><b>Bonjour Ms. Jean-Christian Ranu</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum aperiam excepturi beatae perferendis, voluptas obcaecati inventore corporis deleniti odit iste, ad incidunt at velit laudantium dolorum, eum officiis numquam itaque!</p>
		</div>
	</div>
</section>
<hr>
<section id="contenu">
	
</section>
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
<strong><a href="index.php?cogi=facture">List de tout la factue...</a></strong>
<hr>
<h1>Dernier 5 personne</h1>
<?php
foreach ($personne as $row) {
?>
<ol>
	<?= $row ['id_personne']?>.
	<a href="<?= "index.php?cogi=detailcontact&contact=".$row['id_personne'];?>"><?= $row ['nom_personne']?>
	<?= $row ['prenom_personne']?></a>
</ol>
<?php }
?>
<strong><a href="index.php?cogi=annuaire">List de tous les personnes...</a></strong>
<hr>
<h1>Dernier 5 entreprises</h1>
<?php
foreach ($societe as $row) {
?>
<ol>
	<?= $row ['id_societes']?>.
	<a href="<?= "index.php?cogi=detailsociete&societe=".$row['id_societes'];?>"><?= $row ['nom_societe']?></a>
</ol>

<?php }
?>
<hr>
<h2><a href="index.php?cogi=client">Clients</a></h2>
<h2><a href="index.php?cogi=fournisseur">Fournisseurs</a></h2>