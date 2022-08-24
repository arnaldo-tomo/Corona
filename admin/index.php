<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Moçmbique - Corona -> Login</title>
    <!-- base:css -->
    <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../vendors/base/vendor.bundle.base.css">
    <script src="../vendors/alerta/sweetalert2.all.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="main-panel">
                <div class="content-wrapper d-flex align-items-center auth px-0">
                    <div class="row w-100 mx-0">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                                <div class="brand-logo">
                                    <img src="../images/logo.png" alt="logo">
                                </div>
                                <h4>Hello! let's get started</h4>
                                <h6 class="font-weight-light">Sign in to continue.</h6>
                                <?php
                                session_start();
                                if (isset($_SESSION['erro'])) {
                                ?>
                                <div class="alert alert-danger" role="alert"><?php echo $_SESSION['erro']; ?></div>
                                <?php
                                    unset($_SESSION['erro']);
                                }
                                ?>
                                <form action="config/Controller.php" method="POST" class="pt-3">
                                    <div class="form-group">
                                        <input type="email" required name="email" class="form-control form-control-lg"
                                            id="exampleInputEmail1" placeholder="Exemplo(admin.arnaldo@co.mz)">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" required name="senha"
                                            class="form-control form-control-lg" id="exampleInputPassword1"
                                            placeholder="Password">
                                    </div>
                                    <div class="mt-6">
                                        <a> <button name="entrar"
                                                class="btn btn-block  btn-primary btn-lg font-weight-medium auth-form-btn">Entrar</button></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="../vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../js/template.js"></script>
    <!-- endinject -->
</body>

</html>