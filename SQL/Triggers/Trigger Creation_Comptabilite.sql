CREATE OR REPLACE TRIGGER Crea_Compta
AFTER INSERT ON Comptabilite
DECLARE
	trop_tot EXCEPTION;
	date_fin DATE;
	solde NUMERIC;
BEGIN
	SELECT c1.soldeCourant INTO solde
	FROM Comptabilite c1
	WHERE c1.idDirigeant=:new.idDirigeant AND c1.dateFin=(SELECT MAX(dateFin) FROM Comptabilite GROUP BY (idDirigeant););