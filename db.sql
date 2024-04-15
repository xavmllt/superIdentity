CREATE TABLE visiteur(
   id INT NOT NULL AUTO_INCREMENT,
   PRIMARY KEY(id)
)engine=InnoDB;

CREATE TABLE avis(
   id INT NOT NULL AUTO_INCREMENT,
   pseudo VARCHAR(50),
   email VARCHAR(50),
   commentaire TEXT,
   PRIMARY KEY(id)
)engine=InnoDB;

CREATE TABLE membre(
   id INT NOT NULL AUTO_INCREMENT,
   pseudo VARCHAR(50),
   email VARCHAR(50),
   pwd VARCHAR(255),
   PRIMARY KEY(id)
)engine=InnoDB;

CREATE TABLE messagerie(
   id INT NOT NULL AUTO_INCREMENT,
   pseudo VARCHAR(50),
   commentaire TEXT,
   PRIMARY KEY(id)
)engine=InnoDB;

CREATE TABLE admin(
   id INT NOT NULL AUTO_INCREMENT,
   pseudo VARCHAR(50),
   password VARCHAR(255),
   PRIMARY KEY(id)
)engine=InnoDB;

CREATE TABLE emettre(
   id INT,
   id_1 INT,
   PRIMARY KEY(id, id_1),
   FOREIGN KEY(id) REFERENCES visiteur(id),
   FOREIGN KEY(id_1) REFERENCES avis(id)
)engine=InnoDB;

CREATE TABLE utiliser(
   id INT,
   id_1 INT,
   PRIMARY KEY(id, id_1),
   FOREIGN KEY(id) REFERENCES membre(id),
   FOREIGN KEY(id_1) REFERENCES messagerie(id)
)engine=InnoDB;

CREATE TABLE gerer(
   id INT,
   id_1 INT,
   PRIMARY KEY(id, id_1),
   FOREIGN KEY(id) REFERENCES messagerie(id),
   FOREIGN KEY(id_1) REFERENCES admin(id)
)engine=InnoDB;