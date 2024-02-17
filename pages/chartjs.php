<?php include_once('../admin/config/conexao.php'); ?>
<?php include_once('../admin/config/total.php');   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tabela -Moçmbique- Corona</title>
    <!-- base:css -->
    <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="../vendors/tabelas/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../vendors/tabelas/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../vendors/tabelas/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
    <!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
        <nav class="bottom-navbar">
            <div class="container">
                <ul class="nav page-navigation">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">
                            <i class="mdi mdi-file-document-box menu-icon"></i>
                            <span class="menu-title">MOÇAMBIQUE - CORONA</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="tabales.php" class="nav-link">
                            <i class="mdi mdi-grid menu-icon"></i>
                            <span class="menu-title">Estatistica</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="chartjs.php" class="nav-link">
                            <i class="mdi mdi-finance menu-icon"></i>
                            <span class="menu-title">Grafico</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link">
                            <i class="mdi mdi-grid menu-icon"></i>
                            <span class="menu-title">Tabelas</span>
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
                                    <h6 class="font-weight-normal mb-2">Atualizado em: <span id="hora-atual"></span>
                                        (GMT+2) Horas em Moçambique
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

                    <div class="row">
                        <!-- partial -->
                        <div class="container-fluid page-body-wrapper">
                            <div class="main-panel">
                                <div class="content-wrapper">

                                    <div class="row">
                                        <div class="col-lg-6 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Line chart</h4>
                                                    <canvas id="lineChart"></canvas>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Graficos</h4>
                                                    <canvas id="barChart"></canvas>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Area chart</h4>
                                                    <canvas id="areaChart"></canvas>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Doughnut chart</h4>
                                                    <canvas id="doughnutChart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
<div class="container">
    <footer class="footer">
        <div class="footer-wrap">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                    2020 -
                    <?php $ano = date('Y');
                    echo $ano; ?> <a href="http://arnaldotomo.epizy.com/" target="_blank">http://arnaldotomo.epizy.com
                    </a> </span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Podes
                    reutiliar os
                    codigos desse projeto para quais quer fins </a> templates</span>
            </div>
        </div>
    </footer>
</div>
<!-- container-scroller -->
<!-- base:js -->
<script src="../vendors/base/vendor.bundle.base.js"></script>
<!-- endinject -->

<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="../js/template.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<!-- End plugin js for this page -->
<script src="../vendors/chart.js/Chart.min.js"></script>
<script src="../vendors/progressbar.js/progressbar.min.js"></script>
<script src="../vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
<script src="../vendors/justgage/raphael-2.1.4.min.js"></script>
<script src="../vendors/justgage/justgage.js"></script>
<script src="../js/jquery.cookie.js" type="text/javascript"></script>
<!-- Custom js for this page-->
<script src="../js/dashboard.js"></script>
<!-- End custom js for this page-->
<script src="../../vendors/base/vendor.bundle.base.js"></script>
<script src="../js/template.js"> </script>
<script src="..../vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->

<script>
function atualizarHora() {
    // Criar um objeto de data
    var data = new Date();

    // Obter componentes de hora, minutos e segundos
    var horas = data.getHours();
    var minutos = data.getMinutes();
    var segundos = data.getSeconds();

    // Formatando para exibição (adicionando zero à esquerda, se necessário)
    horas = (horas < 10) ? '0' + horas : horas;
    minutos = (minutos < 10) ? '0' + minutos : minutos;
    segundos = (segundos < 10) ? '0' + segundos : segundos;

    // Construir a string da hora
    var horaAtual = horas + ':' + minutos + ':' + segundos;

    // Atualizar o conteúdo do elemento HTML
    document.getElementById('hora-atual').innerHTML = horaAtual;
}

// Chamar a função inicialmente para exibir a hora imediatamente
atualizarHora();

// Chamar a função a cada segundo usando setInterval
setInterval(atualizarHora, 1000);
</script>
<?php
require_once("../admin/config/total.php");

$valor = array('')
?>
<script>
$(function() {
    /* ChartJS
     * 31616078
     * Data and config for chartjs
     */
    'use strict';
    var data = {
        labels: ["Quarentena", "Recuperdas", "Negativas", "Possetivas", "Testadas", "Obitos"],
        datasets: [{
            label: '# COVID-19',
            data: [<?= $Totalquarentena ?>, <?= $Totalrecuperado ?>, <?= $Totalnegativo ?>,
                <?= $Totalpossetivo ?>,
                <?= $Totaltestado ?>,
                <?= $Totalobito ?>
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1,
            fill: false
        }]
    };

    var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: false
        },
        elements: {
            point: {
                radius: 0
            }
        }

    };
    var doughnutPieData = {
        datasets: [{
            data: [<?= $Totalquarentena ?>, <?= $Totalrecuperado ?>, <?= $Totalnegativo ?>,
                <?= $Totalpossetivo ?>,
                <?= $Totaltestado ?>,
                <?= $Totalobito ?>
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 159, 64, 0.5)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
        }],

        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: ["Quarentena", "Recuperadas", "Possetivo", "Obitos", "Testados"],
    };
    var doughnutPieOptions = {
        responsive: true,
        animation: {
            animateScale: true,
            animateRotate: true
        }
    };
    var areaData = {
        labels: ["Quarentena", "Recuperadas", "Possetivo", "testadas", "Obitos"],
        datasets: [{
            label: '# COVID-19',
            data: [<?= $Totalquarentena ?>, <?= $Totalrecuperado ?>, <?= $Totalnegativo ?>,
                <?= $Totalpossetivo ?>,
                <?= $Totaltestado ?>,
                <?= $Totalobito ?>
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1,
            fill: true, // 3: no fill
        }]
    };

    var areaOptions = {
        plugins: {
            filler: {
                propagate: true
            }
        }
    }


    var multiAreaOptions = {
        plugins: {
            filler: {
                propagate: true
            }
        },
        elements: {
            point: {
                radius: 0
            }
        },
        scales: {
            xAxes: [{
                gridLines: {
                    display: false
                }
            }],
            yAxes: [{
                gridLines: {
                    display: false
                }
            }]
        }
    }



    var scatterChartOptions = {
        scales: {
            xAxes: [{
                type: 'linear',
                position: 'bottom'
            }]
        }
    }
    // Get context with jQuery - using jQuery's .get() method.
    if ($("#barChart").length) {
        var barChartCanvas = $("#barChart").get(0).getContext("2d");
        // This will get the first returned node in the jQuery collection.
        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: data,
            options: options
        });
    }

    if ($("#lineChart").length) {
        var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: data,
            options: options
        });
    }


    if ($("#doughnutChart").length) {
        var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");
        var doughnutChart = new Chart(doughnutChartCanvas, {
            type: 'doughnut',
            data: doughnutPieData,
            options: doughnutPieOptions
        });
    }

    if ($("#pieChart").length) {
        var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas, {
            type: 'pie',
            data: doughnutPieData,
            options: doughnutPieOptions
        });
    }

    if ($("#areaChart").length) {
        var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
        var areaChart = new Chart(areaChartCanvas, {
            type: 'line',
            data: areaData,
            options: areaOptions
        });
    }


});
</script>
<!-- DataTables  & Plugins -->
<script src="../vendors/tabelas/datatables/jquery.dataTables.min.js"></script>
<script src="../vendors/tabelas/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../vendors/tabelas/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../vendors/tabelas/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../vendors/tabelas/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/tabelas/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../vendors/tabelas/jszip/jszip.min.js"></script>
<script src="../vendors/tabelas/pdfmake/pdfmake.min.js"></script>
<script src="../vendors/tabelas/pdfmake/vfs_fonts.js"></script>
<script src="../vendors/tabelas/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/tabelas/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../vendors/tabelas/datatables-buttons/js/buttons.colVis.min.js"></script>
</body>

</html>