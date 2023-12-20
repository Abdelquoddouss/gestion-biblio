CREATE DATABASE biblio;

CREATE TABLE users(
    id int PRIMARY KEY AUTO_INCREMENT,
    fullname VARCHAR(255),
    lastname VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    phone VARCHAR(255),
);

CREATE Table Role(
    id int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
);

CREATE TABLE User_Role(
    id int PRIMARY KEY AUTO_INCREMENT,
    users_id int,
    Role_id int,
    Foreign Key ( users_id) REFERENCES  users(id) on DELETE CASCADE on UPDATE CASCADE,
    Foreign Key ( Role_id) REFERENCES  Role(id) on DELETE CASCADE on UPDATE CASCADE
);

CREATE TABLE Book(
     id int PRIMARY key AUTO_INCREMENT,
     title VARCHAR(255),
     author VARCHAR(255),
     genre varchar(255),
     description varchar(255),
     publicatin_year date ,
     total_copies int,
     available_copies int 
);


CREATE Table Reservation(
    id int  PRIMARY key AUTO_INCREMENT,
    description VARCHAR(255),
    reservation_date date,
    return_date date,
    is_returned int,
    users_id int,
    Book_id int,
    Foreign Key ( users_id) REFERENCES  users(id) on DELETE CASCADE on UPDATE CASCADE,
    Foreign Key ( Book_id) REFERENCES  Book(id) on DELETE CASCADE on UPDATE CASCADE
);

INSERT INTO `role`( `name`) 
VALUES ('admin'),
       ('utilisateur'),

       INSERT INTO `users_role`( `users_id`, `Role_id`) 
VALUES ('6','1'),
       ('5','2')

       SELECT * from users
INNER JOIN users_role
ON users.id=users_role.users_id INNER join role on role.id = users_role.Role_id;





INSERT INTO `book`(`id`, `title`, `author`, `genre`, `description`, `publicatin_year`, `total_copies`, `available_copies`)

VALUES ('le petit prince','antonie','d enfant','Le Petit Prince est un célèbre roman écrit par Antoine de Saint-Exupéry. Il raconte lhistoire dun petit garçon extraterrestre qui visite différentes planètes et rencontre divers personnages, dont un renard et un roi.','12/12/2022','100','NACHER MAROC'),

       ('BURN AFTER WRITING','ali','grand','Burn After Writing est un livre interactif écrit par Sharon Jones. Il propose une série de questions et de prompts pour inciter les lecteurs à réfléchir sur leurs émotions, leurs expériences et leurs aspirations. ','12/1/2022','200','NACHER MAROC'),
       
       ('Le chateau des trompe l oeil','hmed','lhama9','Le Château des Trompe-lœil est un roman de Jean-Pierre Gattégno. Lhistoire se déroule dans un village français où un étrange château apparaît mystérieusement.','12/12/2023','140','NACHER MAROC'),
       
       ('JOE','abass','BETITE','Joe est un roman de David Foenkinos qui a remporté le Prix Goncourt des Lycéens. Il raconte lhistoire dun homme ordinaire, Joe, qui travaille dans une agence de voyages et mène une vie banale.','12/2/20223','300','NACHER MAROC'),
       
       ('Prix goncourt des lyceens','TOUS','si mstapha','Les Trois Mousquetaires est un roman classique écrit par Alexandre Dumas. Lhistoire se déroule en France au XVIIe siècle et suit les aventures de dArtagnan, un jeune homme ambitieux qui rejoint les mousquetaires du roi Louis XIII. ','12/12/2022','500','NACHER MAROC'),
       
       ('Les trois mousquetaires','TOUS','HOWA','Notre-Dame de Paris est un célèbre roman de Victor Hugo, publié en 1831. Lhistoire se déroule à Paris au XVe siècle et met en scène le personnage de Quasimodo, le sonneur de cloches de la cathédrale Notre-Dame.','12/2/2023','700','NACHER MAROC'),
       
       ('une si longue absence','ENFANT','ana','Une si longue absence est un roman écrit par Philippe Besson. Lhistoire se déroule dans les années 1950 et suit le personnage principal, Jacques, un jeune homme qui revient dans son village natal après avoir passé plusieurs années en pensionnat. ','12/1/2023','80','NACHER MAROC'),
       
       ('Jules verne','TOUT','NABIL','Jules Verne était un écrivain français du XIXe siècle, connu pour ses romans daventures et de science-fiction qui ont marqué la littérature mondiale. Il est considéré','12/12/2024','600','NACHER MAROC'),
       
       ('Notre damede Paris','+18 GRAND','victor higo','Notre-Dame de Paris" est lun des romans les plus célèbres de Victor Hugo, publié en 1831. Le livre se déroule à Paris au XVe siècle et met en scène plusieurs personnages, dont le bossu Quasimodo, la belle bohémienne Esmeralda et larchidiacre Frollo.','12/2/2024','200','NACHER MAROC')