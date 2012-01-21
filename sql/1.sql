SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';


-- -----------------------------------------------------
-- Table `domain_keeper`.`domains`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `domain_keeper`.`domains` (
  `id_domains` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `address` VARCHAR(100) NULL ,
  PRIMARY KEY (`id_domains`) ,
  UNIQUE INDEX `address_UNIQUE` (`address` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_czech_ci
COMMENT = 'seznam hlídaných domén' ;


-- -----------------------------------------------------
-- Table `domain_keeper`.`domains_log_group`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `domain_keeper`.`domains_log_group` (
  `id_domains_log_group` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `from` DATETIME NULL ,
  `to` DATETIME NULL ,
  PRIMARY KEY (`id_domains_log_group`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_czech_ci,
COMMENT = 'skupiny výpadků - eviduje od kdy do kdy byl' ;


-- -----------------------------------------------------
-- Table `domain_keeper`.`domains_log_items`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `domain_keeper`.`domains_log_items` (
  `id_domains_log_items` INT NOT NULL ,
  `id_domains` INT UNSIGNED NULL ,
  `id_domans_log_group` INT UNSIGNED NULL ,
  PRIMARY KEY (`id_domains_log_items`) ,
  INDEX `fk-dli_id_d-d_id_d` (`id_domains` ASC) ,
  INDEX `fk-dli_id_dlg-dlg_id_dlg` (`id_domans_log_group` ASC) ,
  CONSTRAINT `fk-dli_id_d-d_id_d`
    FOREIGN KEY (`id_domains` )
    REFERENCES `domain_keeper`.`domains` (`id_domains` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk-dli_id_dlg-dlg_id_dlg`
    FOREIGN KEY (`id_domans_log_group` )
    REFERENCES `domain_keeper`.`domains_log_group` (`id_domains_log_group` )
    ON DELETE SET NULL
    ON UPDATE CASCADE)
ENGINE = InnoDB,
COMMENT = 'jednotlivé výpadky' ;


-- -----------------------------------------------------
-- Table `domain_keeper`.`addressbook`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `domain_keeper`.`addressbook` (
  `id_addressbook` INT UNSIGNED NOT NULL ,
  `name` VARCHAR(45) NULL ,
  `surname` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  PRIMARY KEY (`id_addressbook`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_czech_ci,
COMMENT = 'seznam emailů, na které lze nastavit zasílání logů' ;


-- -----------------------------------------------------
-- Table `domain_keeper`.`domains_emails`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `domain_keeper`.`domains_emails` (
  `id_domains_emails` INT UNSIGNED NOT NULL ,
  `id_domains` INT UNSIGNED NULL ,
  `id_addressbook` INT UNSIGNED NULL ,
  PRIMARY KEY (`id_domains_emails`) ,
  INDEX `fk-de_id_d-d_id_d` (`id_domains` ASC) ,
  INDEX `fk-de_id_a-a_id_a` (`id_addressbook` ASC) ,
  CONSTRAINT `fk-de_id_d-d_id_d`
    FOREIGN KEY (`id_domains` )
    REFERENCES `domain_keeper`.`domains` (`id_domains` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk-de_id_a-a_id_a`
    FOREIGN KEY (`id_addressbook` )
    REFERENCES `domain_keeper`.`addressbook` (`id_addressbook` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_czech_ci,
COMMENT = 'přiřazení emailů jednotlivým doménám' ;


-- -----------------------------------------------------
-- Table `domain_keeper`.`domains_log_emails`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `domain_keeper`.`domains_log_emails` (
  `id_domains_log_emails` INT UNSIGNED NOT NULL ,
  `id_domains_emails` INT UNSIGNED NULL ,
  `id_domains_log_group` INT UNSIGNED NULL ,
  `result` TINYINT(1) NULL DEFAULT 0 ,
  PRIMARY KEY (`id_domains_log_emails`) ,
  INDEX `fk-dle_id_de-de_id_de` (`id_domains_emails` ASC) ,
  INDEX `fk-dle_id_dlg-dlg_id_dg` (`id_domains_log_group` ASC) ,
  CONSTRAINT `fk-dle_id_de-de_id_de`
    FOREIGN KEY (`id_domains_emails` )
    REFERENCES `domain_keeper`.`domains_emails` (`id_domains_emails` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk-dle_id_dlg-dlg_id_dg`
    FOREIGN KEY (`id_domains_log_group` )
    REFERENCES `domain_keeper`.`domains_log_group` (`id_domains_log_group` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_czech_ci,
COMMENT = 'info o tom jaké emaily se odeslaly' ;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
