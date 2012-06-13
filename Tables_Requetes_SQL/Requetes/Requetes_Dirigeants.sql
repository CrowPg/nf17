/* Fonction commune à l'ensemble des dirigeants*/

	/*Liste des membres*/
	SELECT nom,prenom
	FROM Periode P INNER JOIN Membre M
	ON P.numEtu = M.numEtudiant
	AND P.nomAsso LIKE''
	AND dateDebut >= ''
	AND dateFin <= '';
	
	/* Liste des dirigeants*/
	SELECT idDirigeant,nom,prenom,types
	FROM dirigeant D INNER JOIN Membre M
	ON D.numEtu = M.numEtudiant
	AND D.nomAsso LIKE ''
	AND dateDebut >= ''
	AND dateFin <= '';
 
/*President des associations*/

	/* Tous les fonctions adherents BDE */
	
	/* Ajouter et supprimer des membres de lassociation */
	INSERT INTO Periode(numEtu,nomAsso,dateDebut,dateFin)
	VALUES (,,,);

	DELETE FROM PERIODE
	WHERE numEtu LIKE ''
	AND nomAsso LIKE '';
	
/*Tresorier des associations*/

	/* Tous les fonctions adherents BDE */
	
	/* Consulter larchive des compatibilités de lassociation */

	UPDATE Comptabilite
	SET SoldeFin = 
	(SELECT SUM(Total) 
	FROM 
	(SELECT SUM(montant) As Total
	FROM Recette
	WHERE ('2009-05-01'< dateRecette AND '2009-05-31'>dateRecette) /* Mettre dateDebut/dateFin (1er et dernier du mois) */
	UNION ALL
	SELECT SUM(montant) As Total /* Entrer les dépenses négativement */
	FROM Service
	WHERE ('2009-05-01'<dateAchat AND '2009-05-31'>dateAchat) 
	UNION ALL
	SELECT SUM(montant) As Total  /* Entrer les dépenses négativement */
	FROM Materiel
	WHERE ('2009-05-01'<dateAchat AND '2009-05-31'>dateAchat) 
	)As Bilan)
	WHERE dateDebut = '2009-05-01'

	SELECT dateDebut,dateFin,soldeDebut,soldefin
	FROM Comptabilite
	WHERE dateDebut = '2009-05-01';

	/* Inserer une instance dans la classe comptabilite _ mensuel */
	INSERT INTO Comptabilite(dateDebut,dateFin,soldeDebut,idDirgeant,idComptabilite)
	VALUES (,,,,);
	
	/* Ajouter, supprimer, modifier une recette pour lassociation */
	INSERT INTO Recette(id,types,dateRecette,montant,dateComptabilite)
	VALUES (,,,,);
	
	DELETE FROM Recette
	WHERE id = ;
	
	UPDATE Recette
	SET montant =
	WHERE id = ;
	
	/* Ajouter, supprimer, modifier une dépense pour lassociation */
		/* Service */
	INSERT INTO Service(id,dateAchat,montant,nom,quantite,types)
	VALUES (,,,,);
	
	DELETE FROM Service
	WHERE id = ;
	
	UPDATE Service
	SET montant = , id = , types = , dateRecette =  /* Ajouter les autres attributs si l'on souhaite apporter des modifications*/
	WHERE id = ;
		
		/* Materiel */
	INSERT INTO Materiel(id,dateAchat,montant,nom,quantite,types,dateMiseHorsService,num,numEtu)
	VALUES (,,,,,,,,);
	
	DELETE FROM Materiel
	WHERE id = ;
	
	UPDATE Materiel
	SET id,= dateAchat = ,montant = ,nom =,quantite =,types =,dateMiseHorsService =,num =,numEtu =/* Ajouter les autres attributs si l'on souhaite apporter des modifications*/
	WHERE id = ;

		/* Bilan */
		
	SELECT S.dateAchat, S.montant, S.nom, S.quantite, S.types
	FROM Service S, Comptabilite C, Dirigeant D
	WHERE S.idComptabilite= C.idComptabilite
	AND C.idDirigeant = D.idDirigeant
	AND nomAsso LIKE 'asso2'
	AND ''<dateAchat AND ''>dateachat; /*Inscire dateDebut dateFin*/
	
	SELECT M.dateAchat, M.montant, M.nom, M.quantite, M.types
	FROM Materiel M, Comptabilite C, Dirigeant D
	WHERE M.idComptabilite= C.idComptabilite
	AND C.idDirigeant = D.idDirigeant
	AND nomAsso LIKE ''
	AND ''<dateAchat AND ''>dateachat
	
	SELECT R.dateRecette, R.montant, R.types
	FROM Recette R, Comptabilite C, Dirigeant D
	WHERE R.idComptabilite= C.idComptabilite
	AND C.idDirigeant = D.idDirigeant
	AND nomAsso LIKE ''
	AND ''<dateRecette AND ''>dateRecette;	
	
	SELECT SUM(Total) 
	FROM 
	(SELECT SUM(montant) As Total
	FROM Recette
	WHERE ('2009-05-01'< dateRecette AND '2009-05-31'>dateRecette) /* Mettre dateDebut/dateFin (1er et dernier du mois) */
	UNION ALL
	SELECT SUM(montant) As Total /* Entrer les dépenses négativement */
	FROM Service
	WHERE ('2009-05-01'<dateAchat AND '2009-05-31'>dateAchat) 
	UNION ALL
	SELECT SUM(montant) As Total /* Entrer les dépenses négativement */
	FROM Materiel
	WHERE ('2009-05-01'<dateAchat AND '2009-05-31'>dateAchat) 
	)As Bilan;
	
	
/*Secrétaires des associations*/
		
	/* Tous les fonctions adherents BDE */
	
	/* Consulter la liste des salles disponibles pour la location */
	SELECT numero
	FROM Salle
	WHERE numero NOT IN
	(SELECT num
	FROM Location
	WHERE dateDebut<(SELECT current_date) AND dateFin>(SELECT current_date));
	
	
	/* Demander une location de salle */
	UPDATE Location /* Il faut que toutes les salles soient déjà présentes*/ 
	SET dateDebut = ,dateFin = ,nomAsso = ,motif = ,types = 
	WHERE num = ;
