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
				<td><a href="<?= "index.php?cogi=detailsociete&societe=".$row['id_societes'];?>"><?= $row['nom_societe'];?></a></td>
				<td><?= $row['tva_societe'];?></td>
			</tr>
			<?php
					}
				?>
		</table>
