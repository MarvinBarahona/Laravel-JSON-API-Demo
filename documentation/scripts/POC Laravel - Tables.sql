USE poc_laravel;

DROP TABLE IF EXISTS sucursal;
DROP TABLE IF EXISTS farmacia_medicamento;
DROP TABLE IF EXISTS medicamento;
DROP TABLE IF EXISTS farmacia;

CREATE TABLE farmacia(
    farmacia_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    razon_social VARCHAR(200) NOT NULL,
    nombre_comercial VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT farmacia_pk PRIMARY KEY (farmacia_id)
);


CREATE TABLE sucursal(
    sucursal_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    farmacia_id INT UNSIGNED NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    direccion VARCHAR(250) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT sucursal_pk PRIMARY KEY (sucursal_id),
    CONSTRAINT sucursal_farmacia_fk FOREIGN KEY (farmacia_id) REFERENCES farmacia(farmacia_id)
            ON DELETE RESTRICT ON UPDATE CASCADE
);

CREATE TABLE medicamento(
    medicamento_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    cantidad INT NOT NULL DEFAULT 0,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT medicina_pk PRIMARY KEY (medicamento_id)
);

CREATE TABLE farmacia_medicamento(
    farmacia_medicamento_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    farmacia_id INT UNSIGNED NOT NULL,
    medicamento_id INT UNSIGNED NOT NULL,
    CONSTRAINT farmacia_medicina_pk PRIMARY KEY (farmacia_medicamento_id),
    CONSTRAINT farmacia_medicina_sucursal_fk FOREIGN KEY (farmacia_id) REFERENCES farmacia(farmacia_id),
    CONSTRAINT farmacia_medicina_medicina_fk FOREIGN KEY (medicamento_id) REFERENCES medicamento(medicamento_id)
);


