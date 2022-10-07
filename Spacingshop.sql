-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE DATABASE	 IF NOT EXISTS `Spacingshop` DEFAULT CHARACTER SET utf8 ;
USE `Spacingshop` ;

-- -----------------------------------------------------
-- Table `Accounts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Accounts` (
  `AccountID` INT NOT NULL,
  `Username` VARCHAR(255) NOT NULL,
  `Password` VARCHAR(255) NOT NULL,
  `Email` VARCHAR(255),
  `Role` VARCHAR(255),
  PRIMARY KEY (`AccountID`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `Merch`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Merch` (
  `MerchID` INT NOT NULL,
  `Merch` VARCHAR(255) NOT NULL,
  `Price` DECIMAL(3.2) NOT NULL,
  `Stock` INT NOT NULL,
  PRIMARY KEY (`MerchID`))
ENGINE = InnoDB;

INSERT INTO Accounts (`AccountID`, `Username`, `Password`, `Email`, `Role`) 
VALUES ('1', 'SpacingUnicorn', '768_dy3W', null, 'Admin');

SELECT * FROM Accounts;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
