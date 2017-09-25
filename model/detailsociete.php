<?php
include('conexion.php');
$societe = $_GET['societe'];
$resulta = $bdd->query("SELECT * FROM societes WHERE id_societes = '$societe'");
$info = $resulta->fetchAll()[0];
$resulta1 = $bdd->query("SELECT * FROM factures WHERE Id_societe = '$societe'");
$factures = $resulta1->fetchAll();
$resulta2 = $bdd->query("SELECT * FROM personne WHERE id_societe = '$societe'");
$persones = $resulta2->fetchAll();
?>