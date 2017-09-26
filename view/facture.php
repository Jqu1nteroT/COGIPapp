<section id="facture">
  <h1>List de Facture</h1>
  
  <table class="table table-striped">
    <tr class="info">
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
  <div class="well">
    <p><strong>NOTE:</strong> Pour savoir plus sur chaque personne, faire clic sur le nombre de facture.</p>
  </div>
</section>