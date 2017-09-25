<?php
include('conexion.php');
$resultat = $bdd->query('SELECT * FROM factures ORDER BY date_facture DESC');
$factuer = array();
while ($donnees = $resultat->fetch())
{
$factuer[] = $donnees;
}
$resultat = $bdd->query('SELECT * FROM personne LIMIT 5');
$personne = array();
while ($donnees = $resultat->fetch())
{
$personne[] = $donnees;
}
$resultat = $bdd->query('SELECT * FROM societes LIMIT 5');
$societe = array();
while ($donnees = $resultat->fetch())
{
$societe[] = $donnees;
}
?>