<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Juan P Quintero T">
		<meta name="description" content="APP facturation COGIapp">
		<title>COGIPapp</title>
		<link rel="stylesheet" href="view/css/bootstrap.min.css">
		<link rel="stylesheet" href="view/css/style.css">
		<link rel="icon" type="image/svg+xml" sizes="100x100" href="view/image/faviCogi.svg">			
		<script src="view/js/jquery.js"></script>
		<script src="view/js/bootstrap.min.js"></script>
	</head>
	<body>
<section id="header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 logo">
				<img src="view/image/logoCogi.svg" alt="logo">
			</div>
			<div id="navi" class="col-md-12">
				<ul class="nav nav-pills">
					<li <?php if ($cogi == "default"){
						echo "class=active";
					}
					?>><a href="index.php">Accueil</a></li>
					<li <?php if ($cogi == "facture"){
						echo "class=active";
					}
					?>><a href="index.php?cogi=facture">Facture</a></li>
					<li <?php if ($cogi == "annuaire"){
						echo "class=active";
					}
					?>><a href="index.php?cogi=annuaire">Personne</a></li>
					<li <?php if ($cogi == "client"){
						echo "class=active";
					}
					?>><a href="index.php?cogi=client">Clients</a></li>
					<li <?php if ($cogi == "fournisseur"){
						echo "class=active";
					}
					?>><a href="index.php?cogi=fournisseur">Fournisseurs</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>