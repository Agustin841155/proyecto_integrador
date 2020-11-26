CREATE TABLE medicamentos(
    id_medicamento integer PRIMARY KEY AUTOINCREMENT,
    nombre varchar(100) NOT NULL,
    tipo varchar(100) NOT NULL,
    lote varchar(100) NOT NULL,
    precio varchar(100) NOT NULL
);
INSERT INTO medicamentos(nombre, tipo, lote, precio) values("Naproxeno", "analgesico", "16253524", "$70");
INSERT INTO medicamentos(nombre, tipo, lote, precio) values("ibuprofeno", "antiflamatorio", "83463637", "$30");

CREATE TABLE farmacias(
    id_farmacia integer PRIMARY KEY AUTOINCREMENT,
    nombre varchar(100) NOT NULL,
    domicilio varchar(100) NOT NULL,
    telefono varchar(100) NOT NULL,
    servicio varchar(100) NOT NULL
);
INSERT INTO farmacias(nombre, domicilio, telefono, servicio) values("Salud y vida", "Miguel hidalgo 104", "7757531133", "lunes a domingo");
INSERT INTO farmacias(nombre, domicilio, telefono, servicio) values("Econimik", "los pinos", "7757553497", "lunes a domingo");