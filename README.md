# redefectiva
## Instalación
Se hace uso del framework CodeIgniter 3, se debe de generar la base de datos, asi como la tabla correspondiente
```SQL
CREATE SCHEMA `redefectiva`;

CREATE TABLE `alumnos` (
   `matricula` int(10) unsigned NOT NULL AUTO_INCREMENT,
   `nombre` varchar(45) DEFAULT NULL,
   `apat` varchar(45) DEFAULT NULL,
   `amat` varchar(45) DEFAULT NULL,
   `fnacimiento` date DEFAULT NULL,
   `genero` enum('M','F') DEFAULT 'M',
   `grado` tinyint(4) DEFAULT '1',
   `estatus` tinyint(4) DEFAULT '1',
   PRIMARY KEY (`matricula`)
 ) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
```
Dada la simpleza de la plataforma, no requiere inicio de sesiones.
