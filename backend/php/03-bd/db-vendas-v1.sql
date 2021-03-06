-- MySQL Script generated by MySQL Workbench
-- sex 28 ago 2020 13:29:52
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema vendas
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema vendas
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `vendas` ;
USE `vendas` ;

-- -----------------------------------------------------
-- Table `vendas`.`marcas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vendas`.`marcas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vendas`.`produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vendas`.`produtos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `preco` DOUBLE NOT NULL,
  `estoque` VARCHAR(45) NOT NULL,
  `marca_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_produtos_marcas_idx` (`marca_id` ASC) VISIBLE,
  CONSTRAINT `fk_produtos_marcas`
    FOREIGN KEY (`marca_id`)
    REFERENCES `vendas`.`marcas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vendas`.`departamentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vendas`.`departamentos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vendas`.`produto_departamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vendas`.`produto_departamento` (
  `produto_id` INT NOT NULL,
  `departamento_id` INT NOT NULL,
  PRIMARY KEY (`produto_id`, `departamento_id`),
  INDEX `fk_produto_departamento_departamentos1_idx` (`departamento_id` ASC) VISIBLE,
  CONSTRAINT `fk_produto_departamento_produtos1`
    FOREIGN KEY (`produto_id`)
    REFERENCES `vendas`.`produtos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produto_departamento_departamentos1`
    FOREIGN KEY (`departamento_id`)
    REFERENCES `vendas`.`departamentos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
