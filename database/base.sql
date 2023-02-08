CREATE DATABASE echanges;
USE echanges;

CREATE TABLE utilisateurs(
     id INTEGER PRIMARY KEY auto_increment,
     nom VARCHAR(25),
     email VARCHAR(30),
     mot_de_passe VARCHAR(25),
     is_admin BOOLEAN 
);

CREATE TABLE categories(
     id INTEGER auto_increment PRIMARY KEY,
     nom VARCHAR(20)
);

CREATE TABLE objets(
     id INTEGER auto_increment PRIMARY KEY,
     nom VARCHAR(20),
     quantites INTEGER,
     prix DOUBLE PRECISION,
     id_utilisateurs INTEGER REFERENCES utilisateurs(id),
     id_categories INTEGER REFERENCES categories(id)
);

CREATE TABLE objets_images(
     id INTEGER auto_increment PRIMARY KEY,
     nom_images VARCHAR(20),
     id_objets INTEGER REFERENCES objets(id)
);

CREATE TABLE propositions(
     id INTEGER auto_increment PRIMARY KEY,
     id_objets1 INTEGER REFERENCES objets(id),
     quantites1 INTEGER,
     id_objets2 INTEGER REFERENCES objets(id),
     quantites2 INTEGER,
     id_utilisateurs1 INTEGER REFERENCES utilisateurs(id),
     id_utilisateusrs2 INTEGER REFERENCES utilisateurs(id), 
     dates DATETIME
);

CREATE TABLE acceptations(
     id INTEGER auto_increment PRIMARY KEY,
     id_propositions INTEGER REFERENCES propositions(id),
     dates DATETIME
);

CREATE TABLE refus(
     id INTEGER auto_increment PRIMARY KEY,
     id_propositions INTEGER REFERENCES propositions(id),
     dates DATETIME
); 

insert into utilisateurs values(null,"Mirlin","mirlin@gmail.com","mirlin",FALSE);
insert into utilisateurs values(null,"Jaona","jaona@gmail.com","jaona",FALSE);
insert into utilisateurs values(null,"Nancy","nancy@gmail.com","nancy",FALSE);
insert into utilisateurs values(null,"Madama","madama@gmail.com","madama",true);


insert into categories values(null,"PPN");
insert into categories values(null,"Voiture");
insert into categories values(null,"Vetements");
insert into categories values(null,"appareils"); 

insert into objets values(null,"sucre",2,3400,1,1);
insert into objets values(null,"toyota",1,100400000,1,2);
insert into objets values(null,"machine a laver",1,100400000,1,4);
insert into objets values(null,"aspirateur",1,240000,1,4); 

insert into objets values(null,"bougie",5,500,2,1);
insert into objets values(null,"peugeot",1,20500000,2,2);
insert into objets values(null,"tee-shirt",3,35000,2,3); 

insert into objets values(null,"sakay",1,2500,3,1);
insert into objets values(null,"tee-shirt",5,35000,3,3); 

insert into objets_images values(); 

insert into propositions values(null,1,1,1,1,1,2,"2023-02-08 12:20:00");
insert into propositions values(null,2,1,2,1,2,3,"2023-02-08 12:20:00");
insert into propositions values(null,1,1,3,1,1,3,"2023-02-08 12:20:00");

insert into acceptations values(null,1,"2023-02-08 12:20:00");
insert into acceptations values(null,2,"2023-02-10 08:00:00");

insert into refus values(null,3,"2023-02-08 20:20:00");

