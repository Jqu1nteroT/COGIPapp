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
	<div class="container-fluid">
		<div class="row">
				<div class="col-sm-12 col-md-4"><h1>Dernier 5 facture</h1>
					<table  class="table table-striped">
						<tr class="info">
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
					<div class="link">
						<strong><a href="index.php?cogi=facture">List de tout la factue...</a></strong>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<h1>Dernier 5 personne</h1>
					<?php
					foreach ($personne as $row) {
					?>
					<ol class="list-group">
						<div class="list-group-item">
							<?= $row ['id_personne']?>.
							<a href="<?= "index.php?cogi=detailcontact&contact=".$row['id_personne'];?>"><?= $row ['nom_personne']?>
							<?= $row ['prenom_personne']?></a>	
						</div>
					</ol>
						<?php }
						?>
					<strong><a href="index.php?cogi=annuaire">List de tous les personnes...</a></strong>
				</div>
				<div class="col-sm-12 col-md-4">
					<h1>Dernier 5 entreprises</h1>
						<?php
							foreach ($societe as $row) {
						?>
					<ol class="list-group">
						<div class="list-group-item">
							<?= $row ['id_societes']?>.
							<a href="<?= "index.php?cogi=detailsociete&societe=".$row['id_societes'];?>"><?= $row ['nom_societe']?></a>
						</div>
					</ol>
					<?php }
					?>
				</div>
			</div>
		</div>
	</section>
	<section id="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 col-md-6 well">
					<a class="btn btn-info btn-lg" href="index.php?cogi=client" role="button"><h2>Clients</h2></a>
				</div>
				<div class="col-sm-6 col-md-6 well">
					<a class="btn btn-info btn-lg" href="index.php?cogi=fournisseur" role="button"><h2>Fournisseurs</h2></a>
				</div>
			</div>
		</div>
	</section>