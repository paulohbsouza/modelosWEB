/* ****************************** */
SELECT
    vi_grid_relvisita.idrelvisita as idrelvisita,
    vi_grid_relvisita.codcliente as codcliente,
    vi_grid_relvisita.dataatendimento as dataatendimento,
    vi_grid_relvisita.consultor as consultor,
    vi_grid_relvisita.visto as visto,
    vi_grid_relvisita.filial as filial,
    vi_grid_relvisita.fatura as fatura,
    vi_grid_relvisita.status as status,
    vi_grid_relvisita.nucleorelatorio as nucleorelatorio,
    vi_grid_relvisita.codtipofaturamento as codtipofaturamento,
    HoraParaDec(sistemaversao.horas) as horas,
    sistemaversao.idsistema as idsistema,
    sistemaversao.idtiporel as idtiporel,
    HoraParaDec(sistemaversao.horadiretriz) as horadiretriz,
    sistemaversao.motivohdiretriz as motivohdiretriz,
    vi_grid_relvisita.equipe as equipe,
    (HoraParaDec(sistemaversao.horas) - HoraParaDec(sistemaversao.horadiretriz)) as total,
    (HoraParaDec(sistemaversao.horasrat) -  HoraParaDec(sistemaversao.horadiretriz)) as faturado,
    CONCAT(vi_grid_relvisita.codocorrencia, '/', vi_grid_relvisita.controle) as rv,
    sistemaversao.atividades,
    tipemc
FROM
    vi_grid_relvisita
        INNER JOIN sistemaversao ON vi_grid_relvisita.idrelvisita = sistemaversao.relvisita
        INNER JOIN usuarios ON vi_grid_relvisita.consultor = usuarios.idusuario
WHERE
        #1 = 1

    vi_grid_relvisita.dataatendimento BETWEEN '2021-12-01' AND '2021-12-31'
AND usuarios.idusuario = 60
AND vi_grid_relvisita.codcliente = 93
/* ****************************** */
SELECT *
FROM vi_grid_relvisita v
WHERE v.idrelvisita IN (53408, 53630, 53640) ;
/* ****************************** */
SELECT *
FROM relvisita r
WHERE r.idrelvisita IN (53408, 53630, 53640) ;
/* ****************************** */
SELECT *
FROM sistemaversao s
WHERE s.relvisita IN (53408, 53630, 53640) ;
/* ****************************** */
