CREATE TABLE Rediger(
	id CHAR(5) REFERENCES Rapport(id),
	numEtudiant CHAR(11) REFERENCES Membre(numEtudiant),
	PRIMARY KEY (id,numEtudiant)
	
	);