CREATE SCHEMA IF NOT EXISTS curriculum;
USE curriculum;

DROP TABLE IF EXISTS contacto;
CREATE TABLE contacto(
    idContacto INT AUTO_INCREMENT PRIMARY KEY,
    lugarNacimiento VARCHAR(100),
    telefono VARCHAR(30),
    correo VARCHAR(60),
    nombre VARCHAR(150),
    fechaNacimiento VARCHAR(100)
);

DROP TABLE IF EXISTS habilidades;
CREATE TABLE habilidades(
    idHabilidades INT AUTO_INCREMENT PRIMARY KEY,
    desHabilidades VARCHAR(150)
);

DROP TABLE IF EXISTS idiomas;
CREATE TABLE idiomas(
     idIdiomas INT AUTO_INCREMENT PRIMARY KEY,
     idioma VARCHAR(100)
);

DROP TABLE IF EXISTS perfilProfesional;
CREATE TABLE perfilProfesional(
      idPP INT AUTO_INCREMENT PRIMARY KEY,
      descripcion VARCHAR(1000)
);

DROP TABLE IF EXISTS formacionAcademica;
CREATE TABLE formacionAcademica(
    idFA INT AUTO_INCREMENT PRIMARY KEY,
    universidad VARCHAR(70),
    preparatoria VARCHAR(70),
    secundaria  VARCHAR(70),
    primaria  VARCHAR(70)
);

DROP TABLE IF EXISTS experienciaProfesional;
CREATE TABLE experienciaProfesional(
    idEP INT AUTO_INCREMENT PRIMARY KEY,
    descripcion VARCHAR(1000)
);

DROP TABLE IF EXISTS referenciasPersonales;
CREATE TABLE referenciasPersonales(
    idRP INT AUTO_INCREMENT PRIMARY KEY,
    descripcion VARCHAR(1000)
);

INSERT INTO contacto VALUES(NULL,'León, Guanajuato','47768299418', 'mail@gmail.com', 'Mayra Padilla', '10 de Septiembre de 1998');
INSERT INTO habilidades VALUES(NULL,'Trabajo en equipo, Lenguajes de programación, resolución de problemas, Proactiva, Creativa');
INSERT INTO idiomas VALUES(NULL,'Español, Inglés');
INSERT INTO perfilProfesional VALUES(NULL,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis aliquam neque, sit amet tristique nunc facilisis sit amet. Sed molestie sem et quam tempus rutrum. Proin posuere nibh est, at auctor felis feugiat et.');
INSERT INTO formacionAcademica VALUES(NULL,'Universidad: Instituto Tecnológico de León (Actualmente).','Preparatoria: Conalep León ll (2014-2017).','Secundaria: Técnica #43 (2011-2014).','Primaria: María Dolores Hernández Torres (2005-2011).');
INSERT INTO experienciaProfesional VALUES(NULL,'TecnoSistemas del Bajío: Soporte técnico a sistemas ASPEL y desarrollo (2016-2018).');
INSERT INTO referenciasPersonales VALUES(NULL,'Juan Pérez - 4770000000, María López - 4771111111');
COMMIT;
