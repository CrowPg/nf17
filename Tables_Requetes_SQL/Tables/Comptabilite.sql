CREATE TABLE Comptabilite(
	dateDebut DATE,
	dateFin DATE,
	soldeDebut NUMERIC,
	idDirigeant CHAR(10) REFERENCES Dirigeant(idDirigeant),
	idComptabilite INTEGER,
	PRIMARY KEY(idComptabilite)
	)
	