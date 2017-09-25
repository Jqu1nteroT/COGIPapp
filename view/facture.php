
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
    <td><a href="<?= "index.php?cogi=detailfacture&facture=".$row['numero_facture'];?>"><?= $row['numero_facture']?></a></td>
    <td><?= $row['date_facture']?></td> 
  </tr>
 <?php
}
 ?>
</table>
