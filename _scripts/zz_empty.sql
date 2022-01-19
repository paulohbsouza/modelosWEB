ALTER
ALGORITHM = UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vi_calendario_agenda` AS
select `a`.`idagvisita`                    AS `id`,
       date_format(`a`.`data`, '%Y-%m-%d') AS `dataini`,
       `a`.`horainicio`                    AS `horaini`,
       date_format(`a`.`data`, '%Y-%m-%d') AS `datafim`,
       `a`.`horafim`                       AS `horafim`,
       `c`.`nome`                          AS `consultor`,
       `b`.`NomeCliFor`                    AS `descricao`,
       `c`.`nome`                          AS `titulo`,
       157                                 AS `categoria`,
       `d`.`fundocalendario`               AS `fundocalendario`,
       `c`.`localidade`                    AS `filial`,
       `c`.`idnucleo`                      AS `nucleo`,
       `c`.`equipe`                        AS `equipe`,
       `c`.`idusuario`                     AS `idconsultor`,
       `a`.`status`                        AS `status`,
       'V'                                 AS `visita`,
       `a`.`os`                            AS `os`,
       `a`.`obs`                           AS `obs`
from (((`agvisitas` `a` join `arqcf` `b` on ((`a`.`idcliente` = `b`.`CodCliFor`))) join `usuarios` `c` on ((`a`.`idusuario` = `c`.`idusuario`)))
         join `atividades` `d` on ((`a`.`idatividade` = `d`.`idatividade`)))
union all
select `a`.`idlancarausentes`                    AS `id`,
       date_format(`a`.`periodode`, '%Y-%m-%d')  AS `dataini`,
       date_format(`a`.`periodode`, '%H:%i')     AS `horaini`,
       date_format(`a`.`periodoate`, '%Y-%m-%d') AS `datafim`,
       date_format(`a`.`periodoate`, '%H:%i')    AS `horafim`,
       `b`.`nome`                                AS `consultor`,
       `c`.`descricaoatividade`                  AS `descricao`,
       `b`.`nome`                                AS `titulo`,
       `c`.`idatividade`                         AS `categoria`,
       `c`.`fundocalendario`                     AS `fundocalendario`,
       `b`.`localidade`                          AS `filial`,
       `b`.`idnucleo`                            AS `nucleo`,
       `b`.`equipe`                              AS `equipe`,
       `b`.`idusuario`                           AS `idconsultor`,
       `a`.`status`                              AS `status`,
       'A'                                       AS `tipo`,
       999999                                    AS `os2`,
       ''                                        AS `obs2`
from ((`lancarausentes` `a` join `usuarios` `b` on ((`a`.`idusuario` = `b`.`idusuario`)))
         join `atividades` `c` on ((`a`.`idmotivo` = `c`.`idatividade`)))
union all
select `a`.`idagrecurso`                          AS `id`,
       date_format(`a`.`datainicial`, '%Y-%m-%d') AS `dataini`,
       date_format(`a`.`datainicial`, '%H:%i:%s') AS `horaini`,
       date_format(`a`.`datafinal`, '%Y-%m-%d')   AS `datafim`,
       date_format(`a`.`datafinal`, '%H:%i:%s')   AS `horafim`,
       `b`.`nome`                                 AS `consultor`,
       `c`.`descricaoatividade`                   AS `descricao`,
       `b`.`nome`                                 AS `titulo`,
       `c`.`idatividade`                          AS `categoria`,
       `c`.`fundocalendario`                      AS `fundocalendario`,
       `b`.`localidade`                           AS `filial`,
       `b`.`idnucleo`                             AS `nucleo`,
       `b`.`equipe`                               AS `equipe`,
       `b`.`idusuario`                            AS `idconsultor`,
       `a`.`status`                               AS `status`,
       'R'                                        AS `tipo`,
       999999                                     AS `os2`,
       ''                                         AS `obs2`
from ((`agrecursos` `a` join `usuarios` `b` on ((`a`.`idusuario` = `b`.`idusuario`)))
         join `atividades` `c` on ((`a`.`idatividade` = `c`.`idatividade`)))
union all
select `a`.`idagrecurso`                          AS `id`,
       date_format(`a`.`datainicial`, '%Y-%m-%d') AS `dataini`,
       date_format(`a`.`datainicial`, '%H:%i:%s') AS `horaini`,
       date_format(`a`.`datafinal`, '%Y-%m-%d')   AS `datafim`,
       date_format(`a`.`datafinal`, '%H:%i:%s')   AS `horafim`,
       `b`.`nome`                                 AS `consultor`,
       `c`.`descricaoatividade`                   AS `descricao`,
       `b`.`nome`                                 AS `titulo`,
       `c`.`idatividade`                          AS `categoria`,
       `c`.`fundocalendario`                      AS `fundocalendario`,
       `b`.`localidade`                           AS `filial`,
       `b`.`idnucleo`                             AS `nucleo`,
       `b`.`equipe`                               AS `equipe`,
       `d`.`idusuario`                            AS `idconsultor`,
       `a`.`status`                               AS `status`,
       'R'                                        AS `tipo`,
       999999                                     AS `os2`,
       ''                                         AS `obs2`
from (((`agrecursos` `a` join `agrecurso_equipe` `d` on ((`a`.`idagrecurso` = `d`.`idagrecurso`))) join `usuarios` `b` on ((`d`.`idusuario` = `b`.`idusuario`)))
         join `atividades` `c` on ((`a`.`idatividade` = `c`.`idatividade`)))
union all
select `a`.`codigo`                              AS `id`,
       date_format(`a`.`data`, '%Y-%m-%d')       AS `dataini`,
       date_format(`a`.`horainicio`, '%H:%i:%s') AS `horaini`,
       date_format(`a`.`data`, '%Y-%m-%d')       AS `datafim`,
       date_format(`a`.`horafim`, '%H:%i:%s')    AS `horafim`,
       `b`.`nome`                                AS `consultor`,
       `a`.`descricao`                           AS `descricao`,
       `a`.`titulo`                              AS `titulo`,
       99                                        AS `categoria`,
       ''                                        AS `fundocalendario`,
       `b`.`localidade`                          AS `filial`,
       `b`.`idnucleo`                            AS `nucleo`,
       `b`.`equipe`                              AS `equipe`,
       `b`.`idusuario`                           AS `idconsultor`,
       `a`.`status`                              AS `status`,
       'F'                                       AS `tipo`,
       999999                                    AS `os2`,
       ''                                        AS `obs2`
from (`arqcf_followups` `a`
         join `usuarios` `b` on ((`a`.`usuario` = `b`.`idusuario`)))
order by `dataini` desc;