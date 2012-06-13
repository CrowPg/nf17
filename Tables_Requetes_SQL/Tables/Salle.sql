CREATE TYPE numSalle AS ENUM ('200','201','202','203','204','205');

CREATE TABLE Salle(
	numero numSalle PRIMARY KEY
)