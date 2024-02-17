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
                    <li class="nav-item active">
                        <a href="tabales.php" class="nav-link" active>
                            <i class="mdi mdi-grid menu-icon"></i>
                            <span class="menu-title">Estatistica</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="chartjs.php" class="nav-link">
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
                                    <h6 class="font-weight-normal mb-2">Atualizado em:<span id="hora-atual"></span>
                                        (GMT+2) Horas em Moçambique</h6>
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
                        <div class="col-sm-12 grid-margin d-flex stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="card-title mb-2">Selecine a provincia para tewr acesso aos dadaos da
                                            Covid19</h4>
                                        <div class="dropdown">
                                            <a href="#" class="text-success btn btn-link  px-1"><i
                                                    class="mdi mdi-refresh"></i></a>
                                            <a href="#"
                                                class="text-success btn btn-link px-1 dropdown-toggle dropdown-arrow-none"
                                                data-bs-toggle="dropdown" id="settingsDropdownsales">
                                                <i class="mdi mdi-dots-horizontal"></i></a>
                                        </div>
                                    </div>
                                    <div>
                                        <ul class="nav nav-tabs tab-no-active-fill" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active ps-2 pe-2" id="niassa" data-bs-toggle="tab"
                                                    href="#revenue-for-last-month" role="tab"
                                                    aria-controls="revenue-for-last-month" aria-selected="true">
                                                    Niassa</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link ps-2 pe-2" id="cabodelgado" data-bs-toggle="tab"
                                                    href="#server-loading" role="tab" aria-controls="server-loading"
                                                    aria-selected="false">
                                                    Cabo delgado</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link ps-2 pe-2" id="nampula" data-bs-toggle="tab"
                                                    href="#data-managed" role="tab" aria-controls="data-managed"
                                                    aria-selected="false">
                                                    Nampula</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link ps-2 pe-2" id="tete" data-bs-toggle="tab"
                                                    href="#sales-by-traffic" role="tab" aria-controls="sales-by-traffic"
                                                    aria-selected="false">
                                                    Tete</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link ps-2 pe-2" id="IDzambezia" data-bs-toggle="tab"
                                                    href="#zambezia" role="tab" aria-controls="zambezia"
                                                    aria-selected="false">
                                                    Zambezia</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link ps-2 pe-2" id="IDmanica" data-bs-toggle="tab"
                                                    href="#manica" role="tab" aria-controls="manica"
                                                    aria-selected="false">
                                                    Manica</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link ps-2 pe-2" id="IDsofala" data-bs-toggle="tab"
                                                    href="#sofala" role="tab" aria-controls="sofala"
                                                    aria-selected="false">
                                                    Sofala</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link ps-2 pe-2" id="IDinhambane" data-bs-toggle="tab"
                                                    href="#inhambane" role="tab" aria-controls="inhambane"
                                                    aria-selected="false">
                                                    Inhambane</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link ps-2 pe-2" id="IDgaza" data-bs-toggle="tab"
                                                    href="#gaza" role="tab" aria-controls="gaza" aria-selected="false">
                                                    Gaza</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link ps-2 pe-2" id="IDmatola" data-bs-toggle="tab"
                                                    href="#matola" role="tab" aria-controls="matola"
                                                    aria-selected="false">
                                                    Matola</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link ps-2 pe-2" id="IDmaputo" data-bs-toggle="tab"
                                                    href="#maputo" role="tab" aria-controls="maputo"
                                                    aria-selected="false">
                                                    Maputo</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content tab-no-active-fill-tab-content">
                                            <div class="tab-pane fade show active" id="revenue-for-last-month"
                                                role="tabpanel" aria-labelledby="Niassa">

                                                <table id="example1" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <?php
                                                            $tabela = mysqli_query($conexao, "SELECT * FROM `niassa` ORDER BY codigo  ");
                                                            while ($array = mysqli_fetch_array($tabela)) {
                                                            ?>
                                                            <td><?= $array['3'] + $array['4'] ?></td>
                                                            <td><?= $array['1'] ?></td>
                                                            <td><?= $array['2'] ?></td>
                                                            <td><?= $array['3'] ?></td>
                                                            <td><?= $array['4'] ?></td>
                                                            <td><?= $array['5'] ?></td>
                                                            <td><?= $array['6'] ?></td>

                                                        </tr>
                                                        <?php
                                                            }
                                                    ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="server-loading" role="tabpanel"
                                                aria-labelledby="cabodelgado">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <?php
                                                            $tabela = mysqli_query($conexao, "SELECT * FROM `tete` ");
                                                            while ($array = mysqli_fetch_array($tabela)) {
                                                            ?>
                                                            <td><?= $array['3'] + $array['4'] ?></td>
                                                            <td><?= $array['1'] ?></td>
                                                            <td><?= $array['2'] ?></td>
                                                            <td><?= $array['3'] ?></td>
                                                            <td><?= $array['4'] ?></td>
                                                            <td><?= $array['5'] ?></td>
                                                            <td><?= $array['6'] ?></td>

                                                        </tr>
                                                        <?php
                                                            }
                                                    ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>

                                            </div>
                                            <div class="tab-pane fade" id="data-managed" role="tabpanel"
                                                aria-labelledby="nampula">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <?php
                                                            $tabela = mysqli_query($conexao, "SELECT * FROM `nampula` ");
                                                            while ($array = mysqli_fetch_array($tabela)) {
                                                            ?>
                                                            <td><?= $array['3'] + $array['4'] ?></td>
                                                            <td><?= $array['1'] ?></td>
                                                            <td><?= $array['2'] ?></td>
                                                            <td><?= $array['3'] ?></td>
                                                            <td><?= $array['4'] ?></td>
                                                            <td><?= $array['5'] ?></td>
                                                            <td><?= $array['6'] ?></td>

                                                        </tr>
                                                        <?php
                                                            }
                                                    ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="sales-by-traffic" role="tabpanel"
                                                aria-labelledby="tete">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <?php
                                                            $tabela = mysqli_query($conexao, "SELECT * FROM `tete` ");
                                                            while ($array = mysqli_fetch_array($tabela)) {
                                                            ?>
                                                            <td><?= $array['3'] + $array['4'] ?></td>
                                                            <td><?= $array['1'] ?></td>
                                                            <td><?= $array['2'] ?></td>
                                                            <td><?= $array['3'] ?></td>
                                                            <td><?= $array['4'] ?></td>
                                                            <td><?= $array['5'] ?></td>
                                                            <td><?= $array['6'] ?></td>

                                                        </tr>
                                                        <?php
                                                            }
                                                    ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="zambezia" role="tabpanel"
                                                aria-labelledby="IDzambezia">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <?php
                                                            $tabela = mysqli_query($conexao, "SELECT * FROM `zambezia` ");
                                                            while ($array = mysqli_fetch_array($tabela)) {
                                                            ?>
                                                            <td><?= $array['3'] + $array['4'] ?></td>
                                                            <td><?= $array['1'] ?></td>
                                                            <td><?= $array['2'] ?></td>
                                                            <td><?= $array['3'] ?></td>
                                                            <td><?= $array['4'] ?></td>
                                                            <td><?= $array['5'] ?></td>
                                                            <td><?= $array['6'] ?></td>

                                                        </tr>
                                                        <?php
                                                            }
                                                    ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="manica" role="tabpanel"
                                                aria-labelledby="IDmanica">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <?php
                                                            $tabela = mysqli_query($conexao, "SELECT * FROM `manica` ");
                                                            while ($array = mysqli_fetch_array($tabela)) {
                                                            ?>
                                                            <td><?= $array['3'] + $array['4'] ?></td>
                                                            <td><?= $array['1'] ?></td>
                                                            <td><?= $array['2'] ?></td>
                                                            <td><?= $array['3'] ?></td>
                                                            <td><?= $array['4'] ?></td>
                                                            <td><?= $array['5'] ?></td>
                                                            <td><?= $array['6'] ?></td>

                                                        </tr>
                                                        <?php
                                                            }
                                                    ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="sofala" role="tabpanel"
                                                aria-labelledby="IDsofala">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <?php
                                                            $tabela = mysqli_query($conexao, "SELECT * FROM `beira` ");
                                                            while ($array = mysqli_fetch_array($tabela)) {
                                                            ?>
                                                            <td><?= $array['3'] + $array['4'] ?></td>
                                                            <td><?= $array['1'] ?></td>
                                                            <td><?= $array['2'] ?></td>
                                                            <td><?= $array['3'] ?></td>
                                                            <td><?= $array['4'] ?></td>
                                                            <td><?= $array['5'] ?></td>
                                                            <td><?= $array['6'] ?></td>

                                                        </tr>
                                                        <?php
                                                            }
                                                    ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="inhambane" role="tabpanel"
                                                aria-labelledby="IDinhambane">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <?php
                                                            $tabela = mysqli_query($conexao, "SELECT * FROM `inhambane` ");
                                                            while ($array = mysqli_fetch_array($tabela)) {
                                                            ?>
                                                            <td><?= $array['3'] + $array['4'] ?></td>
                                                            <td><?= $array['1'] ?></td>
                                                            <td><?= $array['2'] ?></td>
                                                            <td><?= $array['3'] ?></td>
                                                            <td><?= $array['4'] ?></td>
                                                            <td><?= $array['5'] ?></td>
                                                            <td><?= $array['6'] ?></td>

                                                        </tr>
                                                        <?php
                                                            }
                                                    ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="gaza" role="tabpanel"
                                                aria-labelledby="IDgaza">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <?php
                                                            $tabela = mysqli_query($conexao, "SELECT * FROM `gaza` ");
                                                            while ($array = mysqli_fetch_array($tabela)) {
                                                            ?>
                                                            <td><?= $array['3'] + $array['4'] ?></td>
                                                            <td><?= $array['1'] ?></td>
                                                            <td><?= $array['2'] ?></td>
                                                            <td><?= $array['3'] ?></td>
                                                            <td><?= $array['4'] ?></td>
                                                            <td><?= $array['5'] ?></td>
                                                            <td><?= $array['6'] ?></td>

                                                        </tr>
                                                        <?php
                                                            }
                                                    ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="matola" role="tabpanel"
                                                aria-labelledby="IDmatola">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <?php
                                                            $tabela = mysqli_query($conexao, "SELECT * FROM `provinciamaputo` ");
                                                            while ($array = mysqli_fetch_array($tabela)) {
                                                            ?>
                                                            <td><?= $array['3'] + $array['4'] ?></td>
                                                            <td><?= $array['1'] ?></td>
                                                            <td><?= $array['2'] ?></td>
                                                            <td><?= $array['3'] ?></td>
                                                            <td><?= $array['4'] ?></td>
                                                            <td><?= $array['5'] ?></td>
                                                            <td><?= $array['6'] ?></td>

                                                        </tr>
                                                        <?php
                                                            }
                                                    ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="maputo" role="tabpanel"
                                                aria-labelledby="IDmaputo">
                                                <table id="example" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <?php
                                                            $tabela = mysqli_query($conexao, "SELECT * FROM `cidademaputo` ");
                                                            while ($array = mysqli_fetch_array($tabela)) {
                                                            ?>
                                                            <td><?= $array['3'] + $array['4'] ?></td>
                                                            <td><?= $array['1'] ?></td>
                                                            <td><?= $array['2'] ?></td>
                                                            <td><?= $array['3'] ?></td>
                                                            <td><?= $array['4'] ?></td>
                                                            <td><?= $array['5'] ?></td>
                                                            <td><?= $array['6'] ?></td>

                                                        </tr>
                                                        <?php
                                                            }
                                                    ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Testados</th>
                                                            <th>Recuperado</th>
                                                            <th>Negativo</th>
                                                            <th>Possetivo</th>
                                                            <th>Quarentena</th>
                                                            <th>Obitos</th>
                                                            <th>Atualizado em:</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
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
        </div>
    </div>
</body>
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

<script src="../vendors/base/vendor.bundle.base.js"></script>

<script src="../js/template.js"></script>

<script src="../vendors/chart.js/Chart.min.js"></script>
<script src="../vendors/progressbar.js/progressbar.min.js"></script>
<script src="../vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
<script src="../vendors/justgage/raphael-2.1.4.min.js"></script>
<script src="../vendors/justgage/justgage.js"></script>
<script src="../js/jquery.cookie.js" type="text/javascript"></script>
<script src="../js/dashboard.js"></script>
<script src="js/time.js"></script>


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