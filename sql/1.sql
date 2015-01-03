SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `wone` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `wone` ;


-- -----------------------------------------------------
-- Table `wone`.`customer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wone`.`customer` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `addr` VARCHAR(90) NOT NULL,
  `phone` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`)
)
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `wone`.`product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wone`.`product` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `startdate` DATE NOT NULL,
  `duration` INT NOT NULL,
  PRIMARY KEY (`id`)
)
  ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `wone`.`payment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wone`.`payment` (
  `id` INT NOT NULL,
  `date` DATE NOT NULL,
  `amount` DECIMAL NOT NULL,
  PRIMARY KEY (`id`)
)
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `wone`.`subscription`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wone`.`subscription` (
  `id` INT NOT NULL,
  `id_prod` INT NOT NULL,
  `id_cust` INT NOT NULL,
  `startdatesubs` DATE NOT NULL,
  `enddatesubs` DATE NOT NULL,
  PRIMARY KEY (`id`),

  CONSTRAINT `fk_subscription_product`
  FOREIGN KEY (`id_prod`)
  REFERENCES `wone`.`product` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,

  CONSTRAINT `fk_subscription_customer`
  FOREIGN KEY (`id_cust`)
  REFERENCES `wone`.`customer` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
)
  ENGINE = InnoDB;






SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
