CREATE DATABASE apylib_faq;

use apylib_faq;

CREATE TABLE users (
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    firstname varchar(50) NOT NULL,
    lastname varchar(50) NOT NULL,
    email varchar(100) NOT NULL,
    password varchar(255) NOT NULL
);

CREATE TABLE passeword_reset (
    id INT PRIMARY KEY AUTO_INCREMENT,
	email VARCHAR(100) NOT NULL,
	token VARCHAR(100) NOT NULL
);

CREATE TABLE questions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    quest TEXT NOT NULL
);
CREATE TABLE reponses (
    id INT PRIMARY KEY AUTO_INCREMENT,
    answer TEXT 
);
CREATE TABLE questions_reponses (
    question_id INT,
    reponse_id INT,
    PRIMARY KEY (question_id, reponse_id),
    FOREIGN KEY (question_id) REFERENCES questions(id),
    FOREIGN KEY (reponse_id) REFERENCES reponses(id)
);

INSERT INTO questions 
(quest)
VALUES
("Apylib c'est quoi ?"),
("Notre projet"),
("Nos services "),
("Nos valeurs "),
("Qui est Apy ?"),
("Documents partagés"),
("Coin des petites annonces"),
("Coin des évènements"),
("Notre Boutique"),
("Notre réseau social");

INSERT INTO reponses 
(answer)
VALUES
("APYLIB est une start-up française dont l’objectif principal est la mise en relation de l’ensemble des acteurs de la santé au travers d’un concept participatif, facilitateur et novateur."),
("Nous voulons être au service des professionnels de santé pour un quotidien plus serein. En redonnant le pouvoir d’agir au travers d’une communauté unique et riche."),
("Retrouvez sur Apylib un réseau social, une boutique, des petites annonces mais aussi tout les ressources dont vous aurez besoin."),
("Le partage, la fiabilité, la bienveillance, la confiance sont nos mots d'ordre"),
("Apy est notre petite mascotte ! Il est né avec comme base notre logo"),
("Vous pouvez retrouvez toute une panoplie de documents qui vont seront utile dans notre rubrique boîte à outil"),
("Potez et resté à l'écoute des petites annonces, on y retrouve du matériels mais également des locaux et autres services."),
("Vous pouvez postez rester au courant des prochains évènement proche de vous"),
("Acheter tout le matériel nécessaire, vous pouvez également créer votre propre boutique et devenir fournisseur"),
("Contacter, discuté avec l'ensemble de la communauté grâce a notre rubrique fils d'actualité. Vous bénificié également d'un espace membre rien qu'à vous !"),
("Apylib est la solution collaborative qui simplifie le quotidien des professionnels en agrégeant les meilleures prestations offres et services."),
("Notre écosystème regroupe une communauté d’intérêt commun, engagée avec un sentiment d’appartenance, d’échange et de partage.");


INSERT INTO questions_reponses 
(question_id, reponse_id)
VALUES
(1, 1),
(1, 11),
(1, 12),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

CREATE TABLE categories (
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    image TEXT NOT NULL
);
CREATE TABLE topics (
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    categorie_id INT,
    sujet TEXT NOT NULL,
    contenu TEXT NOT NULL,
    date_creation datetime,
    resolu BOOLEAN,
    pseudo varchar(250) NOT NULL,
    notif_creator BOOLEAN,
    FOREIGN KEY (categorie_id) REFERENCES categories(id)
);

INSERT INTO categories 
(name, image)
VALUES
("Infirmier/Infirmière", "https://api.iconify.design/uil:comment-alt-medical.svg"),
("Médecin Généraliste", "https://api.iconify.design/la:comment-medical.svg"),
("kinésithérapeute", "https://api.iconify.design/uil:comment-medical.svg");


CREATE TABLE messages (
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    topic_id INT,
    id_post int(11),
    date_post datetime,
    date_edition datetime,
    best_response BOOLEAN,
    contenu TEXT,
    FOREIGN KEY (topic_id) REFERENCES topics(id) 
);
CREATE TABLE suivis (
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_user int(11)
    FOREIGN KEY (topic_id) REFERENCES topics(id),
);

SELECT * FROM topics as t
RIGHT JOIN categories_subcategories as cs
ON t.id = cs.topic_id
RIGHT JOIN categories as c
ON cs.categorie_id = c.id 
RIGHT JOIN subcategories as s
ON cs.subcategorie_id = s.id
WHERE c.id = 2 and s.id = 5