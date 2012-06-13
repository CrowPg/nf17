<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Liste des depenses</title>
<!--                       CSS                       -->
<!-- Main Stylesheet -->
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
</head>
<body id="login">
<div id="login-wrapper" class="png_bg">
  <div id="login-top">
    <h1>Liste des depenses de l'association</h1>
    <!-- Logo (221px width) -->
    <img id="logo" src="resources/images/logo_bde.png" alt="UTC logo" /></div>
  <!-- End #logn-top -->
  <div class="tab-content default-tab" id="tab1">
          <!-- This is the target div. id must match the href of this div's tab -->
		  <h2> Voila liste des depenses dans la association.</h2>
          <table>
            <thead>
              <tr>
				<th>M/S</th>
				<th>Nom d'association</th>
				<th>ID</th>
				<th>Date Achat</th>
				<th>Montant</th>
				<th>Nom</th>
				<th>Quantité</th>
				<th>Type</th>
				<th>DateMiseHorsService</th>				
              </tr>
            </thead>
            <tbody>
			<?php
				session_start();
				include "connect.php";
				$vConn = fConnect();
				$vlogin=$_SESSION["login"];
				$vSql1 = "SELECT P.nomAsso FROM Periode P, Membre M, Dirigeant D
				WHERE P.numEtu = '$vlogin'
				AND P.numEtu = M.numEtudiant
				AND M.numEtudiant = D.numEtu
				AND D.types = 'Tresorier';";
				$vQuery1=pg_query($vConn, $vSql1);
				$vResult1 = pg_fetch_array($vQuery1);
				$vNomAsso=$vResult1[0];
				$vSql ="SELECT D.nomAsso,M.id, M.dateAchat, M.montant,M.nom, M.quantite, M.types, M.dateMiseHorsService
						FROM Materiel M, Comptabilite C, Dirigeant D
						WHERE M.idComptabilite=C.idComptabilite AND C.idDirigeant=D.idDirigeant
						AND D.nomAsso LIKE '$vNomAsso';";
				$vQuery=pg_query($vConn, $vSql);
				while ($vResult = pg_fetch_array($vQuery)) {
					echo "<tr>";
					echo "<td>M</td>";
					echo "<td>$vResult[0]</td>";
					echo "<td>$vResult[1]</td>";
					echo "<td>$vResult[2]</td>";
					echo "<td>$vResult[3]</td>";
					echo "<td>$vResult[4]</td>";
					echo "<td>$vResult[5]</td>";
					echo "<td>$vResult[6]</td>";
					echo "<td>$vResult[7]</td>";
					echo "</tr>";
				}
			?>
			<?php
				$vConn = fConnect();
				$vSql ="SELECT D.nomAsso,S.id,S.dateAchat,S.montant,S.nom,S.quantite,S.types
						FROM Service S, Comptabilite C, Dirigeant D
						WHERE S.idComptabilite=C.idComptabilite AND C.idDirigeant=D.idDirigeant
						AND D.nomAsso LIKE '$vNomAsso';";
				$vQuery=pg_query($vConn, $vSql);
				while ($vResult = pg_fetch_array($vQuery)) {
					echo "<tr>";
					echo "<td>S</td>";
					echo "<td>$vResult[0]</td>";
					echo "<td>$vResult[1]</td>";
					echo "<td>$vResult[2]</td>";
					echo "<td>$vResult[3]</td>";
					echo "<td>$vResult[4]</td>";
					echo "<td>$vResult[5]</td>";
					echo "<td>$vResult[6]</td>";
					echo "<td>$vResult[7]</td>";
					echo "</tr>";
				}
			?>
            </tbody>
          </table>
        </div>
		<p>
			<a class="button" href="ajouter_depense.html">Ajouter une depense</a><a class="button" href="modifier_depense.html">Modifier une dépense</a><a class="button" href="supprimer_dépense.html">Supprimer une depense</a>
		</p>
		<p>
			<a class="button" href="login_bde.html">Return to main page</a>
		</p>
  <!-- End #login-content -->
</div>
<!-- End #login-wrapper -->
</body>
</html>
