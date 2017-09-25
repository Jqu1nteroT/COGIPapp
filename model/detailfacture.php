<?php 
include('conexion.php');


  $numero = $_GET['facture'];
    $resultat = $bdd->query("SELECT * FROM factures WHERE numero_facture = '$numero' ");
     $factuer = array();
    while ($donnees = $resultat->fetch())
          {
             $factuer = $donnees;
          }
    $resultat = $bdd->query("SELECT nom_societe FROM factures,societes WHERE factures.Id_societe = societes.id_societes AND factures.numero_facture ='$numero' ");

    $donne = $resultat->fetch();

    $resultat1 = $bdd->query("SELECT nom_personne FROM factures,personne WHERE factures.id_personne = personne.id_personne AND factures.numero_facture ='$numero' ");
    $donne1 = $resultat1->fetch();

 ?>