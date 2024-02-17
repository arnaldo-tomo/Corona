<?php include_once('admin/config/conexao.php'); ?>
<?php include_once('admin/config/total.php');  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Moçmbique- Corona</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilo.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body onload="relogio()">
    <script>
    // Utilizando uma função autoexecutável para evitar conflitos com outras bibliotecas
    (function($) {
        // Função para atualizar os dados
        function atualizarDados() {
            $.ajax({
                url: "/getnewdata",
                cache: false,
            }).done(function(html) {
                $('#data-container').html(html);
            });
        }

        // Iniciar a atualização automática após o carregamento da página
        $(document).ready(function() {
            // Utilizando setInterval em vez de setTimeout para atualizar a cada 5 segundos
            setInterval(atualizarDados, 5000);
        });

    })(jQuery); // Certifique-se de que o jQuery está corretamente carregado
    </script>

    <div class="horizontal-menu">
        <nav class="bottom-navbar">
            <div class="container">
                <ul class="nav page-navigation">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="mdi mdi-file-document-box menu-icon"></i>
                            <span class="menu-title">MOÇAMBIQUE - CORONA</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/tabales.php" class="nav-link">
                            <i class="mdi mdi-grid menu-icon"></i>
                            <span class="menu-title">Estatistica</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/chartjs.php" class="nav-link">
                            <i class="mdi mdi-finance menu-icon"></i>
                            <span class="menu-title">Grafico</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                    </li>
                    <li class="nav-item">
                    </li>
                    <li class="nav-item">
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="container">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-6 mb-4 mb-xl-0">
                            <div class="d-lg-flex align-items-center">
                                <div>
                                    <h6 class="text-dark font-weight-bold mb-2">COVID19</h6>
                                    <h2 class="text-dark font-weight-bold mb-8">Painel Coronavírus</h2>
                                    <h6 class="font-weight-bold mb-4">Atualizado em: <span id="text"></span> (GMT+2)
                                        Horas em Moçambique
                                    </h6>
                                </div>

                                <div class="ms-lg-5 d-lg-flex d-none">
                                    <button type="button" class="btn bg-white btn-icon">
                                        <i class="mdi mdi-view-grid text-success"></i>
                                    </button>
                                    <button type="button" class="btn bg-white btn-icon ms-2">
                                        <i class="mdi mdi-format-list-bulleted font-weight-bold text-primary"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-md-end">
                                <div class="pe-1 mb-3 mb-xl-0">
                                    <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                                        Excel
                                        <i class="mdi mdi-file-excel btn-icon-append"></i>
                                    </button>
                                </div>
                                <div class="pe-1 mb-3 mb-xl-0">
                                    <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                                        Arquivo CSV
                                        <i class="mdi mdi-help-circle-outline btn-icon-append"></i>
                                    </button>
                                </div>
                                <form method="POST" action="covid19pdf.php">
                                    <div class="pe-1 mb-3 mb-xl-0">
                                        <button type="submit" name="PDF"
                                            class="btn btn-outline-inverse-info btn-icon-text">
                                            Arquivo PDF
                                            <i class="mdi mdi-file-pdf btn-icon-append"></i>
                                        </button>
                                    </div>

                            </div>
                        </div>
                    </div>


                    <div class="row mt-0">
                        <div class="col-sm-8 flex-column d-flex stretch-card">
                            <div class="row">
                                <div class="col-lg-4 d-flex grid-margin stretch-card">
                                    <div class="card sale-visit-statistics-border">
                                        <div class="card-body text-black">
                                            <h4 class="card-title mb-2">Recuperados</h4>
                                            <h2 class="font-weight-bold mb-3"><i
                                                    class="mdi mdi-emoticon-happy "></i><?= number_format($Totalrecuperado) ?>

                                            </h2>

                                            <hr>
                                            <h3 class="card-title mb-2">Negativos </h3>
                                            <h2 class="font-weight-bold mb-3"><i class="mdi mdi-account-minus  "></i>
                                                <?= number_format($Totalnegativo) ?></h2>

                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4 d-flex grid-margin stretch-card">
                                    <div class="card sale-visit-statistics-border">
                                        <div class="card-body">
                                            <h4 class="card-title mb-2">Posetivos</h4>
                                            <h2 class="text-dark mb-2 font-weight-bold mb-3"><i
                                                    class="mdi mdi-account-plus "></i><?= number_format($Totalpossetivo) ?>
                                            </h2>
                                            <hr>
                                            <h5 class="card-title mb-2">Em Quarentena</h5>
                                            <h2 class="text-dark mb-2 font-weight-bold mb-3"><i
                                                    class="mdi mdi-home"></i><?= number_format($Totalquarentena) ?></h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 d-flex grid-margin stretch-card">
                                    <div class="card sale-visit-statistics-border">
                                        <div class="card-body">
                                            <h4 class="card-title mb-2">Obitos</h4>
                                            <h2 class="text-dark mb-2 font-weight-bold mb-3"><i
                                                    class="mdi mdi-emoticon-sad "></i><?= number_format($Totalobito) ?>
                                            </h2>
                                            <hr>
                                            <h4 class="card-title mb-2">Testados</h4>
                                            <h2 class="text-dark mb-2 font-weight-bold mb-3"><i
                                                    class="mdi mdi-test-tube "></i><?= number_format($Totaltestado) ?>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex grid-margin stretch-card">
                            <div class="card sale-visit-statistics-border">
                                <div class="card-body">
                                    <h2 class="text-dark mb-2 font-weight-bold">Painel Interativo</h2>
                                    <small class="text-muted">Navegue pelos dados do Sistema Único de Saúde - MISAU, com
                                        informações estratégicas e conheça tudo sobre a COVID-19 de forma transparente e
                                        analítica.</small>
                                    <br>
                                    <button type="button" class="btn btn-primary btn-sm reunded-0 mt-2">Acesse</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Síntese de casos,posetivos, negativos, recuperdodos & óbitos.
                                </h4>
                                <p class="card-description">
                                    Fonte:<code>Ministerio da saude (MISAU) </code>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <td><label class="badge badge-light">Provincias</label></td>
                                                <td><label class="badge badge-dark">Testados</label></td>
                                                <td><label class="badge badge-success">Recuperado</label></td>
                                                <td><label class="badge badge-info">Negativo</label></td>
                                                <td><label class="badge badge-primary">Possesetivo</label></td>
                                                <td><label class="badge badge-warning">Quarentena</label></td>
                                                <td><label class="badge badge-danger">Obito</label></td>
                                                <td><label class="badge badge-dark">Atualizado em</label></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Niassa</td>
                                                <td><?php echo number_format($PossesetivoNiassa + $NegativoNiassa); ?>
                                                </td>
                                                <td><?php echo $RecuperadoNiassa; ?></td>
                                                <td><?php echo $NegativoNiassa; ?></td>
                                                <td><?php echo $PossesetivoNiassa; ?></td>
                                                <td><?php echo $QuarentenaNiassa; ?></td>
                                                <td><?php echo $obitoNiassa; ?></td>
                                                <td><?php echo $DataNiassa; ?></td>
                                            </tr>

                                            <tr>
                                                <td>Cabo Delgado</td>
                                                <td><?php echo  number_format($Possesetivcabodelgado + $Negativocabodelgado); ?>
                                                </td>
                                                <td><?php echo $Recuperadocabodelgado; ?></td>
                                                <td><?php echo $Negativocabodelgado; ?></td>
                                                <td><?php echo $Possesetivcabodelgado; ?></td>
                                                <td><?php echo $Quarentenacabodelgado; ?></td>
                                                <td><?php echo $obitocabodelgado; ?></td>
                                                <td><?php echo $Datacabodelgado; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nampula</td>
                                                <td><?php echo $Possesetivonampula + $Negativonampula; ?>
                                                </td>
                                                <td><?php echo $Recuperadonampula; ?></td>
                                                <td><?php echo $Negativonampula; ?></td>
                                                <td><?php echo $Possesetivonampula; ?></td>
                                                <td><?php echo $Quarentenanampula; ?></td>
                                                <td><?php echo $Obitonampula; ?></td>
                                                <td><?php echo $Datanampula; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tete</td>
                                                <td><?php echo $Possesetivotete + $Negativotete; ?>
                                                </td>
                                                <td><?php echo $Recuperadotete; ?></td>
                                                <td><?php echo $Negativotete; ?></td>
                                                <td><?php echo $Possesetivotete; ?></td>
                                                <td><?php echo $Quarentenatete; ?></td>
                                                <td><?php echo $obitotete; ?></td>
                                                <td><?php echo $datatete; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Zambezia</td>
                                                <td><?php echo $Possesetivozambezia + $Negativozambezia; ?>
                                                </td>
                                                <td><?php echo $Recuperadozambezia; ?></td>
                                                <td><?php echo $Negativozambezia; ?></td>
                                                <td><?php echo $Possesetivozambezia; ?></td>
                                                <td><?php echo $Quarentenazambezia; ?></td>
                                                <td><?php echo $obitozambezia; ?></td>
                                                <td><?php echo $datazambezia; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Manica</td>
                                                <td><?php echo $Possesetivomanica + $Negativomanica; ?>
                                                </td>
                                                <td><?php echo $Recuperadomanica; ?></td>
                                                <td><?php echo $Negativomanica; ?></td>
                                                <td><?php echo $Possesetivomanica; ?></td>
                                                <td><?php echo $Quarentenamanica; ?></td>
                                                <td><?php echo $obitomanica; ?></td>
                                                <td><?php echo $datamanica; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Sofala</td>
                                                <td><?php echo $Possesetivobeira + $Negativobeira; ?>
                                                </td>
                                                <td><?php echo $Recuperadobeira; ?></td>
                                                <td><?php echo $Negativobeira; ?></td>
                                                <td><?php echo $Possesetivobeira; ?></td>
                                                <td><?php echo $Quarentenabeira; ?></td>
                                                <td><?php echo number_format($obitobeira); ?></td>
                                                <td><?php echo $databeira; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Inhambane</td>
                                                <td><?php echo $Possesetivoinhambane + $Negativoinhambane; ?>
                                                </td>
                                                <td><?php echo $Recuperadoinhambane; ?></td>
                                                <td><?php echo $Negativoinhambane; ?></td>
                                                <td><?php echo $Possesetivoinhambane; ?></td>
                                                <td><?php echo $Quarentenainhambane; ?></td>
                                                <td><?php echo $obitoinhambane; ?></td>
                                                <td><?php echo $datainhambane; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Gaza</td>
                                                <td><?php echo $Possesetivogaza + $Negativogaza; ?>
                                                </td>
                                                <td><?php echo $Recuperadogaza; ?></td>
                                                <td><?php echo $Negativogaza; ?></td>
                                                <td><?php echo $Possesetivogaza; ?></td>
                                                <td><?php echo $Quarentenagaza; ?></td>
                                                <td><?php echo $obitogaza; ?></td>
                                                <td><?php echo $datagaza; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Pronvincia de Maputo</td>
                                                <td><?php echo $Possesetivoprovincia + $Negativoprovincia; ?>
                                                </td>
                                                <td><?php echo $Recuperadoprovincia; ?></td>
                                                <td><?php echo $Negativoprovincia; ?></td>
                                                <td><?php echo $Possesetivoprovincia; ?></td>
                                                <td><?php echo $Quarentenaprovincia; ?></td>
                                                <td><?php echo $obitoprovincia; ?></td>
                                                <td><?php echo $dataprovincia; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Cidade de Maputo</td>
                                                <td><?php echo $Possesetivocidade + $Negativocidade; ?>
                                                </td>
                                                <td><?php echo $Recuperadocidade; ?></td>
                                                <td><?php echo $Negativocidade; ?></td>
                                                <td><?php echo $Possesetivocidade; ?></td>
                                                <td><?php echo $Quarentenacidade; ?></td>
                                                <td><?php echo $obitocidade; ?></td>
                                                <td><?php echo $datacidade; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-0">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h4 class="card-title">Idade entre</h4>
                                            <canvas id="salesDifference"></canvas>
                                            <p class="mt-3 mb-4 mb-lg-0">
                                            </p>
                                        </div>
                                        <div class="col-lg-5">
                                            <h4 class="card-title">Covid19</h4>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <ul class="graphl-legend-rectangle">
                                                        <li><span class="bg-danger"></span>Obitos</li>
                                                        <li><span class="bg-warning"></span>Quarentena</li>
                                                        <li><span class="bg-info"></span>Negativo</li>
                                                        <li><span class="bg-success"></span>Possetivo</li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-8 grid-margin">
                                                    <canvas id="bestSellers"></canvas>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-3">
                                            <?php $total = 31616078; ?>
                                            <h2 class="text-dark font-weight-bold mb-4">Populaçao nacional.
                                                <?= number_format($total) ?></h2>
                                            <h 6 class="card-body"></h>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="progress progress-lg grouped mb-2">
                                                        <div class="progress-bar  bg-danger" role="progressbar"
                                                            style="width: <?= $Totalobito ?>%" aria-valuenow="100"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: <?= $Totalquarentena ?>%" aria-valuenow="50"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: <?= $Totalnegativo ?>%" aria-valuenow="50"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: <?= $Totalpossetivo ?>%" aria-valuenow="50"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <ul class="graphl-legend-rectangle">

                                                        <li><span class="bg-danger"></span>Obitos
                                                            (
                                                            <?=

                                                            number_format($Totalobito * 100 / $total)

                                                            ?>
                                                            %)
                                                        </li>
                                                        <li><span class="bg-warning"></span>Quaretena
                                                            (<?= ($Totalquarentena * 100) / $total ?>%)
                                                        </li>
                                                        <li><span class="bg-info"></span>Negativo
                                                            (<?= ($Totalnegativo * 100) / $total ?>%)</li>
                                                        <li><span class="bg-success"></span>possetivof
                                                            (<?= ($Totalpossetivo * 100) / $total ?>%)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="mb-0 mt-2">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="container">
                    <footer class="footer">
                        <div class="footer-wrap">
                            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                                    2020 -
                                    <?php $ano = date('Y');
                                    echo $ano; ?> <a href="http://arnaldotomo.epizy.com/"
                                        target="_blank">http://arnaldotomo.epizy.com </a> </span>
                                <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Podes
                                    reutiliar os
                                    codigos desse projeto para quais quer fins </a> templates</span>-->
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- container-scroller -->
                <!-- base:js -->
                <script src="vendors/base/vendor.bundle.base.js">

                </script>

                <script src="js/template.js"></script>

                <script src="vendors/chart.js/Chart.min.js"></script>
                <script src="vendors/progressbar.js/progressbar.min.js"></script>
                <script src="vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
                <script src="vendors/justgage/raphael-2.1.4.min.js"></script>
                <script src="vendors/justgage/justgage.js"></script>
                <script src="js/jquery.cookie.js" type="text/javascript"></script>
                <!-- Custom js for this page-->
                <script src="js/dashboard.js"></script>
                <script src="js/time.js"></script>
                <!-- End custom js for this page-->


                <script src="datatables/jquery.dataTables.min.js"></script>
                <script src="datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
                <script src="datatables-responsive/js/dataTables.responsive.min.js"></script>
                <script src="datatables-responsive/js/responsive.bootstrap4.min.js"></script>
                <script src="datatables-buttons/js/dataTables.buttons.min.js"></script>
                <script src="datatables-buttons/js/buttons.bootstrap4.min.js"></script>
                <script src="jszip/jszip.min.js"></script>
                <script src="pdfmake/pdfmake.min.js"></script>
                <script src="pdfmake/vfs_fonts.js"></script>
                <script src="datatables-buttons/js/buttons.html5.min.js"></script>
                <script src="datatables-buttons/js/buttons.print.min.js"></script>
                <script src="datatables-buttons/js/buttons.colVis.min.js"></script>

                <!-- End custom js for this page-->

                <script>
                $(function() {
                    $("#example1").DataTable({
                        "responsive": true,
                        "lengthChange": false,
                        "autoWidth": false,
                        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                    $('#example2').DataTable({
                        "paging": true,
                        "lengthChange": false,
                        "searching": false,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false,
                        "responsive": true,
                    });
                });
                </script>
</body>

</html>