NOTAS
SITEMA OPERARTIVO EDUCATIVO

sql la base de datos la llame crud
creacion tabla nombre usuarios
CREATE TABLE `crud`.`usuarios` (`id_user` INT(10) NOT NULL AUTO_INCREMENT , `user_name` VARCHAR(50) NOT NULL , `user_lastname` VARCHAR(50) NOT NULL , `user_email` INT(100) NOT NULL , `user_user` VARCHAR(30) NOT NULL , `user_clave` VARCHAR(300) NOT NULL , `user_photo` VARCHAR(540) NOT NULL , `user_createdate` TIMESTAMP NOT NULL DEFAULT current_timestamp, `user_update` TIMESTAMP NOT NULL DEFAULT current_timestamp, PRIMARY KEY (`id_user`)) ENGINE = InnoDB;