/* Tous les fonctions adherents BDE sans restriction*/
	
	/* Consulter la liste des membres et des dirigeants de n'importe quelle association*/
	SELECT numEtudiant,nom,Prenom 
	FROM Membre M , Periode P
	WHERE M.numEtudiant = P.numEtu
	AND P.nomAsso LIKE ''; /*Mettre le nom de l'association*/

	/* Rédiger les rapports de n'importe quelle association (Ici il s'agit uniquement d'un dépôt */
	INSERT INTO Rapport(id,titre,dateRapport,nomAsso)
	VALUES();

	/* Consulter l'archive des rapports de n'importe quelle association */
	SELECT titre,dateRapport
	FROM Rapport
	WHERE nomAsso LIKE ''; /*Mettre le nom de l'association*/
	
	
 /* Archives des membres du BDE*/
SELECT *
FROM Membre;
 
/* Ajouter, supprimer, modifier des membres du BDE */
 
INSERT INTO Membre(numEtudiant,nom,adresse,prenom,dateDeNaissance)
VALUES (,,,,);

DELETE FROM Membre
WHERE id = ;
	
UPDATE Membre
SET  nom = ,adresse = ,prenom = ,dateDeNaissance = /*Mettre numEtudiant?*/
WHERE numEtudiant = ;
	
 /* Lister les membres non à jour dans leurs cotisation */ /* Le visiteur entre-il dans la base en ayant cotisé*/
 
 SELECT numEtudiant,nom,prenom
 FROM AnneeDeCotisation INNER JOIN Membre
 ON numEtu = numEtudiant
 AND (SELECT EXTRACT (YEAR FROM annee)) <> (SELECT EXTRACT (YEAR FROM current_date));  /* Comment faire pour extraire l'annee de la date en cours */
 
 /* Ajouter,supprimer ou modifier une association */
 
INSERT INTO Association(nom)
VALUES ();

DELETE FROM Association
WHERE nom = ;
	
UPDATE Association
SET  nom = 
WHERE nom = ;















