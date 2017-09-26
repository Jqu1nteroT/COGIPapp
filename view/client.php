<section id="client">
	<h1>Client:</h1>

	<table class="table table-striped">
		<tr class="info">
			<th>Nom Societe</th>
			<th>TVA Societe</th>
		</tr>
		<?php
				foreach ($societe as $row) {
		?>
		<tr>
			<td><a href="<?= "index.php?cogi=detailsociete&societe=".$row['id_societes'];?>"><?= $row['nom_societe'];?></a></td>
			<td><?= $row['tva_societe'];?></td>
		</tr>
		<?php
				}
		?>
	</table>
	<div class="well">
		<p><strong>NOTE:</strong> Pour savoir plus sur chaque personne, faire clic sur le "<b>Nom Societe</b>".</p>
	</div>
</section>