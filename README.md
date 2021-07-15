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
Para colocar los parámetros en el framework, se encuentra en **application/config/database.php**, de preferencia, solo mover los parámetros *-modificable*
```php
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost', # -modificable
	'username' => 'root', # -modificable
	'password' => '', # -modificable
	'database' => 'redefectiva', # -modificable
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_bin',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
```
Dada la simpleza de la plataforma, no requiere inicio de sesiones.

## API
El API consta de los siguientes métodos:
#### GET
```batch
curl -X GET [host]/redefectiva/api/alumnos?id=
```
Este método trae el listado de todos los alumnos en la base de datos, se cuenta con los siguientes parámetros opcionales (todos por GET, es decir, en la misma url):
* **id** : numero de la matricula del alumno.
#### POST
```batch
curl -X POST [host]/redefectiva/api/alumnos -d "nombre=&apat=&amat=&fnacimiento=&genero=&grado="
```
Este metodo es para insercion de alumnos en la plataforma, los campos requeridos son:
* **nombre** : Nombre del alumno
* **apat** : Apellido paterno
* **amat** : Apellido materno
* **fnacimiento** : fecha de nacimiento (formato aaaa-mm-dd)
* **genero** : Genero del alumno, M para masculino, F para femenino
* **grado** : Grado en el que esta el alumno
#### PUT / PATCH
```batch
curl -X PUT [host]/redefectiva/api/alumnos?id= -d "nombre=&apat=&amat=&fnacimiento=&genero=&grado="
curl -X PATCH [host]/redefectiva/api/alumnos?id= -d "nombre=&apat=&amat=&fnacimiento=&genero=&grado="
```
Este método es para actualizar un alumno, los campos obligatorios son:
* **id** : numero de matricula del alumno a modificar

Los campos opcionales son: 
* nombre
* apat
* amat
* fnacimiento
* genero
* grado
#### DELETE
```batch
curl -X DELETE [host]/redefectiva/api/alumnos?id=
```
Este método sirve para borrar definitivamente un registro de la base de datos, el parámetro *id* es obligatorio
