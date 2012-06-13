CREATE OR REPLACE TRIGGER Maj_Compta_Recette
AFTER INSERT ON Recette
FOR EACH ROW
DECLARE
	fin_exercice EXCEPTION;
	date_fin_exercice DATE;
	
BEGIN
	UPDATE Comptabilite c
		SET c.soldeCourant = c.soldeCourant + :new.montant
		WHERE c.idComptabilite = :new.idComptabilite;
	SELECT dateFin INTO date_fin_exercice
		FROM Comptabilite
		WHERE Comptabilite.idComptabilite=:new.idComptabilite;
	IF :new.DateRecette > date_fin_exercice then
		RAISE fin_exercice;
	END IF;
END;

CREATE OR REPLACE TRIGGER Maj_Compta_Service
AFTER INSERT ON Service
FOR EACH ROW
DECLARE
	fin_exercice EXCEPTION;
	date_fin_exercice DATE;
	
BEGIN
	UPDATE Comptabilite c
		SET c.soldeCourant = c.soldeCourant - :new.montant
		WHERE c.idComptabilite = :new.idComptabilite;
	SELECT dateFin INTO date_fin_exercice
		FROM Comptabilite
		WHERE Comptabilite.idComptabilite=:new.idComptabilite;
	IF :new.DateRecette > date_fin_exercice then
		RAISE fin_exercice;
	END IF;
END;

CREATE OR REPLACE TRIGGER Maj_Compta_Materiel
AFTER INSERT ON Materiel
FOR EACH ROW
DECLARE
	fin_exercice EXCEPTION;
	date_fin_exercice DATE;
	
BEGIN
	UPDATE Comptabilite c
		SET c.soldeCourant = c.soldeCourant - :new.montant
		WHERE c.idComptabilite = :new.idComptabilite;
	SELECT dateFin INTO date_fin_exercice
		FROM Comptabilite
		WHERE Comptabilite.idComptabilite=:new.idComptabilite;
	IF :new.DateRecette > date_fin_exercice then
		RAISE fin_exercice;
	END IF;
END;