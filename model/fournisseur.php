<?php
include('conexion.php');
$resultat = $bdd->query("SELECT * FROM societes WHERE type = 1");
$societe = $resultat->fetchAll();
?>