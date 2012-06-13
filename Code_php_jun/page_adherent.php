<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Adherent</title>
<!--                       CSS                       -->
<!-- Main Stylesheet -->
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
</head>
<body id="login">
<div id="login-wrapper" class="png_bg">
  <div id="login-top">
  	  <?php
		session_start();
		echo "<h2>Bonjour ".$_SESSION["login"].", bienvenu le BDE</h2>";
	  ?>
  <!-- End #logn-top -->
  <div id="login-content">
      <div class="notification information png_bg">
        <div> Click "Return to main page" if you want to leave. </div>
      </div>
	  <h3>What you want to do ?</h3>
      <p>
        <a href="liste_association.php" title="title">1.Parcourir la liste des associations.</a>
      </p>
      <div class="clear"></div>
	  <p>
        <a href="liste_membre_association.php" title="title">2.Consulter la liste des membres et des dirigeants.</a>
      </p>
      <div class="clear"></div>
	  <p>
        <a href="rediger_rapport.html" title="title">3.Rédiger des rapports.</a>
      </p>
      <div class="clear"></div>
	  <p>
        <a href="liste_rapport.php" title="title">4.Consulter l'archive des rapports.</a>
      </p>
      <div class="clear"></div>
	  <p>
        <a href="adherer.php" title="title">5.Adhérer à une association.</a>
      </p>
      <div class="clear"></div>
      <p>
        <a class="button" href="login_bde.html">Return to main page</a>
      </p>
  </div>
  <!-- End #login-content -->
</div>
<!-- End #login-wrapper -->
</body>
</html>
