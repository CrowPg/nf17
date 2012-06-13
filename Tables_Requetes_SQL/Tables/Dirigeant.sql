CREATE TYPE Poste AS ENUM ('Secretaire','President','Tresorier');

CREATE TABLE Dirigeant(
	idDirigeant CHAR(10) PRIMARY KEY,
	dateDebut DATE,
	dateFin DATE,
	numEtu CHAR(11) REFERENCES Membre(numEtudiant) UNIQUE NOT NULL ,
	nomAsso VARCHAR(30) REFERENCES Association(nom)NOT NULL,
	types Poste
	);
	
CREATE VIEW Secretaire(dateDebut,dateFin, numEtu, nomAsso)
AS SELECT dateDebut,dateFin, numEtu, nomAsso
FROM Dirigeant
WHERE types = 'Secretaire';

CREATE VIEW President(dateDebut,dateFin, numEtu, nomAsso)
AS SELECT dateDebut,dateFin, numEtu, nomAsso
FROM Dirigeant
WHERE types ='President';

CREATE VIEW Tresorier(dateDebut,dateFin, numEtu, nomAsso)
AS SELECT dateDebut,dateFin, numEtu, nomAsso
FROM Dirigeant
WHERE types = 'Tresorier';