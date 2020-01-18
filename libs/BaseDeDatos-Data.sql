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
          VALUES ('ETR-102','MiniLaptop','1');

INSERT INTO tiposequipos ("codtipoequipo","nomtipoequipo","estatustipoequipo")
          VALUES ('ETR-104','Laptop','1');

INSERT INTO tiposequipos ("codtipoequipo","nomtipoequipo","estatustipoequipo")
          VALUES ('ETR-106','Tablet','1');

INSERT INTO tiposequipos ("codtipoequipo","nomtipoequipo","estatustipoequipo")
          VALUES ('ETR-107','PC','1');

INSERT INTO equipos ("codequipo","nomequipo","estatusequipo", "codtipoequipo")
          VALUES ('XHE-839','LetraRoja','1', 'ETR-104');

INSERT INTO equipos ("codequipo","nomequipo","estatusequipo", "codtipoequipo")
VALUES ('EDF-423','Roja','1', 'ETR-104');
INSERT INTO equipos ("codequipo","nomequipo","estatusequipo", "codtipoequipo")
  VALUES ('DHJ-423','Azul','1', 'ETR-104');
INSERT INTO equipos ("codequipo","nomequipo","estatusequipo", "codtipoequipo")
  VALUES ('KDJ-423','Verde','1', 'ETR-104');
INSERT INTO equipos ("codequipo","nomequipo","estatusequipo", "codtipoequipo")
  VALUES ('JDB-435','Morada','1', 'ETR-104');


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
					VALUES ('CEH-001','0','0','200','100','120','1','TOR-110');

INSERT INTO partes ("codpartes","serializable","stockactual","stockmaximo","stockminimo","puntoreorden","estatus","idmodelo")
					VALUES ('JEH-001','1','0','200','100','120','1','RAM-001');

INSERT INTO partes ("codpartes","serializable","stockactual","stockmaximo","stockminimo","puntoreorden","estatus","idmodelo")
					VALUES ('SEE-001','1','0','200','100','120','1','MOU-500');

INSERT INTO partes ("codpartes","serializable","stockactual","stockmaximo","stockminimo","puntoreorden","estatus","idmodelo")
					VALUES ('SDE-001','1','0','200','100','120','1','HDD-001');

INSERT INTO partes ("codpartes","serializable","stockactual","stockmaximo","stockminimo","puntoreorden","estatus","idmodelo")
					VALUES ('ELD-001','1','0','200','100','120','1','PAN-001');

INSERT INTO partesequipos ("codequipo", "codpartes", "cantidadparteequipo", "estatusparteequipo", "codequipopartes")
          VALUES ('EDF-423', 'CEH-001', '25', '1', 'ENS-001');          
INSERT INTO partesequipos ("codequipo", "codpartes", "cantidadparteequipo", "estatusparteequipo", "codequipopartes")
          VALUES ('EDF-423', 'JEH-001', '2', '1', 'ENS-002');
INSERT INTO partesequipos ("codequipo", "codpartes", "cantidadparteequipo", "estatusparteequipo", "codequipopartes")
          VALUES ('EDF-423', 'SEE-001', '1', '1', 'ENS-003');
INSERT INTO partesequipos ("codequipo", "codpartes", "cantidadparteequipo", "estatusparteequipo", "codequipopartes")
          VALUES ('EDF-423', 'ELD-001', '1', '1', 'ENS-004');
          INSERT INTO partesequipos ("codequipo", "codpartes", "cantidadparteequipo", "estatusparteequipo", "codequipopartes")
          VALUES ('EDF-423', 'SDE-001', '1', '1', 'ENS-004');

INSERT INTO partesequipos ("codequipo", "codpartes", "cantidadparteequipo", "estatusparteequipo", "codequipopartes")
          VALUES ('DHJ-423', 'CEH-001', '25', '1', 'ENS-001');          
INSERT INTO partesequipos ("codequipo", "codpartes", "cantidadparteequipo", "estatusparteequipo", "codequipopartes")
          VALUES ('DHJ-423', 'JEH-001', '2', '1', 'ENS-002');
INSERT INTO partesequipos ("codequipo", "codpartes", "cantidadparteequipo", "estatusparteequipo", "codequipopartes")
          VALUES ('DHJ-423', 'SEE-001', '1', '1', 'ENS-003');
INSERT INTO partesequipos ("codequipo", "codpartes", "cantidadparteequipo", "estatusparteequipo", "codequipopartes")
          VALUES ('DHJ-423', 'ELD-001', '1', '1', 'ENS-004');
          INSERT INTO partesequipos ("codequipo", "codpartes", "cantidadparteequipo", "estatusparteequipo", "codequipopartes")
          VALUES ('DHJ-423', 'SDE-001', '1', '1', 'ENS-004');

INSERT INTO partesequipos ("codequipo", "codpartes", "cantidadparteequipo", "estatusparteequipo", "codequipopartes")
          VALUES ('KDJ-423', 'CEH-001', '25', '1', 'ENS-001');
INSERT INTO partesequipos ("codequipo", "codpartes", "cantidadparteequipo", "estatusparteequipo", "codequipopartes")
          VALUES ('KDJ-423', 'JEH-001', '2', '1', 'ENS-002');
INSERT INTO partesequipos ("codequipo", "codpartes", "cantidadparteequipo", "estatusparteequipo", "codequipopartes")
          VALUES ('KDJ-423', 'SEE-001', '1', '1', 'ENS-003');
INSERT INTO partesequipos ("codequipo", "codpartes", "cantidadparteequipo", "estatusparteequipo", "codequipopartes")
          VALUES ('KDJ-423', 'ELD-001', '1', '1', 'ENS-004');
          INSERT INTO partesequipos ("codequipo", "codpartes", "cantidadparteequipo", "estatusparteequipo", "codequipopartes")
          VALUES ('KDJ-423', 'SDE-001', '1', '1', 'ENS-004');


INSERT INTO partesequipos ("codequipo", "codpartes", "cantidadparteequipo", "estatusparteequipo", "codequipopartes")
          VALUES ('JDB-435', 'CEH-001', '25', '1', 'ENS-001');          
INSERT INTO partesequipos ("codequipo", "codpartes", "cantidadparteequipo", "estatusparteequipo", "codequipopartes")
          VALUES ('JDB-435', 'JEH-001', '2', '1', 'ENS-002');
INSERT INTO partesequipos ("codequipo", "codpartes", "cantidadparteequipo", "estatusparteequipo", "codequipopartes")
          VALUES ('JDB-435', 'SEE-001', '1', '1', 'ENS-003');
INSERT INTO partesequipos ("codequipo", "codpartes", "cantidadparteequipo", "estatusparteequipo", "codequipopartes")
          VALUES ('JDB-435', 'ELD-001', '1', '1', 'ENS-004');
          INSERT INTO partesequipos ("codequipo", "codpartes", "cantidadparteequipo", "estatusparteequipo", "codequipopartes")
          VALUES ('JDB-435', 'SDE-001', '1', '1', 'ENS-004');


INSERT INTO movimientos (num, tipo, fecha, hora, estatus)
        VALUES ('0001', '1', '2020-01-03', '14:02:00', '1');

INSERT INTO renglonesmovimientos ("codparte","nummovimiento","cantidadparte","estatus") 
        VALUES('CEH-001', '0001', '50', '1');
UPDATE partes SET stockactual = stockactual + 50 WHERE codpartes = 'CEH-001';

INSERT INTO renglonesmovimientos ("codparte","nummovimiento","cantidadparte","numserialfabricante","estatus") 
        VALUES('JEH-001', '0001', '1','RAM-9213', '1');
UPDATE partes SET stockactual = stockactual + 1 WHERE codpartes = 'JEH-001';

INSERT INTO renglonesmovimientos ("codparte","nummovimiento","cantidadparte","numserialfabricante","estatus") 
        VALUES('JEH-001', '0001', '1','RAM-9214', '1');
UPDATE partes SET stockactual = stockactual + 1 WHERE codpartes = 'JEH-001';

INSERT INTO renglonesmovimientos ("codparte","nummovimiento","cantidadparte","numserialfabricante","estatus") 
        VALUES('JEH-001', '0001', '1','RAM-9215', '1');
UPDATE partes SET stockactual = stockactual + 1 WHERE codpartes = 'JEH-001';

INSERT INTO renglonesmovimientos ("codparte","nummovimiento","cantidadparte","numserialfabricante","estatus") 
        VALUES('JEH-001', '0001', '1','RAM-9216', '1');
UPDATE partes SET stockactual = stockactual + 1 WHERE codpartes = 'JEH-001';

INSERT INTO renglonesmovimientos ("codparte","nummovimiento","cantidadparte","numserialfabricante","estatus") 
        VALUES('JEH-001', '0001', '1','RAM-9217', '1');
UPDATE partes SET stockactual = stockactual + 1 WHERE codpartes = 'JEH-001';

INSERT INTO renglonesmovimientos ("codparte","nummovimiento","cantidadparte","numserialfabricante","estatus") 
        VALUES('SDE-001', '0001', '1','HDD-9213', '1');
UPDATE partes SET stockactual = stockactual + 1 WHERE codpartes = 'SDE-001';

INSERT INTO renglonesmovimientos ("codparte","nummovimiento","cantidadparte","numserialfabricante","estatus") 
        VALUES('SDE-001', '0001', '1','HDD-9214', '1');
UPDATE partes SET stockactual = stockactual + 1 WHERE codpartes = 'SDE-001';

INSERT INTO renglonesmovimientos ("codparte","nummovimiento","cantidadparte","numserialfabricante","estatus") 
        VALUES('SDE-001', '0001', '1','HDD-9215', '1');
UPDATE partes SET stockactual = stockactual + 1 WHERE codpartes = 'SDE-001';

INSERT INTO renglonesmovimientos ("codparte","nummovimiento","cantidadparte","numserialfabricante","estatus") 
        VALUES('SDE-001', '0001', '1','HDD-9216', '1');
UPDATE partes SET stockactual = stockactual + 1 WHERE codpartes = 'SDE-001';

INSERT INTO renglonesmovimientos ("codparte","nummovimiento","cantidadparte","numserialfabricante","estatus") 
        VALUES('SDE-001', '0001', '1','HDD-9217', '1');
UPDATE partes SET stockactual = stockactual + 1 WHERE codpartes = 'SDE-001';

INSERT INTO renglonesmovimientos ("codparte","nummovimiento","cantidadparte","numserialfabricante","estatus") 
        VALUES('ELD-001', '0001', '1','PAN-9213', '1');
UPDATE partes SET stockactual = stockactual + 1 WHERE codpartes = 'ELD-001';
INSERT INTO renglonesmovimientos ("codparte","nummovimiento","cantidadparte","numserialfabricante","estatus") 
        VALUES('ELD-001', '0001', '1','PAN-9214', '1');
UPDATE partes SET stockactual = stockactual + 1 WHERE codpartes = 'ELD-001';

INSERT INTO renglonesmovimientos ("codparte","nummovimiento","cantidadparte","numserialfabricante","estatus") 
        VALUES('ELD-001', '0001', '1','PAN-9215', '1');
UPDATE partes SET stockactual = stockactual + 1 WHERE codpartes = 'ELD-001';

INSERT INTO renglonesmovimientos ("codparte","nummovimiento","cantidadparte","numserialfabricante","estatus") 
        VALUES('ELD-001', '0001', '1','PAN-9216', '1');
UPDATE partes SET stockactual = stockactual + 1 WHERE codpartes = 'ELD-001';

INSERT INTO renglonesmovimientos ("codparte","nummovimiento","cantidadparte","numserialfabricante","estatus") 
        VALUES('ELD-001', '0001', '1','PAN-9217', '1');
UPDATE partes SET stockactual = stockactual + 1 WHERE codpartes = 'ELD-001';



INSERT INTO renglonesmovimientos ("codparte","nummovimiento","cantidadparte","numserialfabricante","estatus") 
        VALUES('SEE-001', '0001', '1','MOU-9213', '1');
UPDATE partes SET stockactual = stockactual + 1 WHERE codpartes = 'SEE-001';

INSERT INTO renglonesmovimientos ("codparte","nummovimiento","cantidadparte","numserialfabricante","estatus") 
        VALUES('SEE-001', '0001', '1','MOU-9214', '1');
UPDATE partes SET stockactual = stockactual + 1 WHERE codpartes = 'SEE-001';

INSERT INTO renglonesmovimientos ("codparte","nummovimiento","cantidadparte","numserialfabricante","estatus") 
        VALUES('SEE-001', '0001', '1','MOU-9215', '1');
UPDATE partes SET stockactual = stockactual + 1 WHERE codpartes = 'SEE-001';

INSERT INTO renglonesmovimientos ("codparte","nummovimiento","cantidadparte","numserialfabricante","estatus") 
        VALUES('SEE-001', '0001', '1','MOU-9216', '1');
UPDATE partes SET stockactual = stockactual + 1 WHERE codpartes = 'SEE-001';

INSERT INTO renglonesmovimientos ("codparte","nummovimiento","cantidadparte","numserialfabricante","estatus") 
        VALUES('SEE-001', '0001', '1','MOU-9217', '1');
UPDATE partes SET stockactual = stockactual + 1 WHERE codpartes = 'SEE-001';

