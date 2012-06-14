<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Liste des membres</title>
<!--                       CSS                       -->
<!-- Main Stylesheet -->
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
</head>
<body id="login">
<div id="login-wrapper" class="png_bg">
  <div id="login-top">
    <h1>Liste des membres de l'association</h1>
    <!-- Logo (221px width) -->
    <img id="logo" src="resources/images/logo_bde.png" alt="UTC logo" /></div>
  <!-- End #logn-top -->
  <div class="tab-content default-tab" id="tab1">
          <!-- This is the target div. id must match the href of this div's tab -->
		  <h2> Voilà la liste des membres dans la association.</h2>
          <table>
            <thead>
              <tr>
				<th>Nom d'association</th>
                <th>Num d'etudiant</th>
				<th>Nom</th>
				<th>Prenom</th>
              </tr>
            </thead>
            <tbody>
			<?php
				session_start();
				include "connect.php";
				$vConn = fConnect();
				$vlogin=$_SESSION["login"];
				$vSql1 = "SELECT nomAsso FROM Periode
						WHERE numEtu = '$vlogin';";
				$vQuery1=pg_query($vConn, $vSql1);
				while($vResult1 = pg_fetch_array($vQuery1)){
					$vNomAsso=$vResult1[0];				
					$vSql ="SELECT numEtudiant,nom,Prenom 
							FROM Membre M , Periode P
							WHERE M.numEtudiant = P.numEtu 
							AND P.nomAsso LIKE '$vNomAsso';";
					$vQuery=pg_query($vConn, $vSql);
					while ($vResult = pg_fetch_array($vQuery)) {
						echo "<tr>";
						echo "<td>$vNomAsso</td>";
						echo "<td>$vResult[0]</td>";
						echo "<td>$vResult[1]</td>";
						echo "<td>$vResult[2]</td>";
						echo "</tr>";
					}
				}
			?>
            </tbody>
          </table>
		  <h2> Voilà la liste des dirigeant dans la association.</h2>
          <table>
            <thead>
              <tr>
				<th>Nom d'association</th>
				<th>Nom du membre </th>
				<th>Dirigeant</th> 
              </tr>
            </thead>
            <tbody>
			<?php
				$vConn = fConnect();
				$vlogin=$_SESSION["login"];
				$vSql1 = "SELECT nomAsso FROM Periode
						WHERE numEtu = '$vlogin';";
				$vQuery1=pg_query($vConn, $vSql1);
				while($vResult1 = pg_fetch_array($vQuery1)){
					$vNomAsso=$vResult1[0];
					$vSql ="SELECT D.numEtu,D.Types 
							FROM Dirigeant D , Association A
							WHERE D.nomAsso = A.nom 
							AND D.nomAsso LIKE '$vNomAsso';";
					$vQuery=pg_query($vConn, $vSql);
					while ($vResult = pg_fetch_array($vQuery)) {
						echo "<tr>";
						echo "<td>$vNomAsso</td>";
						echo "<td>$vResult[0]</td>";
						echo "<td>$vResult[1]</td>";
						echo "</tr>";
					}
				}
			?>
            </tbody>
          </table>
        </div>
		<p>
			<a class="button" href="supprimer_membre_association.html">Supprimer un membre</a>
		</p>
		<p>
			<a class="button" href="ajouter_membre_association.html">Ajouter un membre</a>
		</p>
		<p>
			<a class="button" href="login_bde.html">Return to main page</a>
		</p>
  <!-- End #login-content -->
</div>
<!-- End #login-wrapper -->
</body>
</html>
