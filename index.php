<?php 

$cogi = !empty($_GET['cogi'])?$_GET['cogi'] : 'default';

require_once 'view/header.php';

switch ($cogi) {

	case 'facture':
		require_once 'controller/facture.php';
		break;
	
	case 'annuaire':
		require_once 'controller/annuaire.php';
		break;

	case 'client':
		require_once 'controller/client.php';
		break;

	case 'fournisseur':
		require_once 'controller/fournisseur.php';
		break;

	case 'detailcontact':
		require_once 'controller/detailcontact.php';
		break;

	case 'detailfacture':
		require_once 'controller/detailfacture.php';
			break;

	case 'detailsociete':
		require_once 'controller/detailsociete.php';
		break;

	default:
		require_once 'controller/accueil.php';
		break;
}

require_once 'view/footer.php';

?>