CREATE DATABASE CampusLands;

USE CampusLands;

CREATE TABLE Campers(
    id INT primary key AUTO_INCREMENT,
    nombres VARCHAR(50) NOT NULL,
    direccion VARCHAR(50),
    logros VARCHAR(60)
);

CREATE TABLE Users(
    id INT primary key AUTO_INCREMENT,
    idCamper INT NOT NULL,
    email VARCHAR(80) NOT NULL,
    username VARCHAR(80) NOT NULL,
    password VARCHAR(60) NOT NULL,
    FOREIGN key (idCamper) REFERENCES Campers (id)
);