/*CREATE DATABASE forum;*/

/*CREATE TABLE utilisateur(
	id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(255),
    pword VARCHAR(255),
    email VARCHAR(255),
    photo VARCHAR(255)
)engine=InnoDB;
*/
CREATE TABLE message(
    user VARCHAR(255),
    datecreate DATETIME,
    titre VARCHAR(255),
    texte VARCHAR(255),
    zone VARCHAR(255)
)engine=InnoDB;
/*
CREATE TABLE repmessage(
    user VARCHAR(255),
    datecreate DATETIME,
    texte VARCHAR(255),
    zone VARCHAR(255),
    topic VARCHAR(255)
)engine=InnoDB;
