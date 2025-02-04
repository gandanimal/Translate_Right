SELECT l.nome, l.latitude, l.longitude
FROM local_publico l
    INNER JOIN item i
    ON l.latitude = i.latitude AND l.longitude = i.longitude
    INNER JOIN incidencia ic
    ON i.id = ic.item_id
    INNER JOIN anomalia a
    ON ic.anomalia_id = a.id
GROUP BY l.nome, l.latitude, l.longitude
HAVING COUNT(*) <= ALL(
    SELECT COUNT(*)
    FROM local_publico
    GROUP BY nome
    );

SELECT l.nome, l.latitude, l.longitude
FROM local_publico l
    INNER JOIN item i
    ON l.latitude = i.latitude AND l.longitude = i.longitude
    INNER JOIN incidencia ic
    ON i.id = ic.item_id
    INNER JOIN anomalia a
    ON ic.anomalia_id = a.id
    INNER JOIN anomalia_traducao at
    ON a.id = at.id
WHERE DATE_PART('quarter', a.ts) = 1
GROUP BY l.nome, l.latitude, l.longitude
HAVING COUNT(*) > ALL(
    SELECT COUNT(*)
    FROM local_publico
    GROUP BY nome
    );


SELECT DISTINCT u.email, u.password
FROM utilizador u
    INNER JOIN proposta_de_correcao p
    ON u.email = p.email
    INNER JOIN correcao c
    ON p.email = c.email AND p.nro = c.nro
    INNER JOIN incidencia i
    ON c.anomalia_id = i.anomalia_id
    INNER JOIN anomalia a
    ON i.anomalia_id = a.id
    INNER JOIN item it
    ON i.item_id = it.id
WHERE DATE_PART('year', ts) = 2020 AND it.latitude < 39.336775;


SELECT DISTINCT u.email
FROM utilizador u
    INNER JOIN correcao1 c
    ON u.email = c.email
    INNER JOIN proposta_de_correcao p
    ON c.email = p.email AND c.nro = p.nro
WHERE NOT EXISTS (
    SELECT *
    FROM incidencia i
    WHERE c.anomalia_id = i.anomalia_id
    )
AND DATE_PART('year', data_hora) = 2020;
