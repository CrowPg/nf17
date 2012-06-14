<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Liste des associations</title>
<!--                       CSS                       -->
<!-- Main Stylesheet -->
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
</head>
<body id="login">
<div id="login-wrapper" class="png_bg">
  <div id="login-top">
    <h1>Liste des associations</h1>
    <!-- Logo (221px width) -->
    <img id="logo" src="resources/images/logo_bde.png" alt="UTC logo" /></div>
  <!-- End #logn-top -->
  <div class="tab-content default-tab" id="tab1">
          <!-- This is the target div. id must match the href of this div's tab -->
		  <h2> Voil� la liste d'associations dans le BDE.</h2>
          <table><center>
            <thead>
              <tr>
                <th>Nom d'association</th>
              </tr>
            </thead>
            <tbody>
			<?php
				include "connect.php";
				$vConn = fConnect();
				$vSql ="SELECT * FROM Association;";
				$vQuery=pg_query($vConn, $vSql);
				while ($vResult = pg_fetch_array($vQuery)) {
					echo "<tr>";
					echo "<td>$vResult[0]</td>";
					echo "</tr>";
				}
			?>
            </tbody>
          </table>
        </div>
		<p>
			<a class="button" href="login_bde.html">Return to main page</a>
		</p>
  <!-- End #login-content -->
</div>
<!-- End #login-wrapper -->
</body>
</html>