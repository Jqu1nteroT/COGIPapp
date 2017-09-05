<!DOCTYPE html>
<?php 
	try
    {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=facturation;charset=utf8', 'pablo', 'user');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e)
    {
    // En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : '.$e->getMessage());
    }
    $resultat = $bdd->query("SELECT * FROM factures ORDER BY date_facture DESC");
     $factuer = array();
    while ($donnees = $resultat->fetch())
          {
             $factuer[] = $donnees;
          }
 ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Facture</title>
	<style>
	th{
		border: 1px solid black;
		padding: 0px;
	}
	td{
		border: 1px solid black;
	}
	</style>
</head>
<body>

<h1>List de Facture</h1>

<table>
  <tr>

    <th>Numero Facture</th>
    <th>Date Facture</th> 
  </tr>
  <?php 
	foreach ($factuer as $row) {
?>
  <tr>
    <td><a href="detailfacture.php"><?= $row['numero_facture']?></a></td>
    <td><?= $row['date_facture']?></td> 
  </tr>
 <?php
}
 ?>
</table>
</body>
</html>