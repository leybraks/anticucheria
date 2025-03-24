DROP TABLE if EXISTS Acceso_Web;
DROP TABLE if EXISTS Persona;
DROP TABLE if EXISTS Usuario;
DROP TABLE if EXISTS Modulo;
create database Users;
use Users;
CREATE TABLE Persona(
    id_persona INT auto_increment PRIMARY KEY,
    nombre text NOT NULL,
    apePaterno text NOT NULL,
    apeMaterno text NOT NULL,
    fecNac DATE
);

CREATE TABLE Usuario(
    id_Usuario INT auto_increment PRIMARY KEY,
    usuario text NOT NULL,
    clave text NOT NULL,
    estado INT NOT NULL,
    id_persona INT NOT NULL,
    FOREIGN KEY(id_persona) REFERENCES Persona(id_persona)
);
CREATE TABLE Modulo(
    id_Modulo INT auto_increment PRIMARY KEY,
    nombre text NOT NULL,
    estado text NOT NULL
);
CREATE TABLE Acceso_Web(
    id_acceso INT auto_increment PRIMARY KEY,
    id_Modulo INT NOT NULL,
    id_Usuario INT NOT NULL,
    nombreWeb text NOT NULL,
    url text NOT NULL,
    estado INT NOT NULL,
    id_persona INT NOT NULL,
    FOREIGN KEY(id_Modulo) REFERENCES Modulo(id_Modulo),
    FOREIGN KEY(id_Usuario) REFERENCES Usuario(id_Usuario)
);

INSERT INTO Persona(nombre, apePaterno, apeMaterno, fecNac) VALUES ('Pedro','Perez','Herrera','2001-02-10');
INSERT INTO Usuario(usuario, clave, estado, id_persona) VALUES ('PePerez','Perez@21',1,1);
SELECT * FROM Persona;
SELECT * FROM Persona WHERE id_persona =(select id_persona FROM Usuario WHERE usuario = 'PePerez' and clave = 'Perez@21' and estado = 1);
