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