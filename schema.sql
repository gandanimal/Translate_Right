CREATE TABLE local_publico(
	latitude NUMERIC(9,6) NOT NULL,
	longitude NUMERIC(9,6) NOT NULL,
	nome varchar(100),
	PRIMARY KEY(latitude, longitude)
);

CREATE TABLE item(
    id INTEGER NOT NULL UNIQUE,
    descricao varchar(100),
    localizacao varchar(100),
    latitude NUMERIC(9,6),
    longitude NUMERIC(9,6),
    PRIMARY KEY(id),
    FOREIGN KEY(latitude, longitude) REFERENCES local_publico(latitude, longitude) ON DELETE CASCADE
);

CREATE TABLE anomalia(
    id INTEGER NOT NULL UNIQUE,
    zona varchar(100),
    imagem varchar(100),
    lingua varchar(100),
    ts timestamp,
    descricao varchar(100),
    tem_anomalia_redacao boolean,
    PRIMARY KEY(id)
);

CREATE TABLE anomalia_traducao(
    id INTEGER NOT NULL UNIQUE,
    zona2 varchar(100),
    lingua2 varchar(100),
    PRIMARY KEY (id),
    FOREIGN KEY(id) REFERENCES anomalia(id)
);


CREATE TABLE duplicado(
    item1 INTEGER NOT NULL,
    item2 INTEGER NOT NULL,
    PRIMARY KEY(item1, item2),
    FOREIGN KEY(item1) REFERENCES item(id),
    FOREIGN KEY(item2) REFERENCES item(id),
    CONSTRAINT check_duplicado CHECK (item2>item1)
);

CREATE TABLE utilizador(
    email varchar(100) NOT NULL UNIQUE,
    password varchar(100),
    PRIMARY KEY(email)
);

CREATE TABLE utilizador_qualificado(
    email varchar(100) NOT NULL UNIQUE,
    PRIMARY KEY(email),
    FOREIGN KEY(email) REFERENCES utilizador(email) ON DELETE CASCADE
);

CREATE TABLE utilizador_regular(
    email varchar(100) NOT NULL UNIQUE,
    PRIMARY KEY(email),
    FOREIGN KEY(email) REFERENCES utilizador(email) ON DELETE CASCADE
);

CREATE TABLE incidencia(
    anomalia_id INTEGER NOT NULL UNIQUE,
    item_id INTEGER NOT NULL,
    email varchar(100) NOT NULL,
    PRIMARY KEY(anomalia_id),
    FOREIGN KEY(anomalia_id) REFERENCES anomalia(id) ON DELETE CASCADE,
    FOREIGN KEY(email) REFERENCES utilizador(email) ON DELETE CASCADE,
    FOREIGN KEY(item_id) REFERENCES item(id) ON DELETE CASCADE
);

CREATE TABLE proposta_de_correcao(
    email varchar(100) NOT NULL,
    nro INTEGER NOT NULL,
    data_hora timestamp,
    texto varchar(1000),
    FOREIGN KEY(email) REFERENCES utilizador_qualificado(email) ON DELETE CASCADE,
    PRIMARY KEY(email, nro)
);

CREATE TABLE correcao(
    email varchar(100) NOT NULL,
    nro INTEGER NOT NULL,
    anomalia_id INTEGER NOT NULL ,
    PRIMARY KEY(email, nro, anomalia_id),
    FOREIGN KEY(email, nro) REFERENCES proposta_de_correcao(email, nro) ON DELETE CASCADE,
    FOREIGN KEY(anomalia_id) REFERENCES incidencia(anomalia_id) ON DELETE CASCADE);
