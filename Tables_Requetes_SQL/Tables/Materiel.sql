CREATE TYPE typemateriel AS ENUM ('materieldurable','marchandise');

CREATE TABLE Materiel(
	id CHAR(5) PRIMARY KEY,
	dateAchat DATE,
	montant NUMERIC,
	nom VARCHAR(30),
	quantite INTEGER,
	types typemateriel,
	dateMiseHorsService DATE,
	num numSalle NOT NULL REFERENCES Salle(numero),
	numEtu char(11) NOT NULL REFERENCES Membre (numEtudiant),
	idComptabilite INTEGER REFERENCES Comptabilite(idComptabilite)
	);
	