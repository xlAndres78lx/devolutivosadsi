CREATE TABLE equipoestado (
  equest_id INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  equest_nombre VARCHAR(20)  NOT NULL    ,
PRIMARY KEY(equest_id));



CREATE TABLE herramienta (
  her_id INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  her_referencia VARCHAR(50)  NOT NULL  ,
  her_cantidad INTEGER UNSIGNED  NOT NULL    ,
PRIMARY KEY(her_id));



CREATE TABLE usuarioestado (
  usuest_id INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  usuest_nombre VARCHAR(20)  NOT NULL    ,
PRIMARY KEY(usuest_id));



CREATE TABLE ambiente (
  amb_id INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  amb_nombre VARCHAR(5)  NOT NULL    ,
PRIMARY KEY(amb_id));



CREATE TABLE usuariorol (
  usurol_id INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  usurol_nombre VARCHAR(20)  NOT NULL    ,
PRIMARY KEY(usurol_id));



CREATE TABLE equipo (
  equ_id VARCHAR(10)  NOT NULL   AUTO_INCREMENT,
  equ_fechaentrada DATE  NOT NULL  ,
  equest_id INTEGER UNSIGNED  NOT NULL    ,
PRIMARY KEY(equ_id)  ,
INDEX FKequipo_equest_id(equest_id),
  FOREIGN KEY(equest_id)
    REFERENCES equipoestado(equest_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE usuario (
  usu_identificacion VARCHAR(15)  NOT NULL   AUTO_INCREMENT,
  usu_nombre VARCHAR(30)  NOT NULL  ,
  usu_apellido VARCHAR(30)  NOT NULL  ,
  usu_telefono VARCHAR(20)  NOT NULL  ,
  usu_correo VARCHAR(30)  NOT NULL  ,
  usu_clave VARCHAR(50)  NOT NULL  ,
  usurol_id INTEGER UNSIGNED  NOT NULL  ,
  usuest_id INTEGER UNSIGNED  NOT NULL    ,
PRIMARY KEY(usu_identificacion)  ,
INDEX FKusuario_usuest_id(usuest_id)  ,
INDEX FKusuario_usurol_id(usurol_id),
  FOREIGN KEY(usuest_id)
    REFERENCES usuarioestado(usuest_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(usurol_id)
    REFERENCES usuariorol(usurol_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE baja (
  baj_id INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  equ_id VARCHAR(10)  NOT NULL  ,
  baj_fecha DATE  NOT NULL  ,
  usu_id_responsable VARCHAR(15)  NOT NULL  ,
  baj_motivo VARCHAR(250)  NOT NULL    ,
PRIMARY KEY(baj_id)  ,
INDEX FKbaja_usu_id_responsable(usu_id_responsable)  ,
INDEX FKbaja_equ_id(equ_id),
  FOREIGN KEY(usu_id_responsable)
    REFERENCES usuario(usu_identificacion)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(equ_id)
    REFERENCES equipo(equ_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE prestamo (
  pre_id INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  usu_id_solicitante VARCHAR(15)  NOT NULL  ,
  pre_fecha_inicio DATE  NOT NULL  ,
  pre_hora_inicio TIME  NOT NULL  ,
  amb_id INTEGER UNSIGNED  NOT NULL    ,
PRIMARY KEY(pre_id)  ,
INDEX FKprestamo_usu_id_solicitante(usu_id_solicitante)  ,
INDEX FKprestamo_amb_id(amb_id),
  FOREIGN KEY(usu_id_solicitante)
    REFERENCES usuario(usu_identificacion)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(amb_id)
    REFERENCES ambiente(amb_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE prestamoequipo (
  preequ_id INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  pre_id INTEGER UNSIGNED  NOT NULL  ,
  equ_id VARCHAR(10)  NOT NULL  ,
  preequ_fecha_entrega DATE  NULL  ,
  preequ_hora_entrega TIME  NULL  ,
  preequ_observacion VARCHAR(250)  NULL    ,
PRIMARY KEY(preequ_id)  ,
INDEX FKprestamoequipo_equ_id(equ_id)  ,
INDEX prestamoequipo_FKIndex2(pre_id),
  FOREIGN KEY(equ_id)
    REFERENCES equipo(equ_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(pre_id)
    REFERENCES prestamo(pre_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE prestamoherramienta (
  preher_id INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  pre_id INTEGER UNSIGNED  NOT NULL  ,
  her_id INTEGER UNSIGNED  NOT NULL  ,
  preher_fecha_entrega DATE  NULL  ,
  preher_hora_entrega TIME  NULL  ,
  preher_observacion VARCHAR  NULL    ,
PRIMARY KEY(preher_id)  ,
INDEX FKprestamoherramienta_her_id(her_id)  ,
INDEX prestamoherramienta_FKIndex2(pre_id),
  FOREIGN KEY(her_id)
    REFERENCES herramienta(her_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(pre_id)
    REFERENCES prestamo(pre_id)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);




