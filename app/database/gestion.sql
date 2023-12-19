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
     ib int PRIMARY key AUTO_INCREMENT,
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

