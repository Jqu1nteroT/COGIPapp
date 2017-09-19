<!DOCTYPE html>
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
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detail Facture</title>
</head>
<body>
	<h1>Detail facture:</h1>

	<div style="border: 1px solid black; width: 400px; height: 250px;">
		<h2>Facture:</h2>
    <table>
      <tr>
        <td><b>Numero:</b></td>
        <td><?php echo $factuer['numero_facture'];?></td>
      </tr>
      <tr>
        <td><b>Date:</b></td>
        <td><?php echo $factuer['date_facture'];?></td>
      </tr>
      <tr>
        <td><b>Societe:</b></td>
        <td><?php echo $donne['nom_societe'];?></td>
      </tr>
      <tr>
        <td><b>Personne:</b></td>
        <td><?php echo $donne1['nom_personne'];?></td>
      </tr>
    </table>
 
  </div>
</body>
</html>