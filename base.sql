create database ETU004210-ETU004287
create table membre(
    id_membre INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    datedenaissance DATE,
    genre VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    ville VARCHAR(100) NOT NULL,
    mdp VARCHAR(100) NOT NULL
    image_profil VARCHAR(100),
);

create table categorie_objet(
    id_categorie INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL
);

create table objet(
    id_objet INT AUTO_INCREMENT PRIMARY KEY,
    nom_objet VARCHAR(50) NOT NULL,
    id_categorie INT NOT NULL,
    id_membre INT NOT NULL
);

create table image_objet(
    id_image INT AUTO_INCREMENT PRIMARY KEY,
    id_objet  INT NOT NULL,
    nom_image VARCHAR(100) NOT NULL
);

create table emprunt(
    id_emprunt INT AUTO_INCREMENT PRIMARY KEY,
    id_objet  INT NOT NULL,
    id_membre INT NOT NULL,
    date_emprunt DATE,
    date_retour DATE
)

insert into membre values ("Palmer",'1998-02-25','M',"colepalmer@gmail.com","chelsea","palmer","image.jpg");
insert into membre values ("Neves",'1998-03-25','M',"joaoneves@gmail.com","paris","neves","image2.jpg");
insert into membre values ("Dembele",'1998-04-25','M',"ousmandembele@gmail.com","paris","dembele","image3.jpg");
insert into membre values ("Cucurella",'1998-05-25','M',"cucurella@gmail.com","chelsea","cucurella","image4.jpg");

insert into categorie_objet values ("Esthetique");
insert into categorie_objet values ("Bricolage");
insert into categorie_objet values ("Mecanique");
insert into categorie_objet values ("Cuisine");

insert into objet values ("miroir",1,1);
insert into objet values ("poele",4,1);
insert into objet values ("tournevis",3,1);
insert into objet values ("peinture",1,1);
insert into objet values ("compresseur",3,1);
insert into objet values ("casserole",4,1);
insert into objet values ("marteau",2,1);
insert into objet values ("tapis",1,1);
insert into objet values ("amortisseur",3,1);
insert into objet values ("mixeur",4,1);

insert into objet values ("bougie",1,2);
insert into objet values ("spatule",4,2);
insert into objet values ("tournevis",3,2);
insert into objet values ("peinture",1,2);
insert into objet values ("compresseur",3,2);
insert into objet values ("casserole",4,2);
insert into objet values ("marteau",2,2);
insert into objet values ("tapis",1,2);
insert into objet values ("amortisseur",3,2);
insert into objet values ("mixeur",4,2);

insert into objet values ("bougie",1,3);
insert into objet values ("spatule",4,3);
insert into objet values ("tournevis",3,3);
insert into objet values ("peinture",1,3);
insert into objet values ("compresseur",3,3);
insert into objet values ("casserole",4,3);
insert into objet values ("marteau",2,3);
insert into objet values ("tapis",1,3);
insert into objet values ("amortisseur",3,3);
insert into objet values ("mixeur",4,3);

insert into objet values ("bougie",1,4);
insert into objet values ("spatule",4,4);
insert into objet values ("tournevis",3,4);
insert into objet values ("peinture",1,4);
insert into objet values ("compresseur",3,4);
insert into objet values ("casserole",4,4);
insert into objet values ("marteau",2,4);
insert into objet values ("tapis",1,4);
insert into objet values ("amortisseur",3,4);
insert into objet values ("mixeur",4,4);