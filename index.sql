CREATE INDEX item_idx
ON incidencia
USING HASH(item_id);


CREATE INDEX
ON anomalia(tem_anomalia_redacao, lingua, ts);

