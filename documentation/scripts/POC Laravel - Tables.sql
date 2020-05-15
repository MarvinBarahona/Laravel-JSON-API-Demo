USE poc_laravel;

DROP TABLE IF EXISTS sucursal;
DROP TABLE IF EXISTS farmacia;

CREATE TABLE farmacia(
    farmacia_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    razon_social VARCHAR(200) NOT NULL,
    nombre_comercial VARCHAR(100) NOT NULL,
    CONSTRAINT farmacia_pk PRIMARY KEY (farmacia_id)
);


CREATE TABLE sucursal(
    sucursal_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    farmacia_id INT UNSIGNED NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    direccion VARCHAR(250) NOT NULL,
    CONSTRAINT sucursal_pk PRIMARY KEY (sucursal_id),
    CONSTRAINT sucursal_farmacia_fk FOREIGN KEY (farmacia_id) REFERENCES farmacia(farmacia_id)
            ON DELETE RESTRICT ON UPDATE CASCADE
);


