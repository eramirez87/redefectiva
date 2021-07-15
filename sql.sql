CREATE SCHEMA `redefectiva` ;

CREATE TABLE `redefectiva`.`alumnos` (
  `matricula` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `apat` VARCHAR(45) NULL,
  `amat` VARCHAR(45) NULL,
  `fnacimiento` DATE NULL,
  `genero` ENUM('M', 'F') NULL DEFAULT 'M',
  `grado` TINYINT NULL DEFAULT 1,
  PRIMARY KEY (`matricula`));
