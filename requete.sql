INSERT INTO category(id, name) 
VALUES(NULL, "Renaissance"),
(NULL, "Baroque"),
(NULL, "Classique"),
(NULL, "Rococo"),
(NULL, "Romantisme"),
(NULL, "réalisme"),
(NULL, "abstrait");

INSERT INTO technique(id, name)
VALUES(NULL, "Peinture à l'huile"),
(NULL, "fresque"),
(NULL, "tempera"),
(NULL, "fusain"),
(NULL, "aquarelle");


CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(100) NOT NULL UNIQUE,
    type VARCHAR(255) NOT NULL
);