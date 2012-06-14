CREATE TYPE nomPeriode AS ENUM ('PeriodesLongues','PeriodesCourtes');

CREATE TABLE Location(
	num numSalle,
	dateDebut DATE UNIQUE NOT NULL,
	dateFin DATE,
	nomAsso VARCHAR(30) REFERENCES Association(nom),
	motif VARCHAR(30),
	types nomPeriode,
	PRIMARY KEY(num, nomAsso),
	FOREIGN KEY (num) REFERENCES Salle(numero),
	CHECK(dateDebut<dateFin)
);


CREATE VIEW PeriodesLongues(dateDebut,dateFin,nomAsso,num)
AS SELECT dateDebut,dateFin,nomAsso,num
FROM Location
WHERE types = 'PeriodesLongues';

CREATE VIEW PeriodesCourtes(dateDebut,dateFin,nomAsso,num,motif)
AS SELECT dateDebut,dateFin,nomAsso,num,motif
FROM Location
WHERE types = 'PeriodesCourtes';