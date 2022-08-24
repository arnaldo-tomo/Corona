<?php  include_once('../admin/config/conexao.php'); ?>
<?php  include_once('../admin/config/total.php');   ?>
<?php  include_once('../admin/config/404.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>INHAMBANE - Moçmbique - Corona </title>
    <!-- base:css -->
    <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../vendors/base/vendor.bundle.base.css">
    <script src="../vendors/alerta/sweetalert2.all.min.js"></script>
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
<?php
     if(isset($_SESSION['inhambane'])){
      ?>
    <script>
    Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: 'Dados da covid19 salvos',
        showConfirmButton: false,
        timer: 1500
    })
    </script>
    <?php
    unset($_SESSION['inhambane']);
    }else{
         ?>
    <script>
    let timerInterval
    Swal.fire({
        title: 'Carregando o Sistema...',
        html: 'Aguarde em quanto o <b>sistema</b>  carrega.',
        timer: 1000,
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading()
            const b = Swal.getHtmlContainer().querySelector('b')
            timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
            }, 100)
        },
        willClose: () => {
            clearInterval(timerInterval)
        }
    }).then((result) => {
        if (result.dismiss === Swal.DismissReason.timer) {
            console.log('I was closed by the timer')
        }
    })
    </script>
    <?php
      }
 ?>
    <!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
        <div class="container">
            <nav class="navbar top-navbar col-lg-12 col-12 p-0">

                <div class="container-fluid">

                    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">

                    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                            <a class="navbar-brand brand-logo" href="cabodelegado.php"><img src="../images/logo.png"
                                    alt="logo" /></a>
                            <a class="navbar-brand brand-logo-mini" href="cabodelegado.php"><img
                                    src="../images/logo-mini.png" alt="logo" /></a>
                        </div>
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item dropdown d-lg-flex d-none">
                                <a class="dropdown-toggle show-dropdown-arrow btn btn-inverse-primary btn-sm"
                                    id="nreportDropdown" href="#" data-bs-toggle="dropdown">
                                    Relatório
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                    aria-labelledby="nreportDropdown">
                                    <p class="mb-0 font-weight-medium float-left dropdown-header">Escolha Tipo de Relatório</p>
                                    <a class="dropdown-item">
                                        <i class="mdi mdi-file-pdf text-primary"></i> Pdf
                                    </a>
                                    <a class="dropdown-item">
                                        <i class="mdi mdi-file-excel text-primary"></i> Exel
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown d-lg-flex d-none">
                                <button type="button" class="btn btn-inverse-primary btn-sm">Configuração</button>
                            </li>
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    id="profileDropdown">
                                    <span class="nav-profile-name"><?=  $_SESSION['logado'] ?></span>
                                    <span class="online-status"></span>
                                    <img src="../images/faces/face28.png" alt="profile" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                    aria-labelledby="profileDropdown">
                                    <a class="dropdown-item">
                                        <i class="mdi mdi-settings text-primary"></i> Perfil
                                    </a>
                                    <a   href="../admin/config/Desligar.php" class="dropdown-item">
                                        <i class="mdi mdi-logout text-primary"></i> Terminar Sessão 
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                            data-toggle="horizontal-menu-toggle">
                            <span class="mdi mdi-menu"></span>
                        </button>
                    </div>
                </div>
            </nav>
            <nav class="bottom-navbar">
            <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="index.html">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">MOÇAMBIQUE - CORONA</span>
                </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-cube-outline menu-icon"></i>
                    <span class="menu-title">Estatistica</span>
                    <i class="menu-arrow"></i>
                  </a>
                  </li>
                      <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="mdi mdi-finance menu-icon"></i>
                    <span class="menu-title">Grafico</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="" class="nav-link">
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
    </div>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

        <div class="main-panel">
            <div class="container">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-6 mb-4 mb-xl-0">
                            <div class="d-lg-flex align-items-center">
                                <div>
                                    <h6 class="text-dark font-weight-bold mb-2">COVID19</h6>
                                        <h2 class="text-dark font-weight-bold mb-8">INHAMBANE - Painel Coronavírus</h2>
                                            <h6 class="font-weight-normal mb-2">Atualizado em : <?php echo $DataNiassa['niassa'];?> </h6>
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
                                        <i class="mdi mdi-message-outline btn-icon-append"></i>
                                    </button>
                                </div>
                                <div class="pe-1 mb-3 mb-xl-0">
                                    <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                                        Arquivo CSV
                                        <i class="mdi mdi-help-circle-outline btn-icon-append"></i>
                                    </button>
                                </div>
                                <div class="pe-1 mb-3 mb-xl-0">
                                    <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                                        Arquivo PDF
                                        <i class="mdi mdi-file-pdf btn-icon-append"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 flex-column d-flex stretch-card">
                        <div class="row">
                                <div class="col-lg-4 d-flex grid-margin stretch-card">
                                    <div class="card bg-info">
                                        <div class="card-body text-white">
                                            <h4 class="card-title mb-2">Recuperados</h4>
                                            <h2 class="font-weight-bold mb-3"><i class="mdi mdi-emoticon-happy "></i><?= $Totalrecuperado ?></h2>
                                            <hr>
                                            <h3 class="card-title mb-2">Negativos </h3>
                                            <h2 class="font-weight-bold mb-3"><i class="mdi mdi-account-minus  "></i> <?= $Totalnegativo?></h2>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex grid-margin stretch-card">
                                    <div class="card sale-diffrence-border">
                                        <div class="card-body">
                                            <h4 class="card-title mb-2">Posetivos</h4>
                                            <h2 class="text-dark mb-2 font-weight-bold mb-3"><i class="mdi mdi-account-plus "></i><?= $Totalpossetivo?></h2>
                                            <hr>
                                            <h5 class="card-title mb-2">Em Quarentena</h5>
                                            <h2 class="text-dark mb-2 font-weight-bold mb-3"><i class="mdi mdi-home"></i><?= $Totalquarentena ?></h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 d-flex grid-margin stretch-card">
                                    <div class="card sale-visit-statistics-border">
                                        <div class="card-body">
                                            <h4 class="card-title mb-2">Óbito</h4>
                                            <h2 class="text-dark mb-2 font-weight-bold mb-3"><i class="mdi mdi-emoticon-sad "></i><?= $Totalobito ?></h2>
                                             <hr>
                                            <h4 class="card-title mb-2">Testados</h4>
                                            <h2 class="text-dark mb-2 font-weight-bold mb-3"><i class="mdi mdi-test-tube "></i><?= $Totaltestado ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tablema -->
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">INHAMBANE - Painel Coronavírus</h4>
                                <p class="card-description">
                                    Preencha os campos com dados atuais
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <td>
                                                    
                                                <label class="badge badge-light">Registar * Editar</label>
                                                </td>
                                                <td><label class="badge badge-success">Recuperado</label></td>
                                                <td><label class="badge badge-info">Negativo</label></td>
                                                <td><label class="badge badge-primary">Possesetivo</label></td>
                                                <td><label class="badge badge-warning">Quarentena</label></td>
                                                <td><label class="badge badge-danger">Numero de Obito</label></td>
                                                <td><label class="badge badge-dark"> Utitima Data da Atualização</label></td>
                                            </tr>
                                          
                                          
                                        </thead>
                                        <form method="POST" action="../admin/config/Controller.php">
                                            <tbody>
                                                <td class="py-1">
                                                    <button type="submit" name="inhambane_atualizar"class="badge badge-primary"><i
                                                            class="mdi mdi-cloud-print-outline "></i>Registar</button>
                                                </td>
                                                <td>

                                                    <input type="number" name="Recuperado" class="form-control"
                                                        placeholder="Recuperado">

                                                </td>
                                                <td>
                                                    <input type="number" name="Negativo" class="form-control"
                                                        placeholder="Negativo">
                                                </td>
                                                <td>
                                                    <input type="number" name="Possetivo" class="form-control"
                                                        placeholder="Possetivo">
                                                </td>
                                                <td>
                                                    <input type="number" name="Quarentena" class="form-control"
                                                        placeholder="Quarentena">
                                                </td>
                                                <td>
                                                    <input type="number" name="Obito" class="form-control"
                                                        placeholder="Obito">
                                                </td>
                                                <td>
                                                    <h6 class="font-weight-normal mb-2">
                                                        <?php $mes= date('Y-m-d') ; $data= date('H-i-s'); echo $mes."".$data;?>
                                                    </h6>
                                                </td>
                                                <tr>

                                                </tr>
                                                <tr>
                                                    <td>Numero Total:</td>
                                                    <td><?php echo $Recuperadoinhambane['totalidade1']; ?></td>
                                                    <td><?php echo $Negativoinhambane['totalidade1']; ?></td>
                                                    <td><?php echo $Possesetivoinhambane['totalidade1'];?></td>
                                                    <td><?php echo $Quarentenainhambane['totalidade1'];?></td>
                                                    <td><?php echo $obitoinhambane['totalidade1']; ?></td>
                                                    <td><?php echo $datainhambane['totalidade1'];?></td>
                                                </tr>
                                            </tbody>
                                        </form>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tablema -->

                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <!-- <footer class="footer">
            <div class="footer-wrap">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 - <?php $ano = date('Y'); echo $ano;?> <a href="http://arnaldotomo.epizy.com/" target="_blank">http://arnaldotomo.epizy.com </a>  </span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Podes reutiliar os codigos desse projeto para quais quer fins </a> templates</span>
                </div>
            </div>
        </footer> -->
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
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
</body>

</html>