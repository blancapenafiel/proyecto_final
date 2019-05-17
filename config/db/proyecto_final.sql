-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema proyecto_final
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `proyecto_final` ;

-- -----------------------------------------------------
-- Schema proyecto_final
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `proyecto_final` DEFAULT CHARACTER SET utf8 ;
USE `proyecto_final` ;

-- -----------------------------------------------------
-- Table `proyecto_final`.`USUARIOS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `proyecto_final`.`USUARIOS` ;

CREATE TABLE IF NOT EXISTS `proyecto_final`.`USUARIOS` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(50) NOT NULL,
  `password` VARCHAR(180) NOT NULL,
  `email` VARCHAR(60) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto_final`.`CATEGORIAS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `proyecto_final`.`CATEGORIAS` ;

CREATE TABLE IF NOT EXISTS `proyecto_final`.`CATEGORIAS` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre_cat` VARCHAR(50) NULL,
  `url_cat` VARCHAR(130) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto_final`.`RELATOS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `proyecto_final`.`RELATOS` ;

CREATE TABLE IF NOT EXISTS `proyecto_final`.`RELATOS` (
  `id_relatos` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NULL,
  `descripcion` VARCHAR(300) NULL,
  `url_relato` VARCHAR(130) NULL,
  `USUARIOS_id` INT NOT NULL,
  `CATEGORIAS_id` INT NOT NULL,
  PRIMARY KEY (`id_relatos`),
  INDEX `fk_RELATOS_USUARIOS_idx` (`USUARIOS_id` ASC),
  INDEX `fk_RELATOS_CATEGORIAS1_idx` (`CATEGORIAS_id` ASC),
  CONSTRAINT `fk_RELATOS_USUARIOS`
    FOREIGN KEY (`USUARIOS_id`)
    REFERENCES `proyecto_final`.`USUARIOS` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_RELATOS_CATEGORIAS1`
    FOREIGN KEY (`CATEGORIAS_id`)
    REFERENCES `proyecto_final`.`CATEGORIAS` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SELECT * from uusuariossuarios WHERE usuario = 'blanca' and password='blanca';

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

select * from USUARIOS;

INSERT into usuarios (`id`,`usuario`,`password`,`email`) values (null, 'blanca', 'blanca', 'blanca');


INSERT into usuarios (`id`,`usuario`,`password`,`email`)values (null, 'nolasc', 'nolasc', 'blanca');