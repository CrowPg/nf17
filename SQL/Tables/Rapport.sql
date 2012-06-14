CREATE TABLE Rapport(
	id CHAR(5),
	titre VARCHAR(30),
	dateRappport DATE,
	nomAsso VARCHAR(30) NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY (nomAsso) REFERENCES Association(nom)
);