<?php
    session_start();

    if (!function_exists('obterResultado')) {
     function obterResultado($conexao, $consultaSQL, $nomeCampo) {
        $result = mysqli_query($conexao, $consultaSQL);

    if (!$result) {
        die("Erro na consulta: " . mysqli_error($conexao));
    }

    $dados = mysqli_fetch_assoc($result);

    return isset($dados[$nomeCampo]) ? $dados[$nomeCampo] : null;
    }
}
// Exemplo de uso para Niassa
$obitoNiassa = obterResultado($conexao, "SELECT SUM(Obito) AS total FROM niassa", 'total');
$PossesetivoNiassa = obterResultado($conexao, "SELECT SUM(Possesetivo) AS total FROM niassa", 'total');
$QuarentenaNiassa = obterResultado($conexao, "SELECT SUM(Quarentena) AS total FROM niassa", 'total');
$NegativoNiassa = obterResultado($conexao, "SELECT SUM(Negativo) AS total FROM niassa", 'total');
$RecuperadoNiassa = obterResultado($conexao, "SELECT SUM(Recuperado) AS total FROM niassa", 'total');
$DataNiassa = obterResultado($conexao, "SELECT Atualizado FROM niassa ORDER by Atualizado DESC LIMIT 1", 'Atualizado');


// Cabo delegado
$obitocabodelgado = obterResultado($conexao, "SELECT SUM(Obito) AS total  FROM cabodelgado",'total');
$Possesetivcabodelgado = obterResultado($conexao, "SELECT SUM(Possesetivo) AS total FROM cabodelgado",'total');
$Quarentenacabodelgado = obterResultado($conexao, "SELECT SUM(Quarentena) AS total FROM cabodelgado",'total');
$Negativocabodelgado = obterResultado($conexao, "SELECT SUM(Negativo) AS total FROM cabodelgado",'total');
$Recuperadocabodelgado = obterResultado($conexao, "SELECT SUM(Recuperado) AS total FROM cabodelgado",'total');
$Datacabodelgado = obterResultado($conexao, "SELECT Atualizado  FROM cabodelgado ORDER by Atualizado DESC LIMIT 1",'Atualizado');

// Nampula
$Obitonampula = obterResultado($conexao, "SELECT SUM(Obito) AS total FROM nampula",'total');
$Possesetivonampula = obterResultado($conexao, "SELECT SUM(Possesetivo) AS total FROM nampula",'total');
$Quarentenanampula = obterResultado($conexao, "SELECT SUM(Quarentena) AS total FROM nampula",'total');
$Negativonampula = obterResultado($conexao, "SELECT SUM(Negativo) AS total FROM nampula",'total');
$Recuperadonampula = obterResultado($conexao, "SELECT SUM(Recuperado) AS total FROM nampula",'total');
$Datanampula = obterResultado($conexao, "SELECT Atualizado FROM nampula ORDER by Atualizado DESC LIMIT 1",'Atualizado');

// tete
$obitotete = obterResultado($conexao, "SELECT SUM(Obito) AS total FROM tete",'total');
$Possesetivotete = obterResultado($conexao, "SELECT SUM(Possesetivo) AS total FROM tete",'total');
$Quarentenatete = obterResultado($conexao, "SELECT SUM(Quarentena) AS total FROM tete",'total');
$Negativotete = obterResultado($conexao, "SELECT SUM(Negativo) AS total FROM tete",'total');
$Recuperadotete = obterResultado($conexao, "SELECT SUM(Recuperado) AS total FROM tete",'total');
$datatete = obterResultado($conexao, "SELECT Atualizado FROM tete ORDER by Atualizado DESC LIMIT 1",'Atualizado');

// Zambezia
$obitozambezia = obterResultado($conexao, "SELECT SUM(Obito) AS total FROM zambezia",'total');
$Possesetivozambezia = obterResultado($conexao, "SELECT SUM(Possesetivo) AS total FROM zambezia",'total');
$Quarentenazambezia = obterResultado($conexao, "SELECT SUM(Quarentena) AS total FROM zambezia",'total');
$Negativozambezia = obterResultado($conexao, "SELECT SUM(Negativo) AS total FROM zambezia",'total');
$Recuperadozambezia = obterResultado($conexao, "SELECT SUM(Recuperado) AS total FROM zambezia",'total');
$datazambezia = obterResultado($conexao, "SELECT Atualizado AS 'data' FROM zambezia ORDER by Atualizado DESC LIMIT 1",'data');

// Manica
$obitomanica = obterResultado($conexao, "SELECT SUM(Obito) AS total FROM manica",'total');
$Possesetivomanica = obterResultado($conexao, "SELECT SUM(Possesetivo) AS total FROM manica",'total');
$Quarentenamanica = obterResultado($conexao, "SELECT SUM(Quarentena) AS total FROM manica",'total');
$Negativomanica = obterResultado($conexao, "SELECT SUM(Negativo) AS total FROM manica",'total');
$Recuperadomanica = obterResultado($conexao, "SELECT SUM(Recuperado) AS total FROM manica",'total');
$datamanica = obterResultado($conexao, "SELECT Atualizado AS total FROM manica ORDER by Atualizado DESC LIMIT 1",'total');

//   Sofala
$obitobeira = obterResultado($conexao, "SELECT SUM(Obito) AS total FROM beira",'total');
$Possesetivobeira = obterResultado($conexao, "SELECT SUM(Possesetivo) AS total FROM beira",'total');
$Quarentenabeira = obterResultado($conexao, "SELECT SUM(Quarentena) AS total FROM beira",'total');
$Negativobeira = obterResultado($conexao, "SELECT SUM(Negativo) AS total FROM beira",'total');
$Recuperadobeira = obterResultado($conexao, "SELECT SUM(Recuperado) AS total FROM beira",'total');
$databeira = obterResultado($conexao, "SELECT Atualizado AS dado FROM beira ORDER by Atualizado DESC LIMIT 1",'dado');

// Inhambane
$obitoinhambane = obterResultado($conexao, "SELECT SUM(Obito) AS i FROM inhambane",'i');
$Possesetivoinhambane = obterResultado($conexao, "SELECT SUM(Possesetivo) AS i FROM inhambane",'i');
$Quarentenainhambane = obterResultado($conexao, "SELECT SUM(Quarentena) AS i FROM inhambane",'i');
$Negativoinhambane = obterResultado($conexao, "SELECT SUM(Negativo) AS i FROM inhambane",'i');
$Recuperadoinhambane = obterResultado($conexao, "SELECT SUM(Recuperado) AS i FROM inhambane",'i');
$datainhambane = obterResultado($conexao, "SELECT Atualizado AS i FROM inhambane ORDER by Atualizado DESC LIMIT 1",'i');

// Gaza
$obitogaza = obterResultado($conexao, "SELECT SUM(Obito) AS gaza1 FROM gaza ",'gaza1');
$Possesetivogaza = obterResultado($conexao, "SELECT SUM(Possesetivo) AS gaza1 FROM gaza ",'gaza1');
$Quarentenagaza = obterResultado($conexao, "SELECT SUM(Quarentena) AS gaza1 FROM gaza ",'gaza1');
$Negativogaza = obterResultado($conexao, "SELECT SUM(Negativo) AS gaza1 FROM gaza ",'gaza1');
$Recuperadogaza = obterResultado($conexao, "SELECT SUM(Recuperado) AS gaza1 FROM gaza ",'gaza1');
$datagaza = obterResultado($conexao, "SELECT Atualizado AS gaza1 FROM gaza ORDER by Atualizado DESC LIMIT 1",'gaza1');

// Povincia maputo
$obitoprovincia = obterResultado($conexao, "SELECT SUM(Obito) AS provincia1 FROM provinciamaputo",'provincia1');
$Possesetivoprovincia = obterResultado($conexao, "SELECT SUM(Possesetivo) AS provincia1 FROM provinciamaputo",'provincia1');
$Quarentenaprovincia = obterResultado($conexao, "SELECT SUM(Quarentena) AS provincia1 FROM provinciamaputo",'provincia1');
$Negativoprovincia = obterResultado($conexao, "SELECT SUM(Negativo) AS provincia1 FROM provinciamaputo",'provincia1');
$Recuperadoprovincia = obterResultado($conexao, "SELECT SUM(Recuperado) AS provincia1 FROM provinciamaputo",'provincia1');
$dataprovincia = obterResultado($conexao, "SELECT Atualizado AS provincia1 FROM provinciamaputo ORDER by Atualizado DESC LIMIT 1",'provincia1');

// cidade de maputo
$obitocidade = obterResultado($conexao, "SELECT SUM(Obito) AS ciademaputo1 FROM cidademaputo",'ciademaputo1');
$Possesetivocidade = obterResultado($conexao, "SELECT SUM(Possesetivo) AS ciademaputo1 FROM cidademaputo",'ciademaputo1');
$Quarentenacidade = obterResultado($conexao, "SELECT SUM(Quarentena) AS ciademaputo1 FROM cidademaputo",'ciademaputo1');
$Negativocidade = obterResultado($conexao, "SELECT SUM(Negativo) AS ciademaputo1 FROM cidademaputo",'ciademaputo1');
$Recuperadocidade = obterResultado($conexao, "SELECT SUM(Recuperado) AS ciademaputo1 FROM cidademaputo",'ciademaputo1');
$datacidade = obterResultado($conexao, "SELECT Atualizado AS ciademaputo1 FROM cidademaputo ORDER by Atualizado DESC LIMIT 1",'ciademaputo1');
// total de  Testado
    $Totaltestado = $PossesetivoNiassa + $NegativoNiassa + $Possesetivcabodelgado + $Negativocabodelgado + $Possesetivonampula + $Negativonampula + $Possesetivotete + $Negativotete + $Possesetivozambezia + $Negativozambezia +
    $Possesetivomanica + $Negativomanica + $Possesetivomanica + $Possesetivobeira + $Negativobeira + $Possesetivogaza + $Negativogaza +
    $Possesetivoprovincia+ $Negativoprovincia+ $Possesetivoinhambane + $Negativoinhambane + $Possesetivocidade + $Negativocidade;
// total de Obito
    $Totalobito = $obitoNiassa + $obitocabodelgado + $Obitonampula + $obitotete + $obitozambezia + $obitomanica +$Possesetivomanica;
    $obitobeira + $obitogaza + $obitoprovincia+ $obitoinhambane + $obitocidade;
// total de Quarentena
    $Totalquarentena = $QuarentenaNiassa + $Quarentenacabodelgado + $Quarentenanampula + $Quarentenatete + $Quarentenazambezia +
    $Quarentenamanica +$Possesetivomanica + $Quarentenabeira + $Quarentenagaza + $Quarentenaprovincia+ $Quarentenainhambane + $Quarentenacidade;
// Total de Negativo
    $Totalnegativo = $NegativoNiassa + $Negativocabodelgado + $Negativonampula + $Negativotete + $Negativozambezia +
    $Negativomanica +$Possesetivomanica + $Negativobeira + $Negativogaza + $Negativoprovincia+ $Negativoinhambane + $Negativocidade;
// Total de Recuperado
    $Totalrecuperado = $RecuperadoNiassa + $Recuperadocabodelgado + $Recuperadonampula + $Recuperadotete + $Recuperadozambezia +
    $Recuperadomanica +$Possesetivomanica + $Recuperadobeira + $Recuperadogaza + $Recuperadoprovincia+ $Recuperadoinhambane + $Recuperadocidade;
// Total de possetivo
    $Totalpossetivo  = $PossesetivoNiassa + $Possesetivcabodelgado + $Possesetivonampula + $Possesetivotete + $Possesetivozambezia +
    $Possesetivomanica + $Possesetivobeira + $Possesetivogaza + $Possesetivoprovincia+ $Possesetivoinhambane + $Possesetivocidade;