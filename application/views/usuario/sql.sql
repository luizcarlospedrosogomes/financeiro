SELECT * FROM despesas d INNER JOIN receita r ON d.usuario = r.usuario

SELECT * 
FROM despesas d 
INNER JOIN receita r 
ON d.usuario = r.usuario 
--INNER JOIN categoria c
--ON c.usuario = r.usuario


SELECT *
FROM receita r
INNER JOIN categoria c
ON r.id = c.tipo
WHERE  c.tipo = 1

SELECT r.data, r.receita, r.data
FROM receita r
INNER JOIN categoria c
ON r.id = c.tipo
WHERE  c.tipo = 1
ORDER BY r.data

SELECT  r.receita, r.data, r.id, c.categoria FROM receita r INNER JOIN categoria c ON r.id = c.tipo WHERE  c.tipo = 1 AND r.usuario = ".$usuario." ORDER BY r.data
