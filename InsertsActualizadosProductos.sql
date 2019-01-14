
-- Primero ejecuta este comando para borrar todos los datos de la tabla

TRUNCATE TABLE producto

-- Despues ya corres los inserts

INSERT INTO `producto` (`id_prod`, `nombre`, `equipo`, `disciplina`, `tamaño`, `color`, `precio`, `marca`, `imagen`, `id_cat`, `id_admin`) VALUES

('1', 'Jersey', 'America', 'Futbol', 'Grande', 'Amarillo', '1500.00', 'Nike', '01-America-JerseyAdulto.png', 1, 1),

('2', 'Jersey', 'Chivas', 'Futbol', 'Chica', 'Rojo', '1000.00', 'Nike', '01-Chivas-JerseyAdulto.png', 1, 1),

('3', 'Jersey', 'Yankees', 'Baseball', 'Mediano', 'Gris', '500.00', 'Adidas', '03-Yankees-JerseyAdulto.png', 1, 1),

('4', 'Jersey', 'Redsox', 'Baseball', 'Normal', 'Blanca', '150.00', 'Wilson', '04-Redsox-JerseyAdulto.png', 1, 1),

('5', 'Jersey', 'Lakers', 'Basketball', 'Normal', 'Negra', '25.00', 'Adidas', '05-Lakers-JerseyAdulto.png', 1, 1),

('6', 'Jersey', 'Bulls', 'Basketball', '7', 'Blanco', '300.00', 'Nike', '06-Bulls-JerseyAdulto.png', 1, 1),

('7', 'JerseyNino', 'America', 'Futbol', 'Normal', 'rojo', '50.00', 'Acme', '07-America-JerseyNino.png', 2, 1),

('8', 'JerseyNino', 'Chivas', 'Futbol', 'Chico', 'Amarillo', '1200.00', 'Nike', '08-Chivas-JerseyNino.png', 2, 1),

('9', 'Mameluco', 'Yankees', 'Baseball', 'Mediano', 'Rojo', '1200.00', 'Puma', '09-Yankees-Mameluco.png', 2, 1),

('10', 'Mameluco', 'Redsox', 'Baseball', 'XS', 'Azul', '400.00', 'Fila', '10-Redsox-Mameluco.png', 2, 1),

('11', 'Mameluco', 'Lakers', 'Basketball', 'S', 'Azul', '500.00', 'Umbro', '11-Lakers-Mameluco.png', 2, 1),

('12', 'Mameluco', 'Bulls', 'Basketball', 'Profesional', 'Verde', '300.00', 'Nike', '12-Bulls-Mameluco.png', 2, 1),

('13', 'Balon', 'America', 'Futbol', 'Junior', 'Rojo', '500.00', 'Pirma', '13-America-Balon.png', 3, 1),

('14', 'Balon', 'Chivas', 'Futbol', 'Grande', 'Morado', '1800.00', 'Nike', '14-Chivas-Balon.png', 3, 1),

('15', 'Balon', 'Yankees', 'Baseball', 'Chico', 'Negro', '1500.00', 'Nike', '15-Yankees-Balon.png', 3, 1),

('16', 'Balon', 'Redsox', 'Baseball', 'Amarillo', 'S', '900.00', 'Nike', '16-Redsox-Balon.png', 3, 1),

('17', 'Balon', 'Lakers', 'Basketball', 'Negro', 'M', '1000.00', 'Nike', '17-Lakers-Balon.png', 3, 1),

('18', 'Balon', 'Bulls', 'Baseball', 'Morado', 'Baller', '800.00', 'Spallding', '18-Bulls-Balon.png', 3, 1),

('19', 'Souvenir', 'America', 'Futbol', 'Negro', 'Champ', '200.00', 'Adidas', '19-America-Souvenir.png', 4, 1),

('20', 'Souvenir', 'Chivas', 'Futbol', 'Gris', 'ExtraGrand', '2000.00', 'MBL', '20-Chivas-Souvenir.png', 4, 1),

('21', 'Souvenir', 'Yankees', 'Baseball', 'Blanco', 'Chica', '1800.00', 'Nike', '21-Yankees-Souvenir.png', 4, 1),

('22', 'Souvenir', 'Redsox', 'Baseball', 'Gris', 'L', '1200.00', 'NewEra', '22-Redsox-Souvenir.png', 4, 1),

('23', 'Souvenir', 'Lakers', 'Basketball', 'Blanco', 'XL', '1500.00', 'Nike', '23-Lakers-Souvenir.png', 4, 1),

('24', 'Souvenir', 'Bulls', 'Basketball', 'Cafe', 'MBL', '400.00', 'Overlord', '24-Bulls-Souvenir.png', 4, 1);