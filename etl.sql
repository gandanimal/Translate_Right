INSERT INTO d_utilizador (email, tipo)
SELECT email, 'qualificado'
FROM utilizador_qualificado
UNION
SELECT email, 'regular'
FROM utilizador_regular;

INSERT INTO d_tempo(dia, dia_da_semana, semana, mes, trimestre, ano)
SELECT DISTINCT 
DATE_PART('day', ts), 
DATE_PART('dow', ts), 
DATE_PART('week', ts), 
DATE_PART('month', ts), 
DATE_PART('quarter', ts), 
DATE_PART('year', ts)
FROM anomalia;

INSERT INTO d_local(latitude, longitude, nome)
SELECT latitude, longitude, nome
FROM local_publico;

INSERT INTO d_lingua(lingua)
SELECT DISTINCT lingua
FROM anomalia
UNION
SELECT DISTINCT lingua2
FROM anomalia_traducao;


INSERT INTO f_anomalia (id_utilizador, id_tempo, id_local, id_lingua, tipo_anomalia, com_proposta)
SELECT DISTINCT
   id_utilizador,
   id_tempo,
   id_local,
   id_lingua,
   CASE WHEN tem_anomalia_redacao = true THEN 'redacao' ELSE 'traducao' END,
   CASE WHEN c.anomalia_id= i.anomalia_id THEN true ELSE false END
FROM anomalia a
LEFT OUTER JOIN incidencia i
ON  a.id = i.anomalia_id
LEFT OUTER JOIN d_utilizador u
ON u.email = i.email
LEFT OUTER JOIN d_lingua dl
ON a.lingua = dl.lingua
LEFT OUTER JOIN item it
ON i.item_id = it.id
LEFT OUTER JOIN d_local dlo
ON it.latitude = dlo.latitude AND it.longitude = dlo.longitude
LEFT OUTER JOIN correcao c
ON i.anomalia_id = c.anomalia_id
LEFT OUTER JOIN d_tempo dt
ON a.ts::date = make_date(dt.ano, dt.mes, dt.dia);