<?php
session_start();
$consulta = mysqli_query($conexao, "SELECT SUM(Obito) AS 'niassa' FROM `niassa LIMIT 1");
$obitoNiassa = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Possesetivo) AS 'niassa' FROM `niassa LIMIT 1 ");
$PossesetivoNiassa = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Quarentena) AS 'niassa' FROM `niassa LIMIT 1 ");
$QuarentenaNiassa = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Negativo) AS 'niassa' FROM `niassa LIMIT 1");
$NegativoNiassa = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Recuperado) AS 'niassa' FROM `niassa LIMIT 1");
$RecuperadoNiassa = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT Atualizado AS 'niassa' FROM `niassa` ORDER by Atualizado DESC LIMIT 1");
$DataNiassa = mysqli_fetch_array($consulta);

// Cabo delegado
$consulta = mysqli_query($conexao, "SELECT SUM(Obito) AS 'cabodelgado' FROM `cabodelgado ");
$obitocabodelgado = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Possesetivo) AS 'cabodelgado' FROM `cabodelgado ");
$Possesetivcabodelgado = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Quarentena) AS 'cabodelgado' FROM `cabodelgado ");
$Quarentenacabodelgado = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Negativo) AS 'cabodelgado' FROM `cabodelgado ");
$Negativocabodelgado = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Recuperado) AS 'cabodelgado' FROM `cabodelgado ");
$Recuperadocabodelgado = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT Atualizado AS 'cabodelgado' FROM `cabodelgado` ORDER by Atualizado DESC LIMIT 1");
$Datacabodelgado = mysqli_fetch_array($consulta);

// Nampula
$consulta = mysqli_query($conexao, "SELECT SUM(Obito) AS 'nampula1' FROM `nampula ");
$Obitonampula = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Possesetivo) AS 'nampula1' FROM `nampula ");
$Possesetivonampula = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Quarentena) AS 'nampula1' FROM `nampula ");
$Quarentenanampula = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Negativo) AS 'nampula1' FROM `nampula ");
$Negativonampula = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Recuperado) AS 'nampula1' FROM `nampula ");
$Recuperadonampula = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT Atualizado AS 'nampula1' FROM `nampula` ORDER by Atualizado DESC LIMIT 1");
$Datanampula = mysqli_fetch_array($consulta);

// tete
$consulta = mysqli_query($conexao, "SELECT SUM(Obito) AS 'tete1' FROM `tete ");
$obitotete = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Possesetivo) AS 'tete1' FROM `tete ");
$Possesetivotete = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Quarentena) AS 'tete1' FROM `tete ");
$Quarentenatete = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Negativo) AS 'tete1' FROM `tete ");
$Negativotete = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Recuperado) AS 'tete1' FROM `tete ");
$Recuperadotete = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT Atualizado AS 'tete1' FROM `tete` ORDER by Atualizado DESC LIMIT 1");
$datatete = mysqli_fetch_array($consulta);

// Zambezia
$consulta = mysqli_query($conexao, "SELECT SUM(Obito) AS 'zambezia1' FROM `zambezia ");
$obitozambezia = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Possesetivo) AS 'zambezia1' FROM `zambezia ");
$Possesetivozambezia = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Quarentena) AS 'zambezia1' FROM `zambezia ");
$Quarentenazambezia = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Negativo) AS 'zambezia1' FROM `zambezia ");
$Negativozambezia = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Recuperado) AS 'zambezia1' FROM `zambezia ");
$Recuperadozambezia = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT Atualizado AS 'data' FROM `zambezia` ORDER by Atualizado DESC LIMIT 1");
$datazambezia = mysqli_fetch_array($consulta);

// Manica
$consulta = mysqli_query($conexao, "SELECT SUM(Obito) AS 'manica1' FROM `manica ");
$obitomanica = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Possesetivo) AS 'manica1' FROM `manica ");
$Possesetivomanica = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Quarentena) AS 'manica1' FROM `manica ");
$Quarentenamanica = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Negativo) AS 'manica1' FROM `manica ");
$Negativomanica = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Recuperado) AS 'manica1' FROM `manica ");
$Recuperadomanica = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT Atualizado AS 'manica1' FROM `manica` ORDER by Atualizado DESC LIMIT 1");
$datamanica = mysqli_fetch_array($consulta);

//   Sofala
$consulta = mysqli_query($conexao, "SELECT SUM(Obito) AS 'total' FROM `beira ");
$obitobeira = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Possesetivo) AS 'total' FROM `beira ");
$Possesetivobeira = mysqli_fetch_array($consulta);
$consulta = mysqli_query($conexao, "SELECT SUM(Quarentena) AS 'total' FROM `beira ");
$Quarentenabeira = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Negativo) AS 'total' FROM `beira ");
$Negativobeira = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Recuperado) AS 'total' FROM `beira ");
$Recuperadobeira = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT Atualizado AS 'dado' FROM `beira` ORDER by Atualizado DESC LIMIT 1");
$databeira = mysqli_fetch_array($consulta);

// Inhambane
$consulta = mysqli_query($conexao, "SELECT SUM(Obito) AS 'totalidade1' FROM `inhambane");
$obitoinhambane = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Possesetivo) AS 'totalidade1' FROM `inhambane");
$Possesetivoinhambane = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Quarentena) AS 'totalidade1' FROM `inhambane");
$Quarentenainhambane = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Negativo) AS 'totalidade1' FROM `inhambane");
$Negativoinhambane = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Recuperado) AS 'totalidade1' FROM `inhambane");
$Recuperadoinhambane = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT Atualizado AS 'totalidade1' FROM `inhambane` ORDER by Atualizado DESC LIMIT 1");
$datainhambane = mysqli_fetch_array($consulta);

// gaza
$consulta = mysqli_query($conexao, "SELECT SUM(Obito) AS 'gaza1' FROM `gaza ");
$obitogaza = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Possesetivo) AS 'gaza1' FROM `gaza ");
$Possesetivogaza = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Quarentena) AS 'gaza1' FROM `gaza ");
$Quarentenagaza = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Negativo) AS 'gaza1' FROM `gaza ");
$Negativogaza = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Recuperado) AS 'gaza1' FROM `gaza ");
$Recuperadogaza = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT Atualizado AS 'gaza1' FROM `gaza` ORDER by Atualizado DESC LIMIT 1");
$datagaza = mysqli_fetch_array($consulta);

// Povincia maputo
$consulta = mysqli_query($conexao, "SELECT SUM(Obito) AS 'provincia1' FROM `provinciamaputo ");
$obitoprovincia = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Possesetivo) AS 'provincia1' FROM `provinciamaputo ");
$Possesetivoprovincia = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Quarentena) AS 'provincia1' FROM `provinciamaputo ");
$Quarentenaprovincia = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Negativo) AS 'provincia1' FROM `provinciamaputo ");
$Negativoprovincia = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Recuperado) AS 'provincia1' FROM `provinciamaputo ");
$Recuperadoprovincia = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT Atualizado AS 'provincia1' FROM `provinciamaputo` ORDER by Atualizado DESC LIMIT 1");
$dataprovincia = mysqli_fetch_array($consulta);

// cidade de maputo
$consulta = mysqli_query($conexao, "SELECT SUM(Obito) AS 'ciademaputo1' FROM `cidademaputo ");
$obitocidade = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Possesetivo) AS 'ciademaputo1' FROM `cidademaputo ");
$Possesetivocidade = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Quarentena) AS 'ciademaputo1' FROM `cidademaputo ");
$Quarentenacidade = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Negativo) AS 'ciademaputo1' FROM `cidademaputo ");
$Negativocidade = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT SUM(Recuperado) AS 'ciademaputo1' FROM `cidademaputo ");
$Recuperadocidade = mysqli_fetch_array($consulta);

$consulta = mysqli_query($conexao, "SELECT Atualizado AS 'ciademaputo1' FROM `cidademaputo` ORDER by Atualizado DESC LIMIT 1");
$datacidade = mysqli_fetch_array($consulta);

// total de  Testado
$Totaltestado = $PossesetivoNiassa['niassa'] + $NegativoNiassa['niassa'] + $Possesetivcabodelgado['cabodelgado'] + $Negativocabodelgado['cabodelgado'] + $Possesetivonampula['nampula1'] + $Negativonampula['nampula1'] + $Possesetivotete['tete1'] + $Negativotete['tete1'] + $Possesetivozambezia['zambezia1'] + $Negativozambezia['zambezia1'] +
    $Possesetivomanica['manica1'] + $Negativomanica['manica1'] + $Possesetivobeira['total'] + $Negativobeira['total'] + $Possesetivogaza['gaza1'] + $Negativogaza['gaza1'] +
    $Possesetivoprovincia['provincia1'] + $Negativoprovincia['provincia1'] + $Possesetivoinhambane['totalidade1'] + $Negativoinhambane['totalidade1'] + $Possesetivocidade['ciademaputo1'] + $Negativocidade['ciademaputo1'];
// total de Obito
$Totalobito = $obitoNiassa['niassa'] + $obitocabodelgado['cabodelgado'] + $Obitonampula['nampula1'] + $obitotete['tete1'] + $obitozambezia['zambezia1'] + $obitomanica['manica1'] +
    $obitobeira['total'] + $obitogaza['gaza1'] + $obitoprovincia['provincia1'] + $obitoinhambane['totalidade1'] + $obitocidade['ciademaputo1'];
// total de Quarentena
$Totalquarentena = $QuarentenaNiassa['niassa'] + $Quarentenacabodelgado['cabodelgado'] + $Quarentenanampula['nampula1'] + $Quarentenatete['tete1'] + $Quarentenazambezia['zambezia1'] +
    $Quarentenamanica['manica1'] + $Quarentenabeira['total'] + $Quarentenagaza['gaza1'] + $Quarentenaprovincia['provincia1'] + $Quarentenainhambane['totalidade1'] + $Quarentenacidade['ciademaputo1'];
// Total de Negativo
$Totalnegativo = $NegativoNiassa['niassa'] + $Negativocabodelgado['cabodelgado'] + $Negativonampula['nampula1'] + $Negativotete['tete1'] + $Negativozambezia['zambezia1'] +
    $Negativomanica['manica1'] + $Negativobeira['total'] + $Negativogaza['gaza1'] + $Negativoprovincia['provincia1'] + $Negativoinhambane['totalidade1'] + $Negativocidade['ciademaputo1'];
// Total de Recuperado
$Totalrecuperado = $RecuperadoNiassa['niassa'] + $Recuperadocabodelgado['cabodelgado'] + $Recuperadonampula['nampula1'] + $Recuperadotete['tete1'] + $Recuperadozambezia['zambezia1'] +
    $Recuperadomanica['manica1'] + $Recuperadobeira['total'] + $Recuperadogaza['gaza1'] + $Recuperadoprovincia['provincia1'] + $Recuperadoinhambane['totalidade1'] + $Recuperadocidade['ciademaputo1'];
// Total de possetivo
$Totalpossetivo  = $PossesetivoNiassa['niassa'] + $Possesetivcabodelgado['cabodelgado'] + $Possesetivonampula['nampula1'] + $Possesetivotete['tete1'] + $Possesetivozambezia['zambezia1'] +
    $Possesetivomanica['manica1'] + $Possesetivobeira['total'] + $Possesetivogaza['gaza1'] + $Possesetivoprovincia['provincia1'] + $Possesetivoinhambane['totalidade1'] + $Possesetivocidade['ciademaputo1'];