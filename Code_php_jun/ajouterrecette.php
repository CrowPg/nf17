<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ajouter une recette dans l'association.</title>
<!--                       CSS                       -->
<!-- Main Stylesheet -->
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
</head>
<body id="login">
<div id="login-wrapper" class="png_bg">
  <div id="login-top">
    <h1>Ajouter une recette dans l'association.</h1>
    <!-- Logo (221px width) -->
    <img id="logo" src="resources/images/logo_bde.png" alt="UTC logo" /></div>
  <!-- End #logn-top -->
  <div id="login-content">
	 <?php
		include "connect.php";
		$vConn = fConnect();
		$vRecette = $_POST[id];
		$vType = $_POST[type];
		$vDate = $_POST[rdate];
		$vMontant = $_POST[montant];
		$vComptabilite = $_POST[idComptabilite];
		$vSql="INSERT INTO Recette(id,types,dateRecette,montant,idComptabilite)
				VALUES ('$vRecette','$vType','$vDate','$vMontant','$vComptabilite');";
		$vQuery=pg_query($vConn, $vSql);
		echo "<h2>Ajouter Reussi.</h2>";
		echo "<a class=\"button\" href=\"login_bde.html\">Retourner</a>";
	?>		
  </div>	
</div>
</body>
</html>