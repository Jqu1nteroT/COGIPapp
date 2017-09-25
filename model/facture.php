<?php 
include('conexion.php');

    $resultat = $bdd->query("SELECT * FROM factures ORDER BY date_facture DESC");
     $factuer = array();
    while ($donnees = $resultat->fetch())
          {
             $factuer[] = $donnees;
          }
 ?>