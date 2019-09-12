<?php

include("vue/entete.php") ;
include("vue/menu.php") ;

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];
	 
switch($uc)
{
	case 'accueil':
	{
		include("vue/accueil.php");
		break;
	}
/*--------------------------------------------------------------------------------------------------------*/	

	case 'CV':
	{
		include("vue/CV.php");
		break;
	}
/*--------------------------------------------------------------------------------------------------------*/	

	case 'LM' :
	{
		include("vue/LM.php");
		break; 
	}
/*--------------------------------------------------------------------------------------------------------*/	

		
	case 'entreprise' :
	{
		include("vue/entreprise.php");
		break;
	}		
	case 'stageChamilo' : // ce même nom doit être le même que dans le menu <a href="index.php?uc=stageChamilo">
	{
		include("vue/stageChamilo.php");
		break;
	}

	case 'guideEnseignant':
	{
		include("vue/guideEnseignant.php");
		break;
	}

	case 'guideApprenant':
	{
		include("vue/guideApprenant.php");
		break;
	}
	

	case 'stageWordPress' : // ce même nom doit être le même que dans le menu <a href="index.php?uc=stageChamilo">
	{
		include("vue/stageWordPress.php");
		break;
	}
/*--------------------------------------------------------------------------------------------------------*/	

	case 'mission2' :
	{
		include("vue/mission2.php");
		break; 
	}
	case 'mission3' :
	{
		include("vue/mission3.php");
		break; 
	}

/*--------------------------------------------------------------------------------------------------------*/	


	case 'contact' :
	{
		include("vue/contact.php");
		break;
	}
/*--------------------------------------------------------------------------------------------------------*/	
	case 'glpi' :
	{
		include("vue/glpi.php");
		break;
	}
	case 'veille' :
	{
		include("vue/veille.php");
		break;
	}

	case 'descriVielle' :
	{
		include("vue/descriVielle.php");
		break;
	}
/*--------------------------------------------------------------------------------------------------------*/	

	
	
}

include("vue/pied.php") ;
?>



