INSERT INTO local_publico
VALUES (38.134567, -6.123456, 'local1'),
       (37.134567, -4.123456, 'local2'),
       (40.134567, -3.123456, 'local3');

INSERT INTO item
VALUES (1, 'descricao1', 'local1', 38.134567, -6.123456),
       (2, 'descricao2', 'local2', 38.134567, -6.123456),
       (3, 'descricao3', 'local3', 40.134567, -3.123456),
       (4, 'descricao4', 'local4', 37.134567, -4.123456),
       (5, 'descricao5', 'local5', 37.134567, -4.123456),
       (6, 'descricao6', 'local6', 40.134567, -3.123456);

INSERT INTO anomalia
VALUES (1, 'zona1', 'imagem1', 'ingles', '2020-01-21 17:10:25','erro1', true),
       (2, 'zona2', 'imagem2', 'portugues', '2020-03-20 15:06:47','erro2', true),
       (3, 'zona3', 'imagem3', 'italiano', '2019-03-20 06:02:25','erro3', false),
       (4, 'zona1', 'imagem4', 'ingles', '2020-03-25 23:11:12', 'erro4',false),
       (5, 'zona4', 'imagem5', 'alemao', '2020-03-25 11:10:13', 'erro5', false),
       (6, 'zona5', 'imagem6', 'frances', '2020-01-02 18:12:11', 'erro6', false);

INSERT INTO anomalia_traducao
VALUES (3, 'zona6', 'portugues'),
       (4, 'zona7', 'portugues'),
       (5, 'zona8', 'portugues'),
       (6, 'zona9', 'portugues');

INSERT INTO duplicado
VALUES (4,5);

INSERT INTO utilizador
VALUES ('email1@exemplo.com', 'password1'),
       ('email2@exemplo.com', 'password2'),
       ('email3@exemplo.com', 'password3'),
       ('email4@exemplo.com', 'password4'),
       ('email5@exemplo.com', 'password5');

INSERT INTO utilizador_qualificado
VALUES ('email1@exemplo.com'),
       ('email2@exemplo.com'),
       ('email5@exemplo.com');

INSERT INTO utilizador_regular
VALUES ('email3@exemplo.com'),
       ('email4@exemplo.com');

INSERT INTO incidencia
VALUES (1, 2, 'email3@exemplo.com'),
       (2, 1, 'email2@exemplo.com'),
       (3, 3, 'email4@exemplo.com'),
       (4, 5, 'email3@exemplo.com'),
       (5, 4, 'email1@exemplo.com'),
       (6, 4, 'email1@exemplo.com');

INSERT INTO proposta_de_correcao
VALUES ('email1@exemplo.com', 1, '2020-05-20 17:12:11', 'texto1'),
       ('email1@exemplo.com', 2, '2020-05-21 13:10:10', 'texto2'),
       ('email2@exemplo.com', 1, '2020-05-22 03:09:33', 'texto3'),
       ('email2@exemplo.com', 2, '2020-05-19 02:25:34', 'texto4'),
       ('email2@exemplo.com', 3, '2020-05-15 05:15:46', 'texto5');

INSERT INTO correcao
VALUES ('email1@exemplo.com', 1, 5),
       ('email1@exemplo.com', 2, 6),
       ('email2@exemplo.com', 1, 2),
       ('email2@exemplo.com', 2, 4),
       ('email2@exemplo.com', 3, 5);

