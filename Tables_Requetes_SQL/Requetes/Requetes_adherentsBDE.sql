/* Adhesion a une association */.

INSERT INTO Periode(numEtu,nomAsso,dateDebut,dateFin)
VALUES (,,,);

/* Parcourir la liste des associations*/

SELECT *
FROM Association;

/* Consulter la liste des membres et des dirigeants de l'association à laquelle ils appartiennent*/

SELECT numEtudiant,nom,Prenom 
FROM Membre M , Periode P
WHERE M.numEtudiant = P.numEtu
AND P.nomAsso LIKE ''; /*Mettre le nom de l'association*/

/* Rédiger les rapports à laquelle ils appartiennent (Ici il s'agit uniquement d'un dépôt */

INSERT INTO Rapport(id,titre,dateRapport,nomAsso)
VALUES(,,,);

/* Consulter l'archive des rapports de l'association à laquelle ils appartiennent */

SELECT titre,dateRapport
FROM Rapport
WHERE nomAsso LIKE ''; /*Mettre le nom de l'association*/
 