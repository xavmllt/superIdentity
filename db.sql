CREATE TABLE avis(
   id INT,
   pseudo VARCHAR(50),
   email VARCHAR(50),
   commentaire VARCHAR(50),
   PRIMARY KEY(id)
);

CREATE TABLE Compte(
   id VARCHAR(50),
   PRIMARY KEY(id)
);

CREATE TABLE visiteurs(
   id VARCHAR(50),
   id_1 VARCHAR(50),
   PRIMARY KEY(id),
   FOREIGN KEY(id_1) REFERENCES Compte(id)
);

CREATE TABLE utilisateurs(
   id INT,
   pseudo VARCHAR(25),
   email VARCHAR(50),
   password VARCHAR(50),
   id_1 VARCHAR(50) NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_1) REFERENCES Compte(id)
);

CREATE TABLE messagerie(
   id INT,
   message TEXT,
   id_1 INT,
   PRIMARY KEY(id),
   FOREIGN KEY(id_1) REFERENCES utilisateurs(id)
);

CREATE TABLE admin(
   id INT,
   pseudo VARCHAR(25),
   password VARCHAR(50),
   id_1 INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_1) REFERENCES messagerie(id)
);

CREATE TABLE Mettre(
   id VARCHAR(50),
   id_1 INT,
   PRIMARY KEY(id, id_1),
   FOREIGN KEY(id) REFERENCES visiteurs(id),
   FOREIGN KEY(id_1) REFERENCES avis(id)
);

CREATE TABLE Gerer(
   id INT,
   id_1 VARCHAR(50),
   PRIMARY KEY(id, id_1),
   FOREIGN KEY(id) REFERENCES admin(id),
   FOREIGN KEY(id_1) REFERENCES Compte(id)
);