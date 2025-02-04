(SELECT tipo_anomalia,
       lingua,
       dia_da_semana,
       COUNT(*) AS num_anomalias
FROM f_anomalia
LEFT OUTER JOIN d_lingua dl
ON f_anomalia.id_lingua = dl.id_lingua
LEFT OUTER JOIN d_tempo
ON f_anomalia.id_tempo = d_tempo.id_tempo
GROUP BY tipo_anomalia, lingua, dia_da_semana
ORDER BY tipo_anomalia, lingua, dia_da_semana)
UNION ALL
(SELECT tipo_anomalia,
       lingua,
       NULL,
       COUNT(*) AS num_anomalias
FROM f_anomalia
LEFT OUTER JOIN d_lingua dl
ON f_anomalia.id_lingua = dl.id_lingua
LEFT OUTER JOIN d_tempo
ON f_anomalia.id_tempo = d_tempo.id_tempo
GROUP BY tipo_anomalia, lingua
ORDER BY tipo_anomalia, lingua)
UNION ALL
(SELECT tipo_anomalia,
       NULL,
       NULL,
       COUNT(*) AS num_anomalias
FROM f_anomalia
LEFT OUTER JOIN d_lingua dl
ON f_anomalia.id_lingua = dl.id_lingua
LEFT OUTER JOIN d_tempo
ON f_anomalia.id_tempo = d_tempo.id_tempo
GROUP BY tipo_anomalia
ORDER BY tipo_anomalia);