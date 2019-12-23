CREATE TABLE usuariosSistema (
  idUsuario serial,
  cedulaUsuario character varying(12),
  nombreUsuario character varying(25),
  apellidoUsuario character varying(25),
  username character varying(10),
  passUsuario character varying(10),
  estatusUsuario character varying(1),
  rolUsuario character varying(25),

  CONSTRAINT pk_idUsuario PRIMARY KEY (idUsuario),
  CONSTRAINT ci_unica UNIQUE (cedulaUsuario));

CREATE TABLE tiposEquipos (
  codTipoEquipo character varying(6),
  nomTipoEquipo character varying(25),
  estatusTipoEquipo character varying(1),
  

  CONSTRAINT pk_codTipoEquipo PRIMARY KEY (codTipoEquipo),
  CONSTRAINT nomTipo_unica UNIQUE (nomTipoEquipo));

CREATE TABLE equipos (
  codEquipo character varying(6),
  nomEquipo character varying(150),
  estatusEquipo character varying(1),
  codTipoEquipo character varying(6),

  CONSTRAINT pk_codEquipo PRIMARY KEY (codEquipo),
  CONSTRAINT nomEquipo_unica UNIQUE (nomEquipo),
  CONSTRAINT fk_codTipoEquipo FOREIGN KEY (codTipoEquipo) 
    REFERENCES public.tiposEquipos (codTipoEquipo) MATCH SIMPLE 
    ON UPDATE CASCADE
    ON DELETE CASCADE);

CREATE TABLE productos (
  codigo character varying(50),
  fecha date,
  codEquipo character varying(6),
  estatus character varying(1),

  CONSTRAINT pk_codigo PRIMARY KEY (codigo),
  CONSTRAINT fk_codEquipo FOREIGN KEY (codEquipo) 
    REFERENCES public.equipos (codEquipo) MATCH SIMPLE 
    ON UPDATE CASCADE
    ON DELETE CASCADE);

CREATE TABLE marca (
  id character varying(12),
  nombre character varying(25),
  estatus character varying(1),

  CONSTRAINT pk_idmarca PRIMARY KEY (id));


CREATE TABLE modelos (
  idmodelo character varying(12),
  nommodelo character varying(25),
  estatusmodelo character varying(1),
  idMarca character varying(12),

  CONSTRAINT pk_idmodelo PRIMARY KEY (idmodelo),
  CONSTRAINT fk_idmarca FOREIGN KEY (idMarca) 
    REFERENCES public.marca (id) MATCH SIMPLE 
    ON UPDATE CASCADE
    ON DELETE CASCADE);

CREATE TABLE partes (
  codpartes character varying(12),
  serializable character varying(1),
  stockactual integer,
  stockmaximo integer,
  stockminimo integer,
  puntoreorden integer,
  estatus character varying(1),
  idmodelo character varying(12),

  CONSTRAINT pk_codpartes PRIMARY KEY (codpartes),
  CONSTRAINT fk_idmodelo FOREIGN KEY (idmodelo) 
    REFERENCES public.modelos (idmodelo) MATCH SIMPLE 
    ON UPDATE CASCADE
    ON DELETE CASCADE);

CREATE TABLE partesEquipos (
  codEquipo character varying(6),
  codPartes character varying(12),
  cantidadParteEquipo integer,
  estatusParteEquipo character varying(1),
  codEquipoPartes character varying(6),

  CONSTRAINT fk_codEquipo FOREIGN KEY (codEquipo) 
    REFERENCES public.equipos (codEquipo) MATCH SIMPLE 
    ON UPDATE CASCADE
    ON DELETE CASCADE,
  CONSTRAINT fk_codPartes FOREIGN KEY (codPartes) 
    REFERENCES public.partes (codPartes) MATCH SIMPLE 
    ON UPDATE CASCADE
    ON DELETE CASCADE);

CREATE TABLE movimientos (
  num character varying(12),
  tipo character varying(1),
  fecha date,
  hora time,
  estatus character varying(1),

  CONSTRAINT fk_num PRIMARY KEY (num));

CREATE TABLE renglonesmovimientos (
  id serial,
  cantidadparte integer,
  numserialfabricante character varying(50),
  estatus character varying(1),
  codParte character varying(12),
  numMovimiento character varying(12),

  CONSTRAINT fk_codParte FOREIGN KEY (codParte) 
    REFERENCES public.partes (codPartes) MATCH SIMPLE 
    ON UPDATE CASCADE
    ON DELETE CASCADE,
  CONSTRAINT fk_numMovimiento FOREIGN KEY (numMovimiento) 
    REFERENCES public.movimientos (num) MATCH SIMPLE 
    ON UPDATE CASCADE
    ON DELETE CASCADE);

CREATE TABLE pruebas (
  codprueba character varying(12),
  nomprueba character varying(25),
  desprueba character varying(100),
  durprueba integer,
  estatusprueba character varying(1),
  

  CONSTRAINT pk_codprueba PRIMARY KEY (codprueba),
  CONSTRAINT nomprueba_unica UNIQUE (nomprueba));

CREATE TABLE pruebaProducto (
  numPruebaProducto character varying(12),
  fechaPruebaProducto date,
  horaPruebaProducto time,
  resultPruebaProducto character varying(1),
  obserbPruebaProducto character varying(250),
  estatusPruebaProducto character varying(1),
  codPruebaProducto character varying(12),
  codProductoPrueba character varying(50),

  CONSTRAINT pk_numPruebaProducto PRIMARY KEY (numPruebaProducto),
  CONSTRAINT fk_codPruebaProducto FOREIGN KEY (codPruebaProducto) 
    REFERENCES public.pruebas (codprueba) MATCH SIMPLE 
    ON UPDATE CASCADE
    ON DELETE CASCADE);