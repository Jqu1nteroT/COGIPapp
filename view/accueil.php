<section id="header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
				<h1>COGI APP</h1>
			</div>
			<div class="col-md-12" style=" border: 1px solid #337AB7;">
				<ul class="nav nav-pills">
					<li class="active"><a href="#">Accueil</a></li>
					<li><a href="#">Personne</a></li>
					<li><a href="#">Societe</a></li>
					<li><a href="#">Clients</a></li>
					<li><a href="#">Fournisseurs</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="body">
	
</section>
<section id="footer">
	
</section>
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