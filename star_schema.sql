CREATE TABLE d_utilizador(
    id_utilizador SMALLSERIAL,
    email varchar(100) NOT NULL,
    tipo varchar(20) NOT NULL,
    PRIMARY KEY(id_utilizador)

);


CREATE TABLE d_tempo(
    id_tempo SMALLSERIAL,
    dia INTEGER NOT NULL,
    dia_da_semana INTEGER NOT NULL,
    semana INTEGER NOT NULL,
    mes INTEGER NOT NULL,
    trimestre INTEGER NOT NULL,
    ano INTEGER NOT NULL,
    PRIMARY KEY(id_tempo)
);


CREATE TABLE d_local(
    id_local SMALLSERIAL,
    latitude NUMERIC(9,6) NOT NULL,
	longitude NUMERIC(9,6) NOT NULL,
	nome varchar(100) NOT NULL,
    PRIMARY KEY(id_local)
);


CREATE TABLE d_lingua(
    id_lingua SMALLSERIAL,
    lingua varchar(100) NOT NULL,
    PRIMARY KEY(id_lingua)
);



CREATE TABLE f_anomalia(
    id_utilizador INTEGER NOT NULL,
    id_tempo INTEGER NOT NULL,
    id_local INTEGER NOT NULL,
    id_lingua INTEGER NOT NULL,
    tipo_anomalia varchar(20) NOT NULL,
    com_proposta boolean NOT NULL,
    FOREIGN KEY(id_utilizador) REFERENCES d_utilizador,
    FOREIGN KEY(id_tempo) REFERENCES d_tempo,
    FOREIGN KEY(id_local) REFERENCES d_local,
    FOREIGN KEY(id_lingua) REFERENCES d_lingua,
    PRIMARY KEY(id_utilizador, id_tempo, id_local, id_lingua)
);



