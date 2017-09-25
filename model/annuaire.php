<?php
include('conexion.php');

$resultat = $bdd->query('SELECT personne.*, societes.nom_societe FROM personne,societes WHERE personne.Id_societe = societes.id_societes');
$personne = $resultat->fetchAll();

?>