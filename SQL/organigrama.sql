/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.9-MariaDB : Database - organigrama
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`organigrama` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `organigrama`;

/*Table structure for table `actividad` */

DROP TABLE IF EXISTS `actividad`;

CREATE TABLE `actividad` (
  `idActividad` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Region` varchar(45) NOT NULL,
  `Proposito` varchar(45) DEFAULT NULL,
  `Requisito` varchar(45) DEFAULT NULL,
  `Detalle` varchar(45) DEFAULT NULL,
  `Cantidad_Persona` smallint(6) DEFAULT NULL,
  `Cantidad_Total` smallint(6) DEFAULT NULL,
  `Categoria_idCategoria` int(11) NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idActividad`),
  KEY `fk_Actividad_Categoria1_idx` (`Categoria_idCategoria`),
  KEY `fk_Actividad_Usuario1_idx` (`Usuario_idUsuario`),
  CONSTRAINT `fk_Actividad_Categoria1` FOREIGN KEY (`Categoria_idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Actividad_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `actividad` */

/*Table structure for table `categoria` */

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Estado` varchar(45) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `categoria` */

/*Table structure for table `rolusuario` */

DROP TABLE IF EXISTS `rolusuario`;

CREATE TABLE `rolusuario` (
  `idRolUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Rol` varchar(45) DEFAULT NULL,
  `Usuario` varchar(45) DEFAULT NULL,
  `Contrasena` varchar(45) DEFAULT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idRolUsuario`),
  KEY `fk_RolUsuario_Usuario_idx` (`Usuario_idUsuario`),
  CONSTRAINT `fk_RolUsuario_Usuario` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `rolusuario` */

/*Table structure for table `subtarea` */

DROP TABLE IF EXISTS `subtarea`;

CREATE TABLE `subtarea` (
  `idSubTarea` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Detalle` varchar(45) DEFAULT NULL,
  `Estado` varchar(45) DEFAULT NULL,
  `Requisitos` varchar(45) DEFAULT NULL,
  `Cantidad` smallint(6) DEFAULT NULL,
  `Total` smallint(6) DEFAULT NULL,
  `Tarea_idTarea` int(11) NOT NULL,
  PRIMARY KEY (`idSubTarea`),
  KEY `fk_SubTarea_Tarea1_idx` (`Tarea_idTarea`),
  CONSTRAINT `fk_SubTarea_Tarea1` FOREIGN KEY (`Tarea_idTarea`) REFERENCES `tarea` (`idTarea`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `subtarea` */

/*Table structure for table `tarea` */

DROP TABLE IF EXISTS `tarea`;

CREATE TABLE `tarea` (
  `idTarea` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  `Detalle` varchar(45) DEFAULT NULL,
  `Estado` varchar(45) DEFAULT NULL,
  `Requisitos` varchar(45) DEFAULT NULL,
  `Cantidad` smallint(6) DEFAULT NULL,
  `Total` smallint(6) DEFAULT NULL,
  `Actividad_idActividad` int(11) NOT NULL,
  PRIMARY KEY (`idTarea`),
  KEY `fk_Tarea_Actividad1_idx` (`Actividad_idActividad`),
  CONSTRAINT `fk_Tarea_Actividad1` FOREIGN KEY (`Actividad_idActividad`) REFERENCES `actividad` (`idActividad`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tarea` */

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido1` varchar(45) NOT NULL,
  `Apellido2` varchar(45) NOT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `usuario` */

/* Procedure structure for procedure `ACTIVIDAD_ACTUALIZAR` */

/*!50003 DROP PROCEDURE IF EXISTS  `ACTIVIDAD_ACTUALIZAR` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ACTIVIDAD_ACTUALIZAR`(
	pID_ACTIVIDAD	INT,
	pNOMBRE		VARCHAR(45),
	pREGION		VARCHAR(45),
	pPROPOSITO	VARCHAR(45),
	pREQUISITO	VARCHAR(45),
	pDETALLE	VARCHAR(45),
	pCANTI_PERSONA	SMALLINT(6),
	pCANTI_TOTAL	SMALLINT(6),
	pCATE_IDCATE	INT,
	pUSER_IDUSER	INT)
BEGIN
	UPDATE ORGANIGRAMA.`Actividad` SET
		ACTIVIDAD.`Nombre` 		= pNOMBRE,
		ACTIVIDAD.`Region` 		= pREGION,
		ACTIVIDAD.`Proposito` 		= pPROPOSITO,
		ACTIVIDAD.`Requisito`		= pREQUISITO,
		ACTIVIDAD.`Detalle`		= pDETALLE,
		ACTIVIDAD.`Cantidad_Persona` 	= pCANTI_PERSONA,
		ACTIVIDAD.`Cantidad_Total`   	= pCANTI_TOTAL,
		ACTIVIDAD.`Categoria_idCategoria` = pCATE_IDCATE,
		ACTIVIDAD.`Usuario_idUsuario`	= pUSER_IDUSER
	
	WHERE ACTIVIDAD.`idActividad` = pID_ACTIVIDAD;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `ACTIVIDAD_ELIMINAR` */

/*!50003 DROP PROCEDURE IF EXISTS  `ACTIVIDAD_ELIMINAR` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ACTIVIDAD_ELIMINAR`(
	pID_ACTIVIDAD INT)
BEGIN
	DELETE FROM ORGANIGRAMA.`Actividad`
	WHERE ACTIVIDAD.`idActividad` = pID_ACTIVIDAD;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `ACTIVIDAD_INSERTAR` */

/*!50003 DROP PROCEDURE IF EXISTS  `ACTIVIDAD_INSERTAR` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ACTIVIDAD_INSERTAR`(
	pID_ACTIVIDAD	INT,
	pNOMBRE		VARCHAR(45),
	pREGION		VARCHAR(45),
	pPROPOSITO	VARCHAR(45),
	pREQUISITO	VARCHAR(45),
	pDETALLE	VARCHAR(45),
	pCANTI_PERSONA	SMALLINT(6),
	pCANTI_TOTAL	SMALLINT(6),
	pCATE_IDCATE	INT,
	pUSER_IDUSER	INT)
BEGIN
	INSERT INTO ORGANIGRAMA.Actividad(idActividad,Nombre,Region,Proposito,Requisito,Detalle,Cantidad_Persona,
				          Cantidad_Total,Categoria_idCategoria,Usuario_idUsuario)
				          
	values (pID_ACTIVIDAD,pNOMBRE,pREGION,pPROPOSITO,pDETALLE,pCANTIDAD_PERSONA,pCANTI_TOTAL,pCATE_IDCATE,pUSER_IDUSER);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `CATEGORIA_ACTUALIZAR` */

/*!50003 DROP PROCEDURE IF EXISTS  `CATEGORIA_ACTUALIZAR` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `CATEGORIA_ACTUALIZAR`(
	pIDCATEGORIA	INT,
	pESTADO		VARCHAR(45))
BEGIN
	UPDATE ORGANIGRAMA.`Categoria` SET 
		CATEGORIA.`Estado` = pESTADO
		
	WHERE CATEGORIA.`idCategoria` = pIDCATEGORIA;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `CATEGORIA_ELIMINAR` */

/*!50003 DROP PROCEDURE IF EXISTS  `CATEGORIA_ELIMINAR` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `CATEGORIA_ELIMINAR`(
	pIDCATEGORIA INT)
BEGIN
	DELETE FROM ORGANIGRAMA.`Categoria` 
	
	WHERE CATEGORIA.`idCategoria` = pIDCATEGORIA;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `CATEGORIA_INSERTAR` */

/*!50003 DROP PROCEDURE IF EXISTS  `CATEGORIA_INSERTAR` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `CATEGORIA_INSERTAR`(
	pIDCATEGORIA	INT,
	pESTADO		VARCHAR(45))
BEGIN
	INSERT INTO ORGANIGRAMA.`Categoria`(idCategoria,Estado)
	values(pIDCATEGORIA,pESTADO);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `ROLUSUARIO_ACTUALIZAR` */

/*!50003 DROP PROCEDURE IF EXISTS  `ROLUSUARIO_ACTUALIZAR` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ROLUSUARIO_ACTUALIZAR`(
	pID_ROLUSUARIO		INT,
	pROL			VARCHAR(45),
	pUSUARIO		VARCHAR(45),
	pCONTRASEÑA		VARCHAR(45),
	pUSER_IDUSER		INT)
BEGIN
	UPDATE ORGANIGRAMA.`rolusuario` SET
		ROLUSUARIO.`Rol`		= pROL,
		ROLUSUARIO.`Usuario`		= pUSUARIO,
		ROLUSUARIO.`Contrasena`		= pCONTRASEÑA,
		ROLUSUARIO.`Usuario_idUsuario`	= pUSER_IDUSER
	
	WHERE	ROLUSUARIO.`idRolUsuario`	= pID_ROLUSUAIRO;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `ROLUSUARIO_ELIMINAR` */

/*!50003 DROP PROCEDURE IF EXISTS  `ROLUSUARIO_ELIMINAR` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ROLUSUARIO_ELIMINAR`(
	pID_ROLUSUARIO INT)
BEGIN
	DELETE FROM ORGANIGRAMA.`RolUsuario`
	
	WHERE ROLUSUARIO.`idRolUsuario` = pID_ROLUSUARIO;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `ROLUSUARIO_INSERTAR` */

/*!50003 DROP PROCEDURE IF EXISTS  `ROLUSUARIO_INSERTAR` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ROLUSUARIO_INSERTAR`(
	pID_ROLUSUARIO		INT,
	pROL			VARCHAR(45),
	pUSUARIO		VARCHAR(45),
	pCONTRASEÑA		VARCHAR(45),
	pUSER_IDUSER		INT)
BEGIN
	INSERT INTO ORGANIGRAMA.`RolUsuario`(idRolUsuario,Rol,Usuario,Contraseña,Usuario_idUsuario)
	
	values (pID_ROLUSUARIO,pROL,pUSUARIO,pCONTRASEÑA,pUSER_IDUSER);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `SUBTAREA_ACTUALIZAR` */

/*!50003 DROP PROCEDURE IF EXISTS  `SUBTAREA_ACTUALIZAR` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `SUBTAREA_ACTUALIZAR`(
	pIDSUB_TAREA		INT,
	pNOMBRE			VARCHAR(45),
	pDETALLE		VARCHAR(45),
	pESTADO			VARCHAR(45),
	pREQUISITOS		VARCHAR(45),
	pCANTIDAD		SMALLINT(6),
	pTOTAL			SMALLINT(6),
	pTAREA_IDTAREA		INT)
BEGIN
	UPDATE ORGANIGRAMA.`SubTarea` SET
		SUBTAREA.`Nombre`	= pNOMBRE,
		SUBTAREA.`Detalle`	= pDETALLE,
		SUBTAREA.`Estado`	= pESTADO,
		SUBTAREA.`Requisitos`	= pREQUISITOS,
		SUBTAREA.`Cantidad`	= pCANTIDAD,
		SUBTAREA.`Total`	= pTOTAL,
		SUBTAREA.`Tarea_idTarea`= pTAREA_IDTAREA
	
	WHERE SUBTAREA.`idSubTarea`	= pIDSUB_TAREA;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `SUBTAREA_ELIMINAR` */

/*!50003 DROP PROCEDURE IF EXISTS  `SUBTAREA_ELIMINAR` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `SUBTAREA_ELIMINAR`(
	pIDSUB_TAREA		INT)
BEGIN
	DELETE FROM ORGANIGRAMA.`SubTarea` 
	
	WHERE SUBTAREA.`idSubTarea` = pIDSUB_TAREA;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `SUBTAREA_INSERTAR` */

/*!50003 DROP PROCEDURE IF EXISTS  `SUBTAREA_INSERTAR` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `SUBTAREA_INSERTAR`(
	pIDSUB_TAREA		INT,
	pNOMBRE			VARCHAR(45),
	pDETALLE		VARCHAR(45),
	pESTADO			VARCHAR(45),
	pREQUISITOS		VARCHAR(45),
	pCANTIDAD		SMALLINT(6),
	pTOTAL			SMALLINT(6),
	pTAREA_IDTAREA		INT)
BEGIN
	INSERT INTO ORGANIGRAMA.`SubTarea` (idSub,Nombre,Detalle,Estado,Requisitos,Cantidad,Total,Tarea_idTarea)
	
	values (pUDSUB_TAREA,pNOMBRE,pDETALLE,pESTADO,pREQUISITOS,pCANTIDAD,pTOTAL,pTAREA,pTAREA_IDTAREA);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `TAREA_ACTUALIZAR` */

/*!50003 DROP PROCEDURE IF EXISTS  `TAREA_ACTUALIZAR` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `TAREA_ACTUALIZAR`(
	pID_TAREA		INT,
	pNOMBRE			VARCHAR(45),
	pESTADO			VARCHAR(45),
	pREQUISITOS		VARCHAR(45),
	pCANTIDAD		SMALLINT(6),
	pTOTAL			SMALLINT(6),
	pACTI_IDACTIVIDAD	INT
	)
BEGIN
	UPDATE ORGANIGRAMA.`Tarea` SET
		TAREA.`Nombre`		= pNOMBRE,
		TAREA.`Estado`		= pESTADO,
		TAREA.`Requisitos`	= pREQUISITOS,
		TAREA.`Cantidad`	= pCANTIDAD,
		TAREA.`Total`		= pTOTAL,
		TAREA.`Actividad_idActividad` = pACTI_IDACTIVIDAD
	
	WHERE TAREA.`idTarea` = pID_TAREA;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `TAREA_ELIMINAR` */

/*!50003 DROP PROCEDURE IF EXISTS  `TAREA_ELIMINAR` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `TAREA_ELIMINAR`(
	ID_TAREA		INT
	)
BEGIN
	DELETE FROM ORGANIGRAMA.`Tarea` 
	
	WHERE TAREA.`idTarea` = ID_TAREA;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `TAREA_INSERTAR` */

/*!50003 DROP PROCEDURE IF EXISTS  `TAREA_INSERTAR` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `TAREA_INSERTAR`(
	pID_TAREA		INT,
	pNOMBRE			VARCHAR(45),
	pESTADO			VARCHAR(45),
	pREQUISITOS		VARCHAR(45),
	pCANTIDAD		SMALLINT(6),
	pTOTAL			SMALLINT(6),
	pACTI_IDACTIVIDAD	INT
	)
BEGIN
	INSERT INTO ORGANIGRAMA.`Tarea`(idTarea,Nombre,Detalle,Estado,Requisitos,Cantidad,Total,Actividad_idActividad)
	
	values (pID_TAREA,pNOMBRE,pESTADO,pREQUISITOS,pCANTIDAD,pTOTAL,pACTI_IDACTIVIDAD);
    END */$$
DELIMITER ;

/* Procedure structure for procedure `USUARIO_ACTUALIZAR` */

/*!50003 DROP PROCEDURE IF EXISTS  `USUARIO_ACTUALIZAR` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `USUARIO_ACTUALIZAR`(
	pID_USUARIO	INT,
	pNOMBRE		VARCHAR(45),
	pAPELLIDO1	VARCHAR(45),
	pAPELLIDO2	VARCHAR(45),
	pTELEFONO	VARCHAR(45),
	pCORREO		VARCHAR(45)
	)
BEGIN
	UPDATE ORGANIGRAMA.`usuario` set
		USUARIO.`Nombre`	= pNOMBRE,
		USUARIO.`Apellido1`	= pAPELLIDO1,
		USUARIO.`apellido2`	= pAPELLIDO2,
		USUARIO.`Telefono`	= pTELEFONO,
		USUARIO.`Correo`	= pCORREO
		
	WHERE USUARIO.`idUsuario` = pID_USUARIO;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `USUARIO_ELIMINAR` */

/*!50003 DROP PROCEDURE IF EXISTS  `USUARIO_ELIMINAR` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `USUARIO_ELIMINAR`(
	pID_USUARIO	INT
	)
BEGIN
	DELETE FROM ORGANIGRAMA.`usuario`
	
	WHERE USUARIO.`idUsuario` = pID_USUARIO;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `USUARIO_INSERTAR` */

/*!50003 DROP PROCEDURE IF EXISTS  `USUARIO_INSERTAR` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `USUARIO_INSERTAR`(
	pID_USUARIO	INT,
	pNOMBRE		VARCHAR(45),
	pAPELLIDO1	VARCHAR(45),
	pAPELLIDO2	VARCHAR(45),
	pTELEFONO	VARCHAR(45),
	pCORREO		VARCHAR(45)
	)
BEGIN
	INSERT INTO ORGANIGRAMA.`Usuario` (idUsuario,Nombre,Apellido1,Apellido2,Telefono,Correo)
	
	values (pID_USUARIO,pNOMBRE,pAPELLIDO1,pAPELLIDO2,pTELEFONO,pCORREO);
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
