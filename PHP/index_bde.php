<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bureau de Etudiant(BDE)</title>
<!--                       CSS                       -->
<!-- Main Stylesheet -->
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
</head>
<body id="login">
<div id="login-wrapper" class="png_bg">
  <div id="login-top">
    <h1>Bureau De Etudiant (BDE)</h1>
    <!-- Logo (221px width) -->
    <img id="logo" src="resources/images/logo_bde.png" alt="UTC logo" /></div>
  <!-- End #logn-top -->
  <div id="login-content">
	 <?php
		session_start();
		include "connect.php";
		$vConn = fConnect();
		$vLogin = $_POST[login];
		$vPassword = $_POST[password];
		$vSql="SELECT mdp FROM Membre 
				WHERE numEtudiant = '$vLogin';";
		$vQuery=pg_query($vConn, $vSql);
		$vResult = pg_fetch_array($vQuery);
		if($vResult){
			if($vResult[0]==$vPassword){
				$login=$vLogin;
				$_SESSION["login"]=$login;
				$vSql="SELECT D.types FROM Membre M, Dirigeant D
						WHERE M.numEtudiant = '$vLogin' AND M.numEtudiant = D.numEtu ;";
				$vQuery=pg_query($vConn, $vSql);
				$vResult = pg_fetch_array($vQuery);
				if($vResult){
					if($vResult[0]=='President'){//president
						echo "<h2>Sign In r¨¦ussi.</h2>";
						echo "<a class=\"button\" href=\"page_president.php\">Continuer</a>";
					}
					else if($vResult[0]=='Secretaire'){
						echo "<h2>Sign In r¨¦ussi.</h2>";
						echo "<a class=\"button\" href=\"page_secretaire.php\">Continuer</a>";
					}
					else if($vResult[0]=='Tresorier'){
						echo "<h2>Sign In r¨¦ussi.</h2>";
						echo "<a class=\"button\" href=\"page_tresorier.php\">Continuer</a>";
					}
					else{
						echo "<h2>Sign In r¨¦ussi.</h2>";
						echo "<a class=\"button\" href=\"page_adherent.php\">Continuer</a>";
					}
				}
				else{//membre
						echo "<h2>Sign In r¨¦ussi.</h2>";
						echo "<a class=\"button\" href=\"page_adherent.php\">Continuer</a>";
				}
			}
			else{
				echo "<h2>Mot de passe n'est pas correct.</h2>";
				echo "<a class=\"button\" href=\"login_bde.html\">Retourner</a>";
			}
		}
		else{
			echo "<h2>Membre n'existe pas.</h2>";
			echo "<a class=\"button\" href=\"login_bde.html\">Retourner</a>";
		}
	?>		
  </div>	
</div>
</body>
</html>