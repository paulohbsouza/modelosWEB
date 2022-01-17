
/* ########################################
Gerar relatorio GESTÃO PROJETO - Sistemas contratados, em implantação, implantado, etc
######################################## */
SELECT
    a.codigo AS 'atividade',
    c.NomeCliFor AS 'Cliente',
    d.descricao AS 'situacao',
    e.DescricaoProSer AS 'produto',
    b.codigo AS 'projeto',
    b.descricaoprojeto FROM gr_projetoatividades AS a
         INNER JOIN gr_projetos AS b
         INNER JOIN arqcf AS c
         INNER JOIN gr_situacoesprojeto AS d
         INNER JOIN arqps AS e
                    ON a.codprojeto = b.codigo
                        AND c.CodCliFor = b.codcliente
                        AND a.codsituacao = d.codigo
                        AND a.codsistema = e.CodProSer
                        AND a.codsituacao IN (9)
                        AND a.codsistema IN (40)

ORDER BY d.descricao DESC ;

/* ########################################
LEFT JOIN + CONCAT
######################################## */
SELECT CONCAT(b.os, '/', b.controle, ' - ', b.agendadopor) AS 'Agenda', b.data,
       b.periodo,
       c.descricaoatividade AS 'Atividade', d.transporte,
       e.nome AS 'Consultor', e.telefone AS 'Telefone', CONCAT (f.codigo, ' - ', f.descricaoprojeto) AS 'Projeto'
FROM arqmov a
         LEFT JOIN agvisitas b ON b.os = a.Sequencia
         LEFT JOIN atividades c ON c.idatividade = b.idatividade
         LEFT JOIN transportes d ON d.idtransporte = b.idtransporte
         LEFT JOIN usuarios e ON e.idusuario = b.idusuario
         LEFT JOIN gr_projetos f ON f.codigo = b.projeto
WHERE a.NumOcorrencia = 205665;

/* ########################################
BUSCAR NA MESMA TABELA O MAXIMO VALOR
######################################## */
SELECT a.Sequencia, a.NumOcorrencia, a.DataRetorno, a.SeqTramite, b.num
FROM arqret a
INNER JOIN (
    SELECT mx.NumOcorrencia AS num, MAX(mx.Sequencia) AS max_seq
    FROM arqret mx
) b
ON b.max_seq = a.Sequencia

/* ########################################
INNER JOIN COM SELECT
######################################## */
SELECT *
FROM arqret r
         INNER JOIN (
    SELECT m.NumOcorrencia
    FROM arqmov m
    WHERE m.SituacaoOcorrencia IN ('ADB', 'ADL', 'AAD', 'ADM', 'ADD')
      AND m.CaracteristicaSituacao = 'P'
) v
WHERE r.NumOcorrencia = v.NumOcorrencia

/* ########################################
Um relatório de todos os clientes públicos que estão com Vigência do contrato SIM e
   com as Datas desses contratos.
######################################## */
SELECT
    a.inicio_vigencia,
    a.fim_vigencia,
    CONCAT(b.CodCliFor, ' - ', b.NomeCliFor) AS 'Nome',
        a.numerocontrato AS 'Num Contrato',
        a.contratovigente AS 'Vigencia'

FROM gr_contratosprojeto AS a
         INNER JOIN arqcf AS b
                    ON a.idcliente = b.CodCliFor
                        AND b.TipEmc = 2
                        AND a.contratovigente = 'S'

ORDER BY a.inicio_vigencia DESC ;

