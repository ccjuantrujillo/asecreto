/*
SQLyog Community v12.4.3 (64 bit)
MySQL - 5.7.21-log : Database - asecreto
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`asecreto` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `asecreto`;

/*Table structure for table `ams_banner` */

DROP TABLE IF EXISTS `ams_banner`;

CREATE TABLE `ams_banner` (
  `BANP_Codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del Baner\n',
  `BANC_NombreEmpresa` varchar(150) DEFAULT NULL COMMENT 'Nombre de la empresa propietaria del banner.\n',
  `BANC_Url` varchar(150) DEFAULT NULL COMMENT 'Enlace a la publicidad.',
  `BANC_FlagEstado` char(1) DEFAULT '0' COMMENT 'Estado del banner activo o inactivo.\n',
  `BANC_FechaRegistro` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de registro.\n',
  `BANC_FechaModificacion` datetime DEFAULT NULL COMMENT 'Fecha de modificacion.\n',
  PRIMARY KEY (`BANP_Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ams_banner` */

/*Table structure for table `ams_bannerseccion` */

DROP TABLE IF EXISTS `ams_bannerseccion`;

CREATE TABLE `ams_bannerseccion` (
  `BANSECP_Codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del banner por seccion.',
  `BANP_Codigo` int(11) NOT NULL COMMENT 'Codigo del banner.\n',
  `BANSECC_FechaRegistro` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de registro.',
  `BANSECC_FechaModificacion` datetime DEFAULT NULL COMMENT 'Fecha de modificacion.',
  `BANSECC_FlagEstado` char(1) DEFAULT '0' COMMENT 'Estado del banner.',
  `BANSECC_Seccion` char(1) DEFAULT NULL COMMENT 'Seccion donde se colocara el banner.\n',
  PRIMARY KEY (`BANSECP_Codigo`),
  KEY `fk_AMS_BANNERSECCION_AMS_BANNER1` (`BANP_Codigo`),
  CONSTRAINT `fk_AMS_BANNERSECCION_AMS_BANNER1` FOREIGN KEY (`BANP_Codigo`) REFERENCES `ams_banner` (`BANP_Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ams_bannerseccion` */

/*Table structure for table `ams_categoria` */

DROP TABLE IF EXISTS `ams_categoria`;

CREATE TABLE `ams_categoria` (
  `CATEP_Codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de categoria\n',
  `CATEC_Nombre` varchar(70) DEFAULT NULL COMMENT 'Nombre de categoria\n',
  `CATEC_FechaRegistro` datetime DEFAULT NULL COMMENT 'Fecha de registro.',
  `CATEC_FlagEstado` char(1) DEFAULT '1' COMMENT 'Estado de la tabla categoria.',
  `CATEC_NombreImagen` varchar(50) NOT NULL,
  PRIMARY KEY (`CATEP_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `ams_categoria` */

insert  into `ams_categoria`(`CATEP_Codigo`,`CATEC_Nombre`,`CATEC_FechaRegistro`,`CATEC_FlagEstado`,`CATEC_NombreImagen`) values 
(1,'VINOS Y LICORES',NULL,'1','vinos-y-licores.gif'),
(2,'ADORNOS',NULL,'1','adornos.jpg'),
(3,'PANETONES',NULL,'1','panetones.jpg'),
(4,'CENAS NAVIDEÑAS\r\n',NULL,'1','cenas-navidenas.jpg\r\n'),
(5,'SALUD\r\n',NULL,'1','salud.jpg\r\n'),
(6,'REGALOS\r\n',NULL,'1','regalos.jpg\r\n'),
(7,'CUPONES\r\n',NULL,'1','cupones.jpg\r\n');

/*Table structure for table `ams_empresa` */

DROP TABLE IF EXISTS `ams_empresa`;

CREATE TABLE `ams_empresa` (
  `EMPRP_Codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de empresa\n',
  `EMPRC_Nombre` varchar(70) DEFAULT NULL COMMENT 'Nombre de la empresa.\n',
  `EMPRC_FechaRegistro` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de registro.',
  `EMPRC_FechaModificacion` datetime DEFAULT NULL COMMENT 'Fecha de modificacion.\n',
  `EMPRC_Logo` varchar(50) DEFAULT NULL COMMENT 'Logo\n',
  `EMPRC_FlagEstado` char(1) DEFAULT '1' COMMENT 'Estado de la tabla empresa.',
  `EMPRC_Link` varchar(150) DEFAULT NULL COMMENT 'Url de la empresa.',
  `EMPRC_Icono` varchar(50) NOT NULL,
  PRIMARY KEY (`EMPRP_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `ams_empresa` */

insert  into `ams_empresa`(`EMPRP_Codigo`,`EMPRC_Nombre`,`EMPRC_FechaRegistro`,`EMPRC_FechaModificacion`,`EMPRC_Logo`,`EMPRC_FlagEstado`,`EMPRC_Link`,`EMPRC_Icono`) values 
(1,'Wong','2010-11-03 19:31:09',NULL,'log-wong.gif','1','http://www.ewong.com/TV_CIU/Formularios/wfrm_Inicio.aspx\r\n','ico-wong.gif'),
(2,'iStore','2010-11-03 19:31:09',NULL,'logo-get-up.jpg\r\n','1','','istore.jpg\r\n'),
(3,'Ripley','2010-11-03 19:34:19',NULL,'logo-pt.jpg\r\n','1',NULL,'ico-pt.jpg\r\n'),
(4,'Bembos','2018-02-26 05:37:38',NULL,NULL,'1',NULL,'bembos.jpg'),
(5,'Rosatel','2018-02-26 05:37:44',NULL,NULL,'1',NULL,'rosatel.jpg'),
(6,'Coca Cola','2018-02-26 05:37:50',NULL,NULL,'1',NULL,'cocacola.jpg');

/*Table structure for table `ams_evento` */

DROP TABLE IF EXISTS `ams_evento`;

CREATE TABLE `ams_evento` (
  `EVENP_Codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla evento.',
  `EVENC_Descripcion` varchar(150) DEFAULT NULL COMMENT 'Descripcion del evento.',
  `EVENC_Comentario` varchar(250) DEFAULT NULL COMMENT 'Comentario del evento.',
  `EVENC_FrecuenciaDias` int(11) DEFAULT NULL COMMENT 'Frecuencia de dias.',
  `EVENC_FechaInicio` datetime DEFAULT NULL COMMENT 'Inicio del evento.',
  `EVENC_FechaFin` datetime DEFAULT NULL COMMENT 'Fin del evento.',
  `EVENC_FechaRegistro` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de registro.',
  `EVENC_FlagEstado` char(1) DEFAULT '1' COMMENT 'Estado de la tabla evento.',
  PRIMARY KEY (`EVENP_Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ams_evento` */

/*Table structure for table `ams_grupo` */

DROP TABLE IF EXISTS `ams_grupo`;

CREATE TABLE `ams_grupo` (
  `GRUPP_Codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de grupo',
  `GRUPC_Nombre` varchar(100) DEFAULT NULL COMMENT 'Nombre de grupo.\n',
  `GRUPC_Puntuacion` int(11) DEFAULT NULL COMMENT 'Puntuacion del grupo.\n',
  `GRUPC_CantidadMiembros` int(11) DEFAULT NULL COMMENT 'Cantidad de miembros del grupo.\n',
  `GRUPC_TipoGrupo` char(1) DEFAULT NULL COMMENT 'Tipo de grupo\n',
  `GRUPC_NombreTipoGrupo` varchar(50) DEFAULT NULL COMMENT 'Nombre de tipo de grupo.\n',
  `GRUPC_Foto` varchar(50) DEFAULT NULL COMMENT 'Foto del grupo.\n',
  `GRUPC_FechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de registro.',
  `GRUPC_FechaModificacion` datetime DEFAULT NULL COMMENT 'Fecha de modificacion.\n',
  `GRUPC_FechaEntrega` datetime DEFAULT NULL COMMENT 'Fecha de entrega.',
  `GRUPC_FechaSorteo` datetime DEFAULT NULL COMMENT 'Fecha de sorteo.\n',
  `GRUPC_FlagSorteado` char(1) DEFAULT '0' COMMENT 'Indicador sobre si se efectuo el sorteo.\n',
  `GRUPC_FlagEnviado` char(1) DEFAULT '0' COMMENT 'Indicador sobre si se envio el comunicado\n',
  `GRUPC_FlagEstado` char(1) DEFAULT '1' COMMENT 'Estado de la tabla grupo.',
  `GRUPC_FlagConfirmado` char(1) NOT NULL DEFAULT '0',
  `GRUPC_FlagFechaEntrega` char(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`GRUPP_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `ams_grupo` */

insert  into `ams_grupo`(`GRUPP_Codigo`,`GRUPC_Nombre`,`GRUPC_Puntuacion`,`GRUPC_CantidadMiembros`,`GRUPC_TipoGrupo`,`GRUPC_NombreTipoGrupo`,`GRUPC_Foto`,`GRUPC_FechaRegistro`,`GRUPC_FechaModificacion`,`GRUPC_FechaEntrega`,`GRUPC_FechaSorteo`,`GRUPC_FlagSorteado`,`GRUPC_FlagEnviado`,`GRUPC_FlagEstado`,`GRUPC_FlagConfirmado`,`GRUPC_FlagFechaEntrega`) values 
(1,'RFVM',NULL,5,'1','','images.jpg','2010-11-18 18:59:30',NULL,NULL,NULL,'0','1','1','0','0'),
(2,'CARTOONRF',NULL,5,'1','','images.jpg','2010-11-18 20:08:49',NULL,NULL,NULL,'0','0','1','0','0'),
(3,'Pruebita Pruebota Pe',NULL,5,'3','CompaÃ±ia Peruana de RadioDifusiona','logo_yell.jpg','2010-11-19 07:17:17',NULL,'2010-12-16 08:00:00',NULL,'1','1','1','1','1'),
(4,'Toons',NULL,5,'3','Cartoon Producciones ','logoCartoon_iab.jpg','2010-11-19 08:37:16',NULL,NULL,NULL,'0','1','1','0','0'),
(5,'Robotombo',NULL,2,'3','Cartoon Producciones','feliz.JPG','2010-11-19 10:11:37',NULL,'2010-11-19 15:00:00',NULL,'1','1','1','1','1'),
(6,'Relaxito',NULL,2,'1','','','2010-11-19 13:07:04',NULL,NULL,NULL,'1','1','1','1','0'),
(7,'Grupo1',NULL,36,'1','','','2017-12-19 13:35:07',NULL,NULL,NULL,'0','0','1','0','0');

/*Table structure for table `ams_logbanner` */

DROP TABLE IF EXISTS `ams_logbanner`;

CREATE TABLE `ams_logbanner` (
  `LOGBANP_Codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del log de banner.',
  `BANSECP_Codigo` int(11) NOT NULL COMMENT 'Identificador del banner por seccion.',
  `LOGBANC_FechaRegistro` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de registro.',
  `LOGBANC_FlagEstado` char(1) DEFAULT NULL COMMENT 'Estado de la tabla.',
  `LOGBANC_FechaModificacion` datetime DEFAULT NULL COMMENT 'Fecha de modificacion.',
  PRIMARY KEY (`LOGBANP_Codigo`),
  KEY `fk_AMS_LOGBANNER_AMS_BANNERSECCION1` (`BANSECP_Codigo`),
  CONSTRAINT `fk_AMS_LOGBANNER_AMS_BANNERSECCION1` FOREIGN KEY (`BANSECP_Codigo`) REFERENCES `ams_bannerseccion` (`BANSECP_Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ams_logbanner` */

/*Table structure for table `ams_producto` */

DROP TABLE IF EXISTS `ams_producto`;

CREATE TABLE `ams_producto` (
  `PRODP_Codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de un producto.\n',
  `CATEP_Codigo` int(11) NOT NULL COMMENT 'Identificador de categoria de un producto.\n',
  `EMPRP_Codigo` int(11) NOT NULL COMMENT 'Identificador de empresa de un producto.\n',
  `PRODC_Nombre` varchar(100) DEFAULT NULL COMMENT 'Nombre de un producto.\n',
  `PRODC_Precio` double DEFAULT NULL COMMENT 'Precio de un producto.\n',
  `PRODC_FechaRegistro` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de registro.',
  `PRODC_FechaModificacion` datetime DEFAULT NULL COMMENT 'Fecha de modificacion.',
  `PRODC_FlagEstado` char(1) DEFAULT '1' COMMENT 'Estado de la tabla producto.',
  `PRODC_Descripcion` text COMMENT 'Descripcion de un producto.',
  `PRODC_MensajePostal` text COMMENT 'Mensaje Postal\n',
  `PRODC_ImgGrande` varchar(150) DEFAULT NULL COMMENT 'Imagen grande\n',
  `PRODC_ImgChica` varchar(150) DEFAULT NULL COMMENT 'Imagen chica.\n',
  `PRODC_CantidadSolicitada` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`PRODP_Codigo`),
  KEY `fk_productos_categorias1` (`CATEP_Codigo`),
  KEY `fk_productos_empresas1` (`EMPRP_Codigo`),
  CONSTRAINT `fk_productos_categorias1` FOREIGN KEY (`CATEP_Codigo`) REFERENCES `ams_categoria` (`CATEP_Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_productos_empresas1` FOREIGN KEY (`EMPRP_Codigo`) REFERENCES `ams_empresa` (`EMPRP_Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

/*Data for the table `ams_producto` */

insert  into `ams_producto`(`PRODP_Codigo`,`CATEP_Codigo`,`EMPRP_Codigo`,`PRODC_Nombre`,`PRODC_Precio`,`PRODC_FechaRegistro`,`PRODC_FechaModificacion`,`PRODC_FlagEstado`,`PRODC_Descripcion`,`PRODC_MensajePostal`,`PRODC_ImgGrande`,`PRODC_ImgChica`,`PRODC_CantidadSolicitada`) values 
(1,1,1,'Ron Appleton State V/X bot. 750 ml',33.9,'2010-11-18 20:26:49',NULL,'1',NULL,'un Ron de la Tienda Virtual de Wong','grandes/EWong_0023.jpg','chicas/EWong_0023.jpg',1),
(2,1,1,'Whisky Chivas Regal bot. 750 ml',93.9,'2010-11-18 20:26:50',NULL,'1',NULL,'un Whisky de la Tienda Virtual de Wong','grandes/EWong_0024.jpg','chicas/EWong_0024.jpg',0),
(3,1,1,'Vino Tacama Sinfon&iacute;a bot. 750 ml',45.5,'2010-11-18 20:26:50',NULL,'1',NULL,'un Vino de la Tienda Virtual de Wong','grandes/EWong_0026.jpg','chicas/EWong_0026.jpg',0),
(4,1,1,'Vino Valdivieso Tinto bot. 750 ml',18.9,'2010-11-18 20:26:50',NULL,'1',NULL,'un Vino de la Tienda Virtual de Wong','grandes/EWong_0027.jpg','chicas/EWong_0027.jpg',0),
(5,1,1,'Vino Navarro Correas Colecci&oacute;n Privada Blend Tinto bot. 750 ml',38.9,'2010-11-18 20:26:50',NULL,'1',NULL,'un Vino de la Tienda Virtual de Wong','grandes/EWong_0028.jpg','chicas/EWong_0028.jpg',0),
(6,1,1,'Vino Santa Julia Tinto  bot. 750 ml',32.5,'2010-11-18 20:26:50',NULL,'1',NULL,'un Vino de la Tienda Virtual de Wong','grandes/EWong_0029.jpg','chicas/EWong_0029.jpg',0),
(7,1,1,'Vino Serie Riberas Concha y Toro Tinto bot. 750 ml',49.9,'2010-11-18 20:26:50',NULL,'1',NULL,'un Vino de la Tienda Virtual de Wong','grandes/EWong_0030.jpg','chicas/EWong_0030.jpg',0),
(8,1,1,'Licor Brogans Irish Cream bot. 1 L',46.9,'2010-11-18 20:26:50',NULL,'1',NULL,'un Licor de caf&eacute; de la Tienda Virtual de Wong','grandes/EWong_0031.jpg','chicas/EWong_0031.jpg',0),
(9,1,1,'Vino Chateau St. Jean Cabernet Sauvignon bot. 750 ml',79.9,'2010-11-18 20:26:51',NULL,'1',NULL,'un Vino de la Tienda Virtual de Wong','grandes/EWong_0032.jpg','chicas/EWong_0032.jpg',0),
(10,1,1,'Vino Finca Flichman Roble Tinto bot. 750 ml',21.5,'2010-11-18 20:26:51',NULL,'1',NULL,'un Vino de la Tienda Virtual de Wong','grandes/EWong_0033.jpg','chicas/EWong_0033.jpg',0),
(11,1,1,'Vino Alamos Tinto bot. 750 ml',37.9,'2010-11-18 20:26:51',NULL,'1',NULL,'un Vino de la Tienda Virtual de Wong','grandes/EWong_0034.jpg','chicas/EWong_0034.jpg',0),
(12,1,1,'Vino de la Magdalena Reservado Santiago Queirolo Semi Seco bot. 750 ml',13.9,'2010-11-18 20:26:51',NULL,'1',NULL,'un Vino de la Tienda Virtual de Wong','grandes/EWong_0035.jpg','chicas/EWong_0035.jpg',0),
(13,1,1,'Pisco Don Santiago Mosto Verde Quebranta bot. 500 ml',52.9,'2010-11-18 20:26:51',NULL,'1',NULL,'un Pisco de la Tienda Virtual de Wong','grandes/EWong_0036.jpg','chicas/EWong_0036.jpg',1),
(14,1,1,'Pisco Quebranta Demonio de los Andes bot. 700ml',29.99,'2010-11-18 20:26:51',NULL,'1',NULL,'un Pisco de la Tienda Virtual de Wong','grandes/EWong_0037.jpg','chicas/EWong_0037.jpg',0),
(15,1,1,'Pisco Ocucaje Italia bot. 750 ml',24.9,'2010-11-18 20:26:51',NULL,'1',NULL,'un Pisco de la Tienda Virtual de Wong','grandes/EWong_0038.jpg','chicas/EWong_0038.jpg',0),
(16,1,1,'Pisco Vi&ntilde;as de Oro Acholado bot. 750 ml',53.9,'2010-11-18 20:26:52',NULL,'1',NULL,'un Pisco de la Tienda Virtual de Wong','grandes/EWong_0039.jpg','chicas/EWong_0039.jpg',0),
(17,1,1,'Cava Cordon Rosado Freixenet bot. 750 ml',39.99,'2010-11-18 20:26:52',NULL,'1',NULL,'un Vino de la Tienda Virtual de Wong','grandes/EWong_0040.jpg','chicas/EWong_0040.jpg',0),
(18,1,1,'Cava Castillo Perelada Brut Rosado bot. 750 ml',36.9,'2010-11-18 20:26:52',NULL,'1',NULL,'un Vino de la Tienda Virtual de Wong','grandes/EWong_0041.jpg','chicas/EWong_0041.jpg',0),
(19,1,1,'Vino Ave Premium Malbec bot. 750 ml',39.9,'2010-11-18 20:26:52',NULL,'1',NULL,'un Vino de la Tienda Virtual de Wong','grandes/EWong_0042.jpg','chicas/EWong_0042.jpg',0),
(20,1,1,'Vino Blanco Intipalka bot. 750 ml',31.5,'2010-11-18 20:26:52',NULL,'1',NULL,'un Vino de la Tienda Virtual de Wong','grandes/EWong_0043.jpg','chicas/EWong_0043.jpg',0),
(21,1,1,'Vino Intipalka Reserva Tinto bot. 750 ml',39.9,'2010-11-18 20:26:52',NULL,'1',NULL,'un Vino de la Tienda Virtual de Wong','grandes/EWong_0044.jpg','chicas/EWong_0044.jpg',0),
(22,1,1,'Vino del Fin del Mundo Reserva Tinto bot. 750 ml',41.5,'2010-11-18 20:26:52',NULL,'1',NULL,'un Vino de la Tienda Virtual de Wong','grandes/EWong_0045.jpg','chicas/EWong_0045.jpg',0),
(23,1,1,'Gran Pisco Finca Torontel Mosto Verde ',34.9,'2010-11-18 20:26:53',NULL,'1',NULL,'un Pisco de la Tienda Virtual de Wong','grandes/EWong_0046.jpg','chicas/EWong_0046.jpg',0),
(24,1,1,'Whisky Johnnie Walker Red Label bot. 750 ml',44.9,'2010-11-18 20:26:53',NULL,'1',NULL,'un Whisky de la Tienda Virtual de Wong','grandes/EWong_0047.jpg','chicas/EWong_0047.jpg',0),
(25,1,1,'Whisky Johnnie Walker Black Label bot. 750 ml',93.9,'2010-11-18 20:26:53',NULL,'1',NULL,'un Whisky de la Tienda Virtual de Wong','grandes/EWong_0048.jpg','chicas/EWong_0048.jpg',0),
(26,1,1,'Whisky Something Special bot. 750 ml',48.9,'2010-11-18 20:26:53',NULL,'1',NULL,'un Whisky de la Tienda Virtual de Wong','grandes/EWong_0049.jpg','chicas/EWong_0049.jpg',0),
(27,1,1,'Whisky Old Parr bot. 750 ml',74.9,'2010-11-18 20:26:53',NULL,'1',NULL,'un Whisky de la Tienda Virtual de Wong','grandes/EWong_0050.jpg','chicas/EWong_0050.jpg',0),
(28,1,1,'Ron Havana Club A&ntilde;ejo Reserva bot. 750 ml',32.9,'2010-11-18 20:26:53',NULL,'1',NULL,'un Ron de la Tienda Virtual de Wong','grandes/EWong_0051.jpg','chicas/EWong_0051.jpg',0),
(29,2,1,'Duende Sentado 72 cm.',49.9,'2010-11-18 20:26:54',NULL,'1',NULL,'un Duendecito de la Tienda Virtual de Wong','grandes/EWong_0001.jpg','chicas/EWong_0001.jpg',0),
(30,2,1,'Hombre de Nieve c/m&uacute;sica',39.9,'2010-11-18 20:26:54',NULL,'1',NULL,'un Mu&ntilde;eco de Nieve de la Tienda Virtual de Wong','grandes/EWong_0002.jpg','chicas/EWong_0002.jpg',0),
(31,2,1,'Santa Parado c/m&uacute;sica 40 cm. ',39.9,'2010-11-18 20:26:54',NULL,'1',NULL,'un Santa Claus de la Tienda Virtual de Wong','grandes/EWong_0003.jpg','chicas/EWong_0003.jpg',0),
(32,2,1,'Duende Parado 45 cm.',39.9,'2010-11-18 20:26:54',NULL,'1',NULL,'un Duendecito de la Tienda Virtual de Wong','grandes/EWong_0004.jpg','chicas/EWong_0004.jpg',0),
(33,2,1,'Duende Sentado 48 cm.',39.9,'2010-11-18 20:26:54',NULL,'1',NULL,'un Duendecito de la Tienda Virtual de Wong','grandes/EWong_0005.jpg','chicas/EWong_0005.jpg',0),
(34,2,1,'Colgante Puerta Santa 43 cm.',19.9,'2010-11-18 20:26:54',NULL,'1',NULL,'un Mu&ntilde;eco de Nieve de la Tienda Virtual de Wong','grandes/EWong_0008.jpg','chicas/EWong_0008.jpg',0),
(35,2,1,'Misterio 11x9x13.9 cm ',19.9,'2010-11-18 20:26:54',NULL,'1',NULL,'un Nacimiento de la Tienda Virtual de Wong','grandes/EWong_0012.jpg','chicas/EWong_0012.jpg',0),
(36,2,1,'Misterio 19.7x5x15.5 cm ',29.9,'2010-11-18 20:26:55',NULL,'1',NULL,'un Nacimiento de la Tienda Virtual de Wong','grandes/EWong_0013.jpg','chicas/EWong_0013.jpg',0),
(37,2,1,'Nacimiento x 11 pzas 7 cm',49.9,'2010-11-18 20:26:55',NULL,'1',NULL,'un Nacimiento de la Tienda Virtual de Wong','grandes/EWong_0014.jpg','chicas/EWong_0014.jpg',0),
(38,3,1,'Panet&oacute;n Wong ziploc 900 g',13.9,'2010-11-18 20:26:55',NULL,'1',NULL,'un Panet&oacute;n de la Tienda Virtual de Wong','grandes/EWong_0015.jpg','chicas/EWong_0015.jpg',0),
(39,3,1,'Panet&oacute;n Wong caja 900 g',17.9,'2010-11-18 20:26:55',NULL,'1',NULL,'un Panet&oacute;n de la Tienda Virtual de Wong','grandes/EWong_0016.jpg','chicas/EWong_0016.jpg',0),
(40,3,1,'Panet&oacute;n Wong bolsa 900 g',11.99,'2010-11-18 20:26:55',NULL,'1',NULL,'un Panet&oacute;n de la Tienda Virtual de Wong','grandes/EWong_0017.jpg','chicas/EWong_0017.jpg',0),
(41,3,1,'Panet&oacute;n Wong lata 1kg',24.5,'2010-11-18 20:26:55',NULL,'1',NULL,'un Panet&oacute;n de la Tienda Virtual de Wong','grandes/EWong_0018.jpg','chicas/EWong_0018.jpg',0),
(42,3,1,'Panet&oacute;n Bimbo chispas de chocolate caja 450 g',9.5,'2010-11-18 20:26:55',NULL,'1',NULL,'un Panet&oacute;n de la Tienda Virtual de Wong','grandes/EWong_0019.jpg','chicas/EWong_0019.jpg',0),
(43,3,1,'Panet&oacute;n Winter´s caja 900 g',18.49,'2010-11-18 20:26:56',NULL,'1',NULL,'un Panet&oacute;n de la Tienda Virtual de Wong','grandes/EWong_0020.jpg','chicas/EWong_0020.jpg',0),
(44,3,1,'Panet&oacute;n Todinno caja 900 g',22.9,'2010-11-18 20:26:56',NULL,'1',NULL,'un Panet&oacute;n de la Tienda Virtual de Wong','grandes/EWong_0021.jpg','chicas/EWong_0021.jpg',1),
(45,3,1,'Panet&oacute;n Gloria lata 1 kg',26.5,'2010-11-18 20:26:56',NULL,'1',NULL,'un Panet&oacute;n de la Tienda Virtual de Wong','grandes/EWong_0022.jpg','chicas/EWong_0022.jpg',1);

/*Table structure for table `ams_punto` */

DROP TABLE IF EXISTS `ams_punto`;

CREATE TABLE `ams_punto` (
  `PUNTP_Codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de un puntuacion\n',
  `PUNTC_Descripcion` varchar(100) DEFAULT NULL COMMENT 'Accion que origina puntaje\n',
  `PUNTC_Valor` int(11) DEFAULT NULL COMMENT 'Valor del punto.\n',
  `PUNTC_FechaRegistro` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de registro.\n',
  `PUNTO_FlagEstado` char(1) DEFAULT '1' COMMENT 'Estado de la tabla punto.',
  PRIMARY KEY (`PUNTP_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `ams_punto` */

/*Table structure for table `ams_tipodocumento` */

DROP TABLE IF EXISTS `ams_tipodocumento`;

CREATE TABLE `ams_tipodocumento` (
  `TIPOP_Codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de tipo de documento',
  `TIPOC_Descripcion` varchar(50) DEFAULT NULL COMMENT 'Descripcion de tipo de documento',
  `TIPOC_CantidadDigitos` varchar(30) DEFAULT NULL COMMENT 'Cantidad de digitos del documento',
  `TIPOC_FechaRegistro` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de registro del tipo de documento.',
  `TIPOC_FlagEstado` char(1) DEFAULT '1' COMMENT 'Estado de la tabla tipo documento.',
  PRIMARY KEY (`TIPOP_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='Tabla tipo de documento';

/*Data for the table `ams_tipodocumento` */

insert  into `ams_tipodocumento`(`TIPOP_Codigo`,`TIPOC_Descripcion`,`TIPOC_CantidadDigitos`,`TIPOC_FechaRegistro`,`TIPOC_FlagEstado`) values 
(1,'DNI','9','2010-10-28 16:53:09','1'),
(2,'CARNET DE EXTRANJERIA','11','2010-10-28 16:53:09','1');

/*Table structure for table `ams_ubigeo` */

DROP TABLE IF EXISTS `ams_ubigeo`;

CREATE TABLE `ams_ubigeo` (
  `UBIGP_Codigo` varchar(6) NOT NULL COMMENT 'Identificador del ubigeo',
  `UBIGC_CodDpto` varchar(2) DEFAULT NULL COMMENT 'Codigo del departamento\n',
  `UBIGC_CodProv` varchar(2) DEFAULT NULL COMMENT 'Codigo de la provincia.\n',
  `UBIGC_CodDist` varchar(2) DEFAULT NULL COMMENT 'Codigo del distrito',
  `UBIGC_Descripcion` varchar(100) DEFAULT NULL COMMENT 'Nombre del Distrito\n',
  `UBIGC_FlagEstado` char(1) DEFAULT '1' COMMENT 'Estado del ubigeo\n',
  PRIMARY KEY (`UBIGP_Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla del ubigeo\n';

/*Data for the table `ams_ubigeo` */

insert  into `ams_ubigeo`(`UBIGP_Codigo`,`UBIGC_CodDpto`,`UBIGC_CodProv`,`UBIGC_CodDist`,`UBIGC_Descripcion`,`UBIGC_FlagEstado`) values 
('000000','00','00','00','','1');

/*Table structure for table `ams_usuario` */

DROP TABLE IF EXISTS `ams_usuario`;

CREATE TABLE `ams_usuario` (
  `USUAP_Codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de usuario.\n',
  `TIPOP_Codigo` int(11) NOT NULL COMMENT 'Identificador de tipo de documentos.\n',
  `UBIGP_Codigo` varchar(6) NOT NULL COMMENT 'Identificador del ubigeo.',
  `USUAC_Correo` varchar(100) DEFAULT NULL COMMENT 'Nombres de usuario.\nFecha de nacimiento de usuario.\n',
  `USUAC_Password` varchar(50) DEFAULT NULL COMMENT 'Clave de cuenta de usuario.\n',
  `USUAC_Apellidos` varchar(250) DEFAULT NULL COMMENT 'Apellidos de usuario.\n',
  `USUAC_Nombres` varchar(250) DEFAULT NULL COMMENT 'Nombres de usuario.\n',
  `USUAC_Foto` varchar(50) DEFAULT NULL COMMENT 'Foto de usuario.\n',
  `USUAC_FechaNacimiento` datetime DEFAULT NULL COMMENT 'Fecha de nacimiento de usuario.\n',
  `USUAC_FechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de registro.\n',
  `USUAC_FechaModificacion` datetime DEFAULT NULL COMMENT 'Fecha de modificacion.',
  `USUAC_NumeroDocumento` varchar(50) DEFAULT NULL COMMENT 'Numero de documento de usuario.\n',
  `USUAC_Telefono` varchar(25) DEFAULT NULL COMMENT 'Telefono de usuario.\n',
  `USUAC_Sexo` bit(1) DEFAULT NULL COMMENT 'Sexo de usuario.\n',
  `USUAC_Ciudad` varchar(150) DEFAULT NULL COMMENT 'Ciudad de usuario.\n',
  `USUAC_FlagEnviado` char(1) DEFAULT '0' COMMENT 'Flag correo enviado',
  `USUAC_FlagConfirmado` char(1) DEFAULT '0' COMMENT 'Flag correo confimado.',
  `USUAC_FlagPromociones` char(1) DEFAULT '0' COMMENT 'Flag promociones de usuario.\n',
  `USUAC_FlagNotificaciones` char(1) DEFAULT '0' COMMENT 'Flag notificaciones de usuario.\n',
  `USUAC_FlagEstado` char(1) DEFAULT '1' COMMENT 'Estado del usuario.\n',
  `USUAC_FlagAdministrador` char(1) NOT NULL DEFAULT '0',
  `USUAC_FlagBienvenida` char(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`USUAP_Codigo`),
  KEY `fk_usuarios_tipoDocumentos1` (`TIPOP_Codigo`),
  KEY `fk_AMS_USUARIO_AMS_UBIGEO1` (`UBIGP_Codigo`),
  CONSTRAINT `fk_AMS_USUARIO_AMS_UBIGEO1` FOREIGN KEY (`UBIGP_Codigo`) REFERENCES `ams_ubigeo` (`UBIGP_Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_tipoDocumentos1` FOREIGN KEY (`TIPOP_Codigo`) REFERENCES `ams_tipodocumento` (`TIPOP_Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1 COMMENT='Tabla usuario del sistema';

/*Data for the table `ams_usuario` */

insert  into `ams_usuario`(`USUAP_Codigo`,`TIPOP_Codigo`,`UBIGP_Codigo`,`USUAC_Correo`,`USUAC_Password`,`USUAC_Apellidos`,`USUAC_Nombres`,`USUAC_Foto`,`USUAC_FechaNacimiento`,`USUAC_FechaRegistro`,`USUAC_FechaModificacion`,`USUAC_NumeroDocumento`,`USUAC_Telefono`,`USUAC_Sexo`,`USUAC_Ciudad`,`USUAC_FlagEnviado`,`USUAC_FlagConfirmado`,`USUAC_FlagPromociones`,`USUAC_FlagNotificaciones`,`USUAC_FlagEstado`,`USUAC_FlagAdministrador`,`USUAC_FlagBienvenida`) values 
(2,1,'000000','demo@correo.com','123456','Vila','Ricardo','','1963-05-05 00:00:00','2010-11-18 18:56:08',NULL,'10101010','4569874','','JUNIN','1','1','1','1','1','1','1'),
(3,1,'000000','erica@correo.com','ericatoon','Melgar','Erica ','','1977-11-08 00:00:00','2010-11-18 19:06:22',NULL,'25831790','5657520','','LIMA','1','1','1','1','1','1','0'),
(4,1,'000000','ricardo@correo.com','1187978569000','','ricardo','','0000-00-00 00:00:00','2010-11-18 19:36:45',NULL,'','','','','1','0','0','0','1','0','0'),
(5,1,'000000','arturo@correo.com','qwerty','maguiÃ±a','felix','','1950-01-01 00:00:00','2010-11-18 19:36:45',NULL,'458745874','9632587','','PIURA','1','1','1','1','1','1','1');

/*Table structure for table `ams_usuariogrupo` */

DROP TABLE IF EXISTS `ams_usuariogrupo`;

CREATE TABLE `ams_usuariogrupo` (
  `USUAP_Codigo` int(11) NOT NULL COMMENT 'Identificador de usuario.',
  `GRUPP_Codigo` int(11) NOT NULL COMMENT 'Identificador de grupo.\n',
  `USUAP_Amigo` int(11) NOT NULL COMMENT 'Identificador de amigo.\n',
  `USUGRUC_Puntaje` int(11) DEFAULT NULL COMMENT 'Puntaje de usuario.',
  `USUGRUC_FechaRegistro` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de registro.',
  `USUGRUC_FechaModificacion` datetime DEFAULT NULL COMMENT 'Fecha de modificacion.',
  `USUGRUC_FlagEstado` char(1) DEFAULT '1' COMMENT 'Flag estado usuario.\n',
  `USUGRUC_Regaloxdia` int(11) DEFAULT '0' COMMENT 'Cantidad de regalos por dia',
  `USUGRUC_CantidadDeseos` int(11) NOT NULL DEFAULT '0',
  `USUGRUC_FlagAdministrador` char(1) NOT NULL DEFAULT '0',
  `USUGRUC_FlagConfirmado` char(1) NOT NULL DEFAULT '0',
  `USUGRUC_DescripcionDeseos` varchar(250) NOT NULL,
  PRIMARY KEY (`USUAP_Codigo`,`GRUPP_Codigo`),
  KEY `fk_usuarioGrupos_usuarios1` (`USUAP_Codigo`),
  KEY `fk_usuarioGrupos_grupos1` (`GRUPP_Codigo`),
  KEY `fk_usuarioGrupos_usuarios2` (`USUAP_Amigo`),
  CONSTRAINT `fk_usuarioGrupos_grupos1` FOREIGN KEY (`GRUPP_Codigo`) REFERENCES `ams_grupo` (`GRUPP_Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarioGrupos_usuarios1` FOREIGN KEY (`USUAP_Codigo`) REFERENCES `ams_usuario` (`USUAP_Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarioGrupos_usuarios2` FOREIGN KEY (`USUAP_Amigo`) REFERENCES `ams_usuario` (`USUAP_Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ams_usuariogrupo` */

/*Table structure for table `ams_usuariogrupoevento` */

DROP TABLE IF EXISTS `ams_usuariogrupoevento`;

CREATE TABLE `ams_usuariogrupoevento` (
  `EVENP_Codigo` int(11) NOT NULL COMMENT 'Identificador de evento.\n',
  `USUAP_Codigo` int(11) NOT NULL COMMENT 'Identificador de usuario.\n',
  `GRUPP_Codigo` int(11) NOT NULL COMMENT 'Identificador de grupo.\n',
  `USUGRUEVEC_FechaUltimoRecordatorio` datetime DEFAULT NULL COMMENT 'Fecha de ultimo recordatorio.\n',
  `USUGRUEVEC_FechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de registro.',
  `USUGRUEVEC_FechaModificacion` datetime DEFAULT NULL COMMENT 'Fecha de modificacion.',
  `USUGRUEVEC_FlagRecordatorio` char(1) DEFAULT '1' COMMENT 'Flag Recordatorio.\n',
  `USUGRUEVEC_FlagEstado` char(1) DEFAULT '1' COMMENT 'Flag estado de la tabla.',
  PRIMARY KEY (`EVENP_Codigo`,`USUAP_Codigo`,`GRUPP_Codigo`),
  KEY `fk_recordatorios_has_usuarioGrupos_recordatorios1` (`EVENP_Codigo`),
  KEY `fk_recordatorios_has_usuarioGrupos_usuarioGrupos1` (`USUAP_Codigo`,`GRUPP_Codigo`),
  CONSTRAINT `fk_recordatorios_has_usuarioGrupos_recordatorios1` FOREIGN KEY (`EVENP_Codigo`) REFERENCES `ams_evento` (`EVENP_Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_recordatorios_has_usuarioGrupos_usuarioGrupos1` FOREIGN KEY (`USUAP_Codigo`, `GRUPP_Codigo`) REFERENCES `ams_usuariogrupo` (`USUAP_Codigo`, `GRUPP_Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ams_usuariogrupoevento` */

/*Table structure for table `ams_usuariogrupopunto` */

DROP TABLE IF EXISTS `ams_usuariogrupopunto`;

CREATE TABLE `ams_usuariogrupopunto` (
  `USUGRUPUNP_Codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de tabla.\n',
  `USUAP_Codigo` int(11) NOT NULL COMMENT 'Identificador de usuario.\n',
  `GRUPP_Codigo` int(11) NOT NULL COMMENT 'Identificador de grupo.\n',
  `PUNTP_Codigo` int(11) NOT NULL COMMENT 'Identificador de puntuacion.\n',
  `USUGRUPUNC_FechaRegistro` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha en la que se hizo el punto.\n',
  `USUGRUPUNC_Puntaje` int(11) DEFAULT NULL COMMENT 'Puntaje \n',
  `USUGRUPUNC_PuntajeTotalUsuario` int(11) DEFAULT NULL COMMENT 'Puntaje acumulado.\n',
  `USUGRUPUNC_FlagEstado` char(1) DEFAULT '1' COMMENT 'Flag estado de la tabla.\n',
  `USUGRUPUNC_FechaModificacion` datetime DEFAULT NULL COMMENT 'Fecha de modificacion.\n',
  PRIMARY KEY (`USUGRUPUNP_Codigo`),
  KEY `fk_grupoPuntos_puntos1` (`PUNTP_Codigo`),
  KEY `fk_usuarioGrupoPuntos_usuarioGrupos1` (`USUAP_Codigo`,`GRUPP_Codigo`),
  CONSTRAINT `fk_grupoPuntos_puntos1` FOREIGN KEY (`PUNTP_Codigo`) REFERENCES `ams_punto` (`PUNTP_Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarioGrupoPuntos_usuarioGrupos1` FOREIGN KEY (`USUAP_Codigo`, `GRUPP_Codigo`) REFERENCES `ams_usuariogrupo` (`USUAP_Codigo`, `GRUPP_Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ams_usuariogrupopunto` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
