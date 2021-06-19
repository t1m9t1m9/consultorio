CREATE TABLE usuario (
    ci VARCHAR(10) NOT NULL PRIMARY KEY,
    primerNombre VARCHAR(32) NOT NULL,
    segundoNombre VARCHAR(32) NOT NULL,
    primerApellido VARCHAR(32) NOT NULL,
    segundoApellido VARCHAR(32) NOT NULL,
    edad INTEGER NOT NULL,
    sexo VARCHAR(12) NOT NULL,
    etnia VARCHAR(32) NOT NULL,
    email VARCHAR(128) NOT NULL,
    celular VARCHAR(10) NOT NULL,
    direccion VARCHAR(128) NOT NULL,
    pregunta1 VARCHAR(32) NOT NULL,
    pregunta2 VARCHAR(32) NOT NULL,
    pregunta3 VARCHAR(32) NOT NULL,
    password VARCHAR(128) NOT NULL
);

INSERT INTO usuario (ci, primerNombre, segundoNombre, primerApellido, segundoApellido, edad, sexo, etnia, email, celular, direccion, pregunta1, pregunta2, pregunta3, password)
VALUES ('1803087558', 'MARCELO', 'ALEJANDRO','ESPINOSA','CCARVAJAL',34,'MASCULINO','MESTIZO','marceespinosa9@gmail.com','0994036590','COLLAY Y EL ARENAL', 'AMBATO','NATASHA','ILUSIONES','0aa75ab97c26a79526cee8ae49ab4b4e');

CREATE TABLE agenda
(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    hora VARCHAR(6) NOT NULL,
    fecha DATE NOT NULL,
    confirmacion VARCHAR(2) NOT NULL,
    ciUsuario VARCHAR(10) NOT NULL
);
INSERT INTO agenda (id, hora, fecha, confirmacion, ciUsuario)
VALUES (NULL, '14:00', '2021-05-17', 'si', '1803087558');