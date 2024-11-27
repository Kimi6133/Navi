CREATE USER IF NOT EXISTS 'navi'@'localhost' IDENTIFIED BY 'new_user_pass';
GRANT ALL PRIVILEGES ON *.* TO 'navi'@'localhost';
FLUSH PRIVILEGES;

-- INSERT INTO utilisateur (id_user, nom_user, mdp_hash, email, id_classe) 
-- VALUES (1, 'nom_utilisateur', SHA2('mot_de_passe', 256), 'email@exemple.com', 1);
