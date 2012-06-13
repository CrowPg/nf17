CREATE TABLE AnneeDeCotisation(
	numEtu CHAR(11),
	annee DATE ,
	PRIMARY KEY(numEtu,annee),
	FOREIGN KEY (numEtu) REFERENCES Membre(numEtudiant)
);