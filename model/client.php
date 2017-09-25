<?php
include('conexion.php');
$resultat = $bdd->query("SELECT * FROM societes WHERE type = 2");
$societe = $resultat->fetchAll();
?>