CREATE TABLE Periode(
	numEtu CHAR(11),
	nomAsso VARCHAR(30),
	dateDebut DATE,
	dateFin DATE,
	PRIMARY KEY(numEtu,nomAsso),
	FOREIGN KEY (numEtu) REFERENCES Membre(numEtudiant),
	FOREIGN KEY (nomAsso) REFERENCES Association(nom),
	CHECK(dateDebut<dateFin)
);