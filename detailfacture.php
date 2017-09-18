<!DOCTYPE html>
<?php 

	$numero_facture = $_GET['numero_facture'];
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
    $resultat = $bdd->query("SELECT * FROM factures WHERE numero_facture={$numero_facture}");
     $factuer = array();
    while ($donnees = $resultat->fetch())
          {
             $factuer[] = $donnees;
          }
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
		<div style="margin-top: 100px;"><?php ?></div> </div>
</body>
</html>