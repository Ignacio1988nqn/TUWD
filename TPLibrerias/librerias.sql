-- Active: 1717691537877@@127.0.0.1@3306@librerias
CREATE DATABASE librerias;

CREATE TABLE `autor` (
  `idAutor` INT AUTO_INCREMENT NOT NULL,
  `Nombre` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Apellido` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idAutor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `libro` (
  `idLibro` INT AUTO_INCREMENT NOT NULL,
  `Titulo` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Anio` YEAR NOT NULL,
  `Editorial` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CantPag` INT NOT NULL,
  `idAutor` INT NOT NULL,
  PRIMARY KEY (`idLibro`),
  FOREIGN KEY (`idAutor`) REFERENCES `autor`(`idAutor`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `autor` (`Nombre`, `Apellido`) VALUES 
('Gabriel', 'García Márquez'),
('Julio', 'Cortázar'),
('Jorge', 'Luis Borges'),
('Adolfo', 'Bioy Casares');

INSERT INTO `libro` (`Titulo`, `Anio`, `Editorial`, `CantPag`, `idAutor`) VALUES 
('Cien años de soledad', 1967, 'Editorial Sudamericana', 400, 1),
('Rayuela', 1963, 'Editorial Sudamericana', 400, 2),
('Ficciones', 1944, 'Editorial Sur', 300, 3),
('El sueño de los héroes', 1954, 'Editorial Sudamericana', 250, 4);