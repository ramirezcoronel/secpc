INSERT INTO usuariosSistema (cedulaUsuario, nombreUsuario, apellidoUsuario, username,
              passUsuario, estatusUsuario, rolUsuario) VALUES
              ('28566432', 'Carlos', 'Ramirez', 'admin', 'admin', '1', 'admin');

INSERT INTO usuariosSistema (cedulaUsuario, nombreUsuario, apellidoUsuario, username,
              passUsuario, estatusUsuario, rolUsuario) VALUES
              ('27635645', 'Manuel', 'Rodriguez', 'manuel', 'manuel', '1', 'admin');

INSERT INTO usuariosSistema (cedulaUsuario, nombreUsuario, apellidoUsuario, username,
              passUsuario, estatusUsuario, rolUsuario) VALUES
              ('26536746', 'Cristian', 'Perez', 'cristian', 'cristian', '1', 'ensamblador');

INSERT INTO usuariosSistema (cedulaUsuario, nombreUsuario, apellidoUsuario, username,
              passUsuario, estatusUsuario, rolUsuario) VALUES
              ('25637645', 'Andres', 'Jimenez', 'andres', 'andres', '1', 'inventario');

INSERT INTO usuariosSistema (cedulaUsuario, nombreUsuario, apellidoUsuario, username,
              passUsuario, estatusUsuario, rolUsuario) VALUES
              ('28635645', 'Jose', 'Betancourt', 'jose', 'jose', '1', 'tester');

INSERT INTO usuariosSistema (cedulaUsuario, nombreUsuario, apellidoUsuario, username,
              passUsuario, estatusUsuario, rolUsuario) VALUES
              ('27837645', 'Juan', 'Lopez', 'juan', 'juan', '1', 'tester');

INSERT INTO usuariosSistema (cedulaUsuario, nombreUsuario, apellidoUsuario, username,
              passUsuario, estatusUsuario, rolUsuario) VALUES
              ('27835645', 'Miguel', 'Messi', 'miguel', 'miguel', '1', 'tester');


INSERT INTO tiposequipos ("codtipoequipo","nomtipoequipo","estatustipoequipo")
          VALUES ('ETR102','MiniLaptop','1');

INSERT INTO tiposequipos ("codtipoequipo","nomtipoequipo","estatustipoequipo")
          VALUES ('ETR104','Laptop','1');

INSERT INTO tiposequipos ("codtipoequipo","nomtipoequipo","estatustipoequipo")
          VALUES ('ETR106','Tablet','1');

INSERT INTO tiposequipos ("codtipoequipo","nomtipoequipo","estatustipoequipo")
          VALUES ('ETR107','PC','1');

INSERT INTO equipos ("codequipo","nomequipo","estatusequipo", "codtipoequipo")
          VALUES ('XHEKWU','LetraRoja','1', 'ETR104');

INSERT INTO equipos ("codequipo","nomequipo","estatusequipo", "codtipoequipo")
VALUES ('EDFWES','Roja','1', 'ETR104');
INSERT INTO equipos ("codequipo","nomequipo","estatusequipo", "codtipoequipo")
  VALUES ('DHJEE','Azul','1', 'ETR104');
INSERT INTO equipos ("codequipo","nomequipo","estatusequipo", "codtipoequipo")
  VALUES ('KDJEU','Verde','1', 'ETR104');
INSERT INTO equipos ("codequipo","nomequipo","estatusequipo", "codtipoequipo")
  VALUES ('JDBEWK','Morada','1', 'ETR104');


INSERT INTO marca ("id","nombre","estatus")
            VALUES ('MHP-001','HP','1');
INSERT INTO marca ("id","nombre","estatus")
            VALUES ('S1R-001','SIRAGON','1');
INSERT INTO marca ("id","nombre","estatus")
            VALUES ('APP-001','APPLE','1');
INSERT INTO marca ("id","nombre","estatus")
            VALUES ('S4M-001','SAMSUNG','1');
INSERT INTO marca ("id","nombre","estatus")
            VALUES ('INT-001','INTEL','1');

INSERT INTO modelos ("idmodelo","nommodelo","estatusmodelo", "idmarca")
  VALUES ('TOR-110','Tornillos','1', 'INT-001');

INSERT INTO modelos ("idmodelo","nommodelo","estatusmodelo", "idmarca")
  VALUES ('HDD-001','HARD DISK','1', 'S4M-001');

INSERT INTO modelos ("idmodelo","nommodelo","estatusmodelo", "idmarca")
  VALUES ('PAN-001','Pantalla','1', 'APP-001');

INSERT INTO modelos ("idmodelo","nommodelo","estatusmodelo", "idmarca")
  VALUES ('MOU-500','Mouse','1', 'INT-001');

INSERT INTO modelos ("idmodelo","nommodelo","estatusmodelo", "idmarca")
VALUES ('RAM-001','RAM','1', 'MHP-001');



INSERT INTO partes ("codpartes","serializable","stockactual","stockmaximo","stockminimo","puntoreorden","estatus","idmodelo")
					VALUES ('CEH-001','1','0','200','100','120','1','TOR-110');

INSERT INTO partes ("codpartes","serializable","stockactual","stockmaximo","stockminimo","puntoreorden","estatus","idmodelo")
					VALUES ('JEH-001','1','0','200','100','120','1','RAM-001');

INSERT INTO partes ("codpartes","serializable","stockactual","stockmaximo","stockminimo","puntoreorden","estatus","idmodelo")
					VALUES ('SEE-001','1','0','200','100','120','1','MOU-500');

INSERT INTO partes ("codpartes","serializable","stockactual","stockmaximo","stockminimo","puntoreorden","estatus","idmodelo")
					VALUES ('SDE-001','1','0','200','100','120','1','HDD-001');

INSERT INTO partes ("codpartes","serializable","stockactual","stockmaximo","stockminimo","puntoreorden","estatus","idmodelo")
					VALUES ('ELD-001','1','0','200','100','120','1','PAN-001');
