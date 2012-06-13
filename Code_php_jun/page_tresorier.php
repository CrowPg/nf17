<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tresorier</title>
<!--                       CSS                       -->
<!-- Main Stylesheet -->
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
</head>
<body id="login">
<div id="login-wrapper" class="png_bg">
  <div id="login-top">
  	  <?php
		session_start();
		echo "<h2>Bonjour Tresorier ".$_SESSION["login"].", bienvenu le BDE</h2>";
	  ?>
  <!-- End #logn-top -->
  <div id="login-content">
      <div class="notification information png_bg">
        <div> Cliquez "Return to main page" si vous voulez sortir. </div>
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
        <a href="rediger_rapport.html" title="title">3.Rediger des rapports.</a>
      </p>
      <div class="clear"></div>
	  <p>
        <a href="liste_rapport.php" title="title">4.Consulter l'archive des rapports.</a>
      </p>
      <div class="clear"></div>
	  <p>
        <a href="adherer.html" title="title">5.Adherer à une association.</a>
      </p>
      <div class="clear"></div>
	  <p>
        6.Consulter l'archive des comptabilite de l'association.
		<div class="bulk-actions align-left">
			<form action="liste_comptabilite.php" method="POST">
				<p>
					<label>Date Debut</label>
					<input class="text-input" type="date" name="date_debut"/>
					<label>Date Fin</label>
					<input class="text-input" type="text" name="date_fin"/>
				</p>
				<p>
					<input class="button" type="submit" value="Envoyer" />
				</p>
			</form>
		</div>
      </p>
      <div class="clear"></div>
	  <p>
        <a href="liste_recette.php" title="title">7.Ajouter, supprimer, modifier une recette pour l'association.</a>
      </p>
      <div class="clear"></div>
	  <p>
        <a href="liste_depense.php" title="title">8.Ajouter, supprimer, modifier une depense pour l'association.</a>
      </p>
      <div class="clear"></div>
	  <p>
        <a href="#" title="title">9.Dresser le bilan.</a>
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
