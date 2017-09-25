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
				<td><a href="<?= "index.php?cogi=detailcontact&contact=".$row['id_personne'];?>"><?= $row ['id_personne']?></a></td>
				<td><?= $row ['nom_personne']?></td>
				<td><?= $row ['prenom_personne']?></td>
				<td><?= $row ['nom_societe']?></td>
				<?php
			}
			?>
			</tr>		
		</table>
