<section id="Dsociete">
	<h1>Societe:</h1>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h2>Detail societe:</h2>
					</div>
					<div class="panel-body">
						<table  class="table table-striped">
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
				</div>
			</div>
			<div class="col-md-6">
				<!-- Button modal -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
				<h2>Facture liées</h2>
				</button>
				<!-- Modal -->
				<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="panel panel-info">
									<div class="panel-heading">
										<h2>Facture liées</h2>
									</div>
									<div class="panel-body">
										<table  class="table table-striped">
											<tr class="info">
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
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Button modal -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
				<h2>Travaillant dans la société</h2>
				</button>
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="panel panel-info">
									<div class="panel-heading">
										<h2>Travaillant dans la société:</h2>
									</div>
									<div class="panel-body">
										<table  class="table table-striped">
											<tr class="info">
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
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>