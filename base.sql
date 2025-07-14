create database s2_pr
create table s2_membre(
    id_membre INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    datedenaissance DATE,
    genre VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    ville VARCHAR(100) NOT NULL,
    mdp VARCHAR(100) NOT NULL,
    image_profil VARCHAR(100)
);

create table s2_categorie_objet(
    id_categorie INT AUTO_INCREMENT PRIMARY KEY,
    nom_categorie VARCHAR(50) NOT NULL
);

create table s2_objet(
    id_objet INT AUTO_INCREMENT PRIMARY KEY,
    nom_objet VARCHAR(50) NOT NULL,
    id_categorie INT NOT NULL,
    id_membre INT NOT NULL
);

create table s2_image_objet(
    id_image INT AUTO_INCREMENT PRIMARY KEY,
    id_objet  INT NOT NULL,
    nom_image VARCHAR(100) NOT NULL
);

create table s2_emprunt(
    id_emprunt INT AUTO_INCREMENT PRIMARY KEY,
    id_objet  INT NOT NULL,
    id_membre INT NOT NULL,
    date_emprunt DATE,
    date_retour DATE
);

insert into s2_membre (nom,datedenaissance,genre,email,ville,mdp,image_profil) values ('Palmer','1998-02-25','M','colepalmer@gmail.com','chelsea','palmer','image.jpg'),
                             ('Neves','1998-03-25','M','joaoneves@gmail.com','paris','neves','image2.jpg'),
                             ('Dembele','1998-04-25','M','ousmandembele@gmail.com','paris','dembele','image3.jpg'),
                             ('Cucurella','1998-05-25','M','cucurella@gmail.com','chelsea','cucurella','image4.jpg');

insert into s2_categorie_objet  (nom_categorie) values ('Esthetique'), ('Bricolage'), ('Mecanique'), ('Cuisine');

insert into s2_objet  (nom_objet,id_categorie,id_membre) values ('miroir',1,1)
,('poele',4,1)
,('tournevis',3,1)
,('peinture',1,1)
,('compresseur',3,1)
,('casserole',4,1)
,('marteau',2,1)
,('tapis',1,1)
,('amortisseur',3,1)
,('mixeur',4,1);

insert into s2_objet (nom_objet,id_categorie,id_membre) values ('bougie',1,2)
, ('spatule',4,2)
, ('piston',3,2)
, ('lampe',1,2)
, ('pompe',3,2)
, ('four',4,2)
, ('scie',2,2)
, ('statue',1,2)
, ('courroie',3,2)
, ('passoire',4,2);

insert into s2_objet (nom_objet,id_categorie,id_membre) values ('tableau',1,3)
, ('batteur',4,3)
, ('cric',3,3)
, ('vase',1,3)
, ('roulement',3,3)
, ('grille',4,3)
, ('ponceuse',2,3)
, ('horloge',1,3)
, ('cle',3,3)
, ('planche',4,3);

insert into s2_objet (nom_objet,id_categorie,id_membre) values ('rideaux',1,4)
, ('friteuse',4,4)
, ('jauge',3,4)
, ('guirlande',1,4)
, ('filtre',3,4)
, ('moule',4,4)
, ('agrafeuse',2,4)
, ('paravent',1,4)
, ('allumage',3,4)
, ('cocotte',4,4);

insert into s2_emprunt (id_objet,id_membre,date_emprunt,date_retour) values (1, 1, '1990-01-01', '1990-01-03')
, (2, 2, '1990-01-03', '1990-01-05')
, (3, 3, '1990-01-05', '1990-01-07')
, (4, 4, '1990-01-07', '1990-01-09')
, (5, 1, '1990-01-09', '1990-01-11')
, (6, 2, '1990-01-11', '1990-01-13')
, (7, 3, '1990-01-13', '1990-01-15')
, (8, 4, '1990-01-15', '1990-01-17')
, (9, 1, '1990-01-17', '1990-01-19')
, (10, 2, '1990-01-19', '1990-01-21');