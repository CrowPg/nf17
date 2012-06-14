CREATE TABLE Service(
	id CHAR(5) PRIMARY KEY,
	dateAchat DATE,
	montant NUMERIC,
	nom VARCHAR(30),
	quantite INTEGER,
	types VARCHAR(30),
	idComptabilite INTEGER REFERENCES Comptabilite(idComptabilite)
	);
	