<?php 
include('conexion.php');

$contact = $_GET['contact'];
$resultat = $bdd->query("SELECT personne.*, societes.nom_societe FROM personne,societes WHERE personne.Id_societe = societes.id_societes AND id_personne = '$contact' ");
  $personne = array();
  while ($donnees = $resultat->fetch())
          {
             $personne = $donnees;
          }
?>