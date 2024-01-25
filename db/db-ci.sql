CREATE TABLE direcciones(
  id_direccion INT NOT NULL AUTO_INCREMENT,
  codigo_postal VARCHAR(5) NOT NULL,
  colonia VARCHAR(50) NOT NULL,
  municipio VARCHAR(50) NOT NULL,
  estado VARCHAR(30) NOT NULL,
  PRIMARY KEY(id_direccion)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

CREATE TABLE sexos(
  id_sexo INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(20) NOT NULL,
  PRIMARY KEY(id_sexo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO sexos (nombre) VALUES ('Masculino'),('Femenino');

CREATE TABLE tipos_perfil(
  id_tipo INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(50) NOT NULL,
  PRIMARY KEY(id_tipo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO tipos_perfil (nombre) VALUES ('Administrativo'),('Administrativo-Operativo'),('Operativo');

CREATE TABLE estatus_perfil(
  id_estatus INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(30) NOT NULL,
  PRIMARY KEY(id_estatus)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO estatus_perfil (nombre) VALUES ('Activo'),('Inactivo'),('Baja');

CREATE TABLE cuentas(
  id_cuenta INT NOT NULL AUTO_INCREMENT,
  usuario VARCHAR(50) NOT NULL,
  pass VARCHAR(8) NOT NULL,
  PRIMARY KEY(id_cuenta)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

CREATE TABLE perfiles(
  id_perfil INT NOT NULL AUTO_INCREMENT,
  cuenta INT NOT NULL,
  nombres VARCHAR(80) NOT NULL,
  apellidos VARCHAR(80) NOT NULL,
  sexo INT NOT NULL,
  correo VARCHAR(50) NOT NULL,
  telefono VARCHAR(10) NOT NULL,
  direccion INT NOT NULL,
  tipo_perfil INT NOT NULL,
  estatus INT NOT NULL DEFAULT 1,
  registro DATETIME DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY(id_perfil),
  FOREIGN KEY(cuenta) REFERENCES cuentas(id_cuenta),
  FOREIGN KEY(sexo) REFERENCES sexos(id_sexo),
  FOREIGN KEY(direccion) REFERENCES direcciones(id_direccion),
  FOREIGN KEY(tipo_perfil) REFERENCES tipos_perfil(id_tipo),
  FOREIGN KEY(estatus) REFERENCES estatus_perfil(id_estatus)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
