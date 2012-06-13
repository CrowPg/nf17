<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Rediger_Rapport</title>
<!--                       CSS                       -->
<!-- Main Stylesheet -->
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
</head>
<body id="login">
<div id="login-wrapper" class="png_bg">
  <div id="login-top">
    <h1>Rediger_Rapport</h1>
    <!-- Logo (221px width) -->
    <img id="logo" src="resources/images/logo_bde.png" alt="UTC logo" /></div>
  <!-- End #logn-top -->
  <div id="login-content">
	 <?php
		include "connect.php";
		$vConn = fConnect();
		$vLogin = $_POST[id];
		$vRapport = $_POST[id_rapport];
		$vNomAsso = $_POST[nom_association];
		$vTitre=$_POST[titre];
		$vDate=$_POST[date_rapport];
		$vSql="INSERT INTO Rapport(id,titre,dateRappport,nomAsso)
				VALUES('$vRapport','$vTitre','$vDate','$vNomAsso');";
		$vQuery=pg_query($vConn, $vSql);
		$vConn = fConnect();
		$vSql="INSERT INTO Rediger(id,numEtudiant)
				VALUES('$vRapport','$vLogin');";
		echo "<h2>Rediger Reussi.</h2>";
		$vQuery=pg_query($vConn, $vSql);
		echo "<a class=\"button\" href=\"login_bde.html\">Retourner</a>";
	?>		
  </div>	
</div>
</body>
</html>