CREATE TABLE Recette(
	id char(5) PRIMARY KEY,
	types VARCHAR(20),
	dateRecette DATE,
	montant NUMERIC,
	idComptabilite INTEGER UNIQUE NOT NULL,
	FOREIGN KEY (idComptabilite) REFERENCES Comptabilite(idComptabilite)
	);