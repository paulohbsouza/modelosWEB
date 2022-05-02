<?php

### REQ 63524 - Campo clientes por ocorrêcia
# codigo gerado (Novo)
SELECT a.codigo, a.descricao, a.codprojeto, a.codsistema, a.codsituacao, b.codigo, b.codcliente, b.descricaoprojeto, b.codsituacao, c.NomeCliFor
FROM gr_projetoatividades a

INNER JOIN gr_projetos b
ON b.codigo = a.codprojeto
INNER JOIN arqcf c
ON c.CodCliFor = b.codcliente

WHERE a.codsituacao = 10
AND a.codsistema IN (
	SELECT a.CodProSer
	FROM arqpsoco a
	WHERE a.CodOcorrencia = '286'
)
AND b.codsituacao IN (10, 3)
AND c.CliForAtivo IN (1, 2)
GROUP BY b.codcliente ;

#codigo original
 SELECT
   B.CodCliFor, C.NomeCliFor
FROM
	arqpsoco A
  INNER JOIN arqpscf B ON A.CodProSer = B.CodProSer
INNER JOIN arqcf C ON B.CodCliFor = C.CodCliFor
where
A.CodOcorrencia = '{ArqOco}'
ORDER BY C.NomeCliFor Asc

### fim REQ