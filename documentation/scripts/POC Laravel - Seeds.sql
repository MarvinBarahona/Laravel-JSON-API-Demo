USE poc_laravel;

INSERT INTO farmacia(razon_social, nombre_comercial) VALUES
        ('Farmacias Económicas', 'Farmacias Económicas'),
        ('Farmix S.A de C.V.', 'Farmacia Las Américas');

INSERT INTO sucursal(farmacia_id, nombre, direccion) values
        ((SELECT farmacia_id FROM farmacia WHERE razon_social = 'Farmacias Económicas'), 'Sucursal 87 Av Norte', 'Plaza Portal de Piedra, Local # 3, 9ª Calle Pte y 87 Av Norte, # 546, Col. Escalón, SS'),
        ((SELECT farmacia_id FROM farmacia WHERE razon_social = 'Farmacias Económicas'), 'Sucursal Zacamil', 'Centro Comercial Zacamil II Local 16, 29 Ave. Nte. Y Calle Zacamil, Centro Urbano Josè Simeon Cañas Mejicanos, San Salvador'),
        ((SELECT farmacia_id FROM farmacia WHERE razon_social = 'Farmix S.A de C.V.'), 'Casa Matriz', 'Calle Nueva 2 y 71 Av. sur, Col. Escalón. #19, San Salvador'),
        ((SELECT farmacia_id FROM farmacia WHERE razon_social = 'Farmacias Económicas'), 'Sucursal Plaza Santo Tomás', 'KM 13 Carretera Antigua a Zacatecoluca, Centro Comercial Plaza Santo Tomás, Local 9 A, Santo Tomás, San Salvador'),
        ((SELECT farmacia_id FROM farmacia WHERE razon_social = 'Farmix S.A de C.V.'), 'Sucursal Metrosur', 'Centro Comercial Metrosur local Nº 14 Alameda Juan Pablo II, San Salvador.');

INSERT INTO medicamento(nombre) values
        ('acetaminofen'),
        ('paracetamol'),
        ('raditidina'),
        ('tiotropio');

INSERT INTO farmacia_medicamento(farmacia_id, medicamento_id) values
        ((SELECT farmacia_id FROM farmacia WHERE razon_social = 'Farmacias Económicas'), (SELECT medicamento_id FROM medicamento WHERE nombre = 'acetaminofen')),
        ((SELECT farmacia_id FROM farmacia WHERE razon_social = 'Farmix S.A de C.V.'), (SELECT medicamento_id FROM medicamento WHERE nombre = 'acetaminofen')),
        ((SELECT farmacia_id FROM farmacia WHERE razon_social = 'Farmix S.A de C.V.'), (SELECT medicamento_id FROM medicamento WHERE nombre = 'paracetamol')),
        ((SELECT farmacia_id FROM farmacia WHERE razon_social = 'Farmix S.A de C.V.'), (SELECT medicamento_id FROM medicamento WHERE nombre = 'raditidina')),
        ((SELECT farmacia_id FROM farmacia WHERE razon_social = 'Farmix S.A de C.V.'), (SELECT medicamento_id FROM medicamento WHERE nombre = 'tiotropio'));