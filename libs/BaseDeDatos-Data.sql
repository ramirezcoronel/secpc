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
            VALUES ('HP','HP','1');
INSERT INTO marca ("id","nombre","estatus")
            VALUES ('S1R4','SIRAGON','1');
INSERT INTO marca ("id","nombre","estatus")
            VALUES ('APP','APPLE','1');
INSERT INTO marca ("id","nombre","estatus")
            VALUES ('S4M','SAMSUNG','1');
INSERT INTO marca ("id","nombre","estatus")
            VALUES ('INT','INTEL','1');

INSERT INTO modelos ("idmodelo","nommodelo","estatusmodelo", "idmarca")
  VALUES ('T0RNI','Tornillos','1', 'INT');

INSERT INTO modelos ("idmodelo","nommodelo","estatusmodelo", "idmarca")
  VALUES ('HDD','HARD DISK','1', 'S4M');

INSERT INTO modelos ("idmodelo","nommodelo","estatusmodelo", "idmarca")
  VALUES ('P4NT','Pantalla','1', 'APP');

INSERT INTO modelos ("idmodelo","nommodelo","estatusmodelo", "idmarca")
  VALUES ('M0US','Mouse','1', 'INT');

INSERT INTO modelos ("idmodelo","nommodelo","estatusmodelo", "idmarca")
VALUES ('R4M','RAM','1', 'HP');



INSERT INTO partes ("codpartes","serializable","stockactual","stockmaximo","stockminimo","puntoreorden","estatus","idmodelo")
					VALUES ('CEHR','1','0','200','100','120','1','T0RNI');

INSERT INTO partes ("codpartes","serializable","stockactual","stockmaximo","stockminimo","puntoreorden","estatus","idmodelo")
					VALUES ('JEHR','1','0','200','100','120','1','R4M');

INSERT INTO partes ("codpartes","serializable","stockactual","stockmaximo","stockminimo","puntoreorden","estatus","idmodelo")
					VALUES ('SEE','1','0','200','100','120','1','M0US');

INSERT INTO partes ("codpartes","serializable","stockactual","stockmaximo","stockminimo","puntoreorden","estatus","idmodelo")
					VALUES ('SDE','1','0','200','100','120','1','HDD');

INSERT INTO partes ("codpartes","serializable","stockactual","stockmaximo","stockminimo","puntoreorden","estatus","idmodelo")
					VALUES ('ELD','1','0','200','100','120','1','P4NT');
