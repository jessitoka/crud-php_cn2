create database crud;

use crud;

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL auto_increment,
  `titulo_proyecto` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `linku` varchar(100) NOT NULL,
  `fecha_creacion` date NOT NULL,
  
  PRIMARY KEY  (`id`)
);

ALTER TABLE proyectos MODIFY id int NOT NULL auto_increment;
