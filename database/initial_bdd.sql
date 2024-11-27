-- Création de la base de données
CREATE DATABASE IF NOT EXISTS navi;
USE navi;

CREATE USER IF NOT EXISTS 'navi'@'localhost' IDENTIFIED BY 'nimda';
GRANT ALL PRIVILEGES ON navi.* TO 'navi'@'localhost';
CREATE USER IF NOT EXISTS 'navi'@'%' IDENTIFIED BY 'nimda';
GRANT ALL PRIVILEGES ON navi.* TO 'navi'@'%';
FLUSH PRIVILEGES;
CREATE TABLE classe(
   id_classe INT,
   nom VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_classe)
);

CREATE TABLE devoir(
   id_devoir INT,
   nom VARCHAR(50) NOT NULL,
   matiere VARCHAR(50) NOT NULL,
   statut VARCHAR(50) NOT NULL,
   date_depot DATE NOT NULL,
   date_limite DATE,
   id_classe INT NOT NULL,
   PRIMARY KEY(id_devoir),
   FOREIGN KEY(id_classe) REFERENCES classe(id_classe)
);

CREATE TABLE document(
   id_document INT,
   nom VARCHAR(50) NOT NULL,
   lien VARCHAR(50),
   num_fichier INT,
   nom_original_fichier VARCHAR(50),
   PRIMARY KEY(id_document)
);

CREATE TABLE critere_notation(
   id_critere INT,
   descr VARCHAR(255),
   coefficient INT NOT NULL,
   PRIMARY KEY(id_critere)
);

CREATE TABLE utilisateur(
   id_user INT,
   nom_user VARCHAR(50) NOT NULL,
   mdp_hash VARCHAR(50) NOT NULL,
   email VARCHAR(50) NOT NULL,
   id_classe INT NOT NULL,
   PRIMARY KEY(id_user),
   FOREIGN KEY(id_classe) REFERENCES classe(id_classe)
);

CREATE TABLE rendu_devoir(
   id_rendu_devoir INT,
   date_depot DATE NOT NULL,
   date_corrige DATE,
   note INT NOT NULL,
   commentaire VARCHAR(50),
   id_user INT NOT NULL,
   id_devoir INT NOT NULL,
   PRIMARY KEY(id_rendu_devoir),
   FOREIGN KEY(id_user) REFERENCES utilisateur(id_user),
   FOREIGN KEY(id_devoir) REFERENCES devoir(id_devoir)
);

CREATE TABLE evaluation(
   id_eval INT,
   note DECIMAL(15,2) NOT NULL,
   date_depot DATE NOT NULL,
   id_rendu_devoir INT NOT NULL,
   PRIMARY KEY(id_eval),
   FOREIGN KEY(id_rendu_devoir) REFERENCES rendu_devoir(id_rendu_devoir)
);

CREATE TABLE rendu_doc(
   id_rendu_devoir INT,
   id_document INT,
   PRIMARY KEY(id_rendu_devoir, id_document),
   FOREIGN KEY(id_rendu_devoir) REFERENCES rendu_devoir(id_rendu_devoir),
   FOREIGN KEY(id_document) REFERENCES document(id_document)
);

CREATE TABLE devoir_critere(
   id_devoir INT,
   id_critere INT,
   PRIMARY KEY(id_devoir, id_critere),
   FOREIGN KEY(id_devoir) REFERENCES devoir(id_devoir),
   FOREIGN KEY(id_critere) REFERENCES critere_notation(id_critere)
);

CREATE TABLE critere_eval(
   id_critere INT,
   id_eval INT,
   PRIMARY KEY(id_critere, id_eval),
   FOREIGN KEY(id_critere) REFERENCES critere_notation(id_critere),
   FOREIGN KEY(id_eval) REFERENCES evaluation(id_eval)
);