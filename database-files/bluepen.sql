-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema bluepen
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bluepen
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bluepen` DEFAULT CHARACTER SET utf8 ;
USE `bluepen` ;

-- -----------------------------------------------------
-- Table `bluepen`.`site`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bluepen`.`site` (
  `site_ref` VARCHAR(15) NOT NULL,
  `province` VARCHAR(50) NULL DEFAULT NULL,
  `city` VARCHAR(50) NULL DEFAULT NULL,
  `street` VARCHAR(50) NULL DEFAULT NULL,
  `location` VARCHAR(50) NULL DEFAULT NULL,
  `supplier_contact` VARCHAR(50) NULL DEFAULT NULL,
  `supplier_email` VARCHAR(50) NULL DEFAULT NULL,
  `height` DECIMAL(10,0) NULL DEFAULT NULL,
  `width` DECIMAL(10,0) NULL DEFAULT NULL,
  `avg_height` DECIMAL(10,0) NULL DEFAULT NULL,
  `avg_width` DECIMAL(10,0) NULL DEFAULT NULL,
  `cost` DECIMAL(10,0) NULL DEFAULT NULL,
  `CPSF` DECIMAL(10,0) NULL DEFAULT NULL,
  `avg_CPSF` DECIMAL(10,0) NULL DEFAULT NULL,
  `CPM` DECIMAL(10,0) NULL DEFAULT NULL,
  `avg_CPM` DECIMAL(10,0) NULL DEFAULT NULL,
  `format` VARCHAR(30) NULL DEFAULT NULL,
  `x` DECIMAL(10,0) NULL DEFAULT NULL,
  `y` DECIMAL(10,0) NULL DEFAULT NULL,
  `traffic_count` DECIMAL(10,0) NULL DEFAULT NULL,
  `score` DECIMAL(10,0) NULL DEFAULT NULL,
  `ref_audience` DECIMAL(10,0) NULL DEFAULT NULL,
  `remarks` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`site_ref`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `bluepen`.`materialplacement`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bluepen`.`materialplacement` (
  `site_ref` VARCHAR(15) NOT NULL,
  `time_of_placement` DATE NOT NULL,
  `material_name` VARCHAR(50) NOT NULL,
  `category` VARCHAR(30) NULL DEFAULT NULL,
  `subcategory` VARCHAR(30) NULL DEFAULT NULL,
  PRIMARY KEY (`site_ref`, `time_of_placement`),
  CONSTRAINT `site_ref_foreign_key`
    FOREIGN KEY (`site_ref`)
    REFERENCES `bluepen`.`site` (`site_ref`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `bluepen`.`usergroup`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bluepen`.`usergroup` (
  `group_name` VARCHAR(30) NOT NULL,
  `group_info` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`group_name`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `bluepen`.`materialprivilege`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bluepen`.`materialprivilege` (
  `group_name` VARCHAR(30) NOT NULL,
  `material_name` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`group_name`, `material_name`),
  CONSTRAINT `group_name_foreign_key`
    FOREIGN KEY (`group_name`)
    REFERENCES `bluepen`.`usergroup` (`group_name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `bluepen`.`sitefield`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bluepen`.`sitefield` (
  `column_id` INT(11) NOT NULL,
  `column_name` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`column_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `bluepen`.`sitefieldprivilege`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bluepen`.`sitefieldprivilege` (
  `group_name` VARCHAR(30) NOT NULL,
  `column_id` INT(11) NOT NULL,
  PRIMARY KEY (`group_name`, `column_id`),
  INDEX `column_id_foreign_key_idx` (`column_id` ASC),
  CONSTRAINT `column_id_foreign_key`
    FOREIGN KEY (`column_id`)
    REFERENCES `bluepen`.`sitefield` (`column_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `group_name_site_field_foreign_key`
    FOREIGN KEY (`group_name`)
    REFERENCES `bluepen`.`usergroup` (`group_name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `bluepen`.`useraccount`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bluepen`.`useraccount` (
  `user_name` VARCHAR(30) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `last_name` VARCHAR(30) NOT NULL,
  `first_name` VARCHAR(30) NOT NULL,
  `monitoring_group` VARCHAR(30) NULL DEFAULT NULL,
  `competitive_group` VARCHAR(30) NULL DEFAULT NULL,
  `site_sourcing_group` VARCHAR(30) NULL DEFAULT NULL,
  `active` INT(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_name`),
  INDEX `monitoring_group_foreign_key_idx` (`monitoring_group` ASC),
  INDEX `competitive_group_foreign_key_idx` (`competitive_group` ASC),
  INDEX `site_sourcing_group_foreign_key_idx` (`site_sourcing_group` ASC),
  CONSTRAINT `competitive_group_foreign_key`
    FOREIGN KEY (`competitive_group`)
    REFERENCES `bluepen`.`usergroup` (`group_name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `monitoring_group_foreign_key`
    FOREIGN KEY (`monitoring_group`)
    REFERENCES `bluepen`.`usergroup` (`group_name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `site_sourcing_group_foreign_key`
    FOREIGN KEY (`site_sourcing_group`)
    REFERENCES `bluepen`.`usergroup` (`group_name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
