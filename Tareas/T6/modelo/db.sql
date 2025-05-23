CREATE SCHEMA `formularioico` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci ;

CREATE TABLE `new_table` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_spanish_ci;

ALTER TABLE `new_table` 
RENAME TO  `usuario` ;
