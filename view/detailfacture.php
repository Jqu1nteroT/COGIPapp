<section id="Dfacture">
  <h1>Detail facture:</h1>
  <div  class="panel panel-info">
    <div class="panel-heading">
      <h2>Facture:</h2>  
    </div>
    <div class="panel-body">
      <table class="table table-striped">
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
  </div>
</section>