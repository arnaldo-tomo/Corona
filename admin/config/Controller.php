 <?php
    session_start();
    include_once('conexao.php');
    if (isset($_POST['entrar'])) {

        $email = $_POST['email'];
        $Senha = $_POST['senha'];



        $verificar = mysqli_query($conexao, "SELECT * FROM usuarios  WHERE email='$email'  && senha='$Senha' LIMIT 1");

        $RESULTADO = mysqli_fetch_array($verificar);

        if (mysqli_num_rows($verificar) != 0) {

            if ($RESULTADO[2] == 1) {
                header("location: ../../pages/niassa.php");
                $_SESSION['logado'] = "niassa@covid.com";
            } elseif ($RESULTADO[2] == 2) {
                header("location: ../../pages/cabodelegado.php");
                $_SESSION['logado'] = "cabodelgado@covid.com";
            } elseif ($RESULTADO[2] == 3) {
                header("location: ../../pages/nampula.php");
                $_SESSION['logado'] = "nampula@covid.com";
            } elseif ($RESULTADO[2] == 4) {
                header("location: ../../pages/tete.php");
                $_SESSION['logado'] = "tete@covid.com";
            } elseif ($RESULTADO[2] == 5) {
                header("location: ../../pages/zambezia.php");
                $_SESSION['logado'] = "zambezia@covid.com";
            } elseif ($RESULTADO[2] == 6) {
                header("location: ../../pages/manica.php");
                $_SESSION['logado'] = "manica@covid.com";
            } elseif ($RESULTADO[2] == 7) {
                header("location: ../../pages/sofala.php");
                $_SESSION['logado'] = "sofala@covid.com";
            } elseif ($RESULTADO[2] == 8) {
                header("location: ../../pages/inhambane.php");
                $_SESSION['logado'] = "inhambane@covid.com";
            } elseif ($RESULTADO[2] == 9) {
                header("location: ../../pages/gaza.php");
                $_SESSION['logado'] = "gaza@covid.com";
            } elseif ($RESULTADO[2] == 10) {
                header("location: ../../pages/provinciamaputo.php");
                $_SESSION['logado'] = "proviciamaputp@covid.com";
            } else {
                header("location: ../../pages/cidademaputo.php");
                $_SESSION['logado'] = "cidademaputo@covid.com";
            }
        } else {
            header("location: ../index.php");
            $_SESSION['erro'] = "Email ou Senha Estao Inconrreta";
        }
    }
    // fim autenticacao


    // SOFALA
    if (isset($_POST['sofala_atualizar'])) {
        $Recuperado = $_POST['Recuperado'];
        $Negativo = $_POST['Negativo'];
        $Possetivo = $_POST['Possetivo'];
        $Quarentena = $_POST['Quarentena'];
        $Obito = $_POST['Obito'];
        $Colocar = mysqli_query($conexao, " INSERT INTO `beira`(`Recuperado`, `Negativo`, `Possesetivo`, `Quarentena`,`Obito`) VALUES ('$Recuperado', '$Negativo','$Possetivo','$Quarentena','$Obito') ");

        if (isset($Colocar)) {
            $_SESSION['sofala'] = "Dados inseridos";
            header("location: ../../pages/sofala.php");
        } else {
            $_SESSION['sofala'] = "Dados Nao inseridos";
            header("location: ../../pages/sofala.php");
        }
    }
    // TETE
    if (isset($_POST['tete_atualizar'])) {
        $Recuperado = $_POST['Recuperado'];
        $Negativo = $_POST['Negativo'];
        $Possetivo = $_POST['Possetivo'];
        $Quarentena = $_POST['Quarentena'];
        $Obito = $_POST['Obito'];
        $Colocar = mysqli_query($conexao, " INSERT INTO `tete`(`Recuperado`, `Negativo`, `Possesetivo`, `Quarentena`,`Obito`) VALUES ('$Recuperado', '$Negativo','$Possetivo','$Quarentena','$Obito') ");

        if (isset($Colocar)) {
            $_SESSION['tete'] = "Dados inseridos";
            header("location: ../../pages/tete.php");
        } else {
            $_SESSION['tete'] = "Dados Nao inseridos";
            header("location: ../../pages/tete.php");
        }
    }
    // GAZA
    if (isset($_POST['gaza_atualizar'])) {
        $Recuperado = $_POST['Recuperado'];
        $Negativo = $_POST['Negativo'];
        $Possetivo = $_POST['Possetivo'];
        $Quarentena = $_POST['Quarentena'];
        $Obito = $_POST['Obito'];
        $Colocar = mysqli_query($conexao, " INSERT INTO `gaza`(`Recuperado`, `Negativo`, `Possesetivo`, `Quarentena`,`Obito`) VALUES ('$Recuperado', '$Negativo','$Possetivo','$Quarentena','$Obito') ");

        if (isset($Colocar)) {
            $_SESSION['gaza'] = "Dados inseridos";
            header("location: ../../pages/gaza.php");
        } else {
            $_SESSION['gaza'] = "Dados Nao inseridos";
            header("location: ../../pages/gaza.php");
        }
    }
    // // NIASSA
    if (isset($_POST['niassa_atualizar'])) {
        $Recuperado = $_POST['Recuperado'];
        $Negativo = $_POST['Negativo'];
        $Possetivo = $_POST['Possetivo'];
        $Quarentena = $_POST['Quarentena'];
        $Obito = $_POST['Obito'];
        $Colocar = mysqli_query($conexao, " INSERT INTO `niassa`(`Recuperado`, `Negativo`, `Possesetivo`,`Quarentena`, `Obito`) VALUES ('$Recuperado', '$Negativo','$Possetivo','$Quarentena','$Obito') ");

        if (isset($Colocar)) {
            $_SESSION['niassa'] = "Dados inseridos";
            header("location: ../../pages/niassa.php");
        } else {
            $_SESSION['niassa'] = "Dados Nao inseridos";
            header("location: ../../pages/niassa.php");
        }
    }
    // // cabodelgado
    if (isset($_POST['cabodelgado_atualizar'])) {
        $Recuperado = $_POST['Recuperado'];
        $Negativo = $_POST['Negativo'];
        $Possetivo = $_POST['Possetivo'];
        $Quarentena = $_POST['Quarentena'];
        $Obito = $_POST['Obito'];
        $Coloca = mysqli_query($conexao, " INSERT INTO `cabodelgado`(`Recuperado`, `Negativo`, `Possesetivo`, `Quarentena`,`Obito`) VALUES ('$Recuperado', '$Negativo','$Possetivo','$Quarentena','$Obito') ");

        if (isset($Coloca)) {

            header("location: ../../pages/cabodelegado.php");
            $_SESSION['cabo'] = "Dados inseridos";
        } else {
            $_SESSION['cabo'] = "Dados inseridos";
            header("location: ../../pages/cabodelegado.php");
        }
    }
    // // NAMPULA
    if (isset($_POST['nampula_atualizar'])) {
        $Recuperado = $_POST['Recuperado'];
        $Negativo = $_POST['Negativo'];
        $Possetivo = $_POST['Possetivo'];
        $Quarentena = $_POST['Quarentena'];
        $Obito = $_POST['Obito'];
        $Colocar = mysqli_query($conexao, " INSERT INTO `nampula`(`Recuperado`, `Negativo`, `Possesetivo`, `Quarentena`,`Obito`) VALUES ('$Recuperado', '$Negativo','$Possetivo','$Quarentena','$Obito') ");

        if (isset($Colocar)) {
            $_SESSION['nampula'] = "Dados inseridos";
            header("location: ../../pages/nampula.php");
        } else {
            $_SESSION['nampula'] = "Dados Nao inseridos";
            header("location: ../../pages/nampula.php");
        }
    }
    // // ZAMBEZIA
    if (isset($_POST['zambezia_atualizar'])) {
        $Recuperado = $_POST['Recuperado'];
        $Negativo = $_POST['Negativo'];
        $Possetivo = $_POST['Possetivo'];
        $Quarentena = $_POST['Quarentena'];
        $Obito = $_POST['Obito'];
        $Colocar = mysqli_query($conexao, " INSERT INTO `zambezia`(`Recuperado`, `Negativo`, `Possesetivo`,`Quarentena`, `Obito`) VALUES ('$Recuperado', '$Negativo','$Possetivo','$Quarentena','$Obito') ");

        if (isset($Colocar)) {
            $_SESSION['zabe'] = "Dados inseridos";
            header("location: ../../pages/zambezia.php");
        } else {
            $_SESSION['zabe'] = "Dados Nao inseridos";
            header("location: ../../pages/zambezia.php");
        }
    }
    // // MANICA
    if (isset($_POST['manica_atualizar'])) {
        $Recuperado = $_POST['Recuperado'];
        $Negativo = $_POST['Negativo'];
        $Possetivo = $_POST['Possetivo'];
        $Quarentena = $_POST['Quarentena'];
        $Obito = $_POST['Obito'];
        $Colocar = mysqli_query($conexao, " INSERT INTO `manica`(`Recuperado`, `Negativo`, `Possesetivo`, `Quarentena`,`Obito`) VALUES ('$Recuperado', '$Negativo','$Possetivo','$Quarentena','$Obito') ");

        if (isset($Colocar)) {
            $_SESSION['manica'] = "Dados inseridos";
            header("location: ../../pages/manica.php");
        } else {
            $_SESSION['manica'] = "Dados Nao inseridos";
            header("location: ../../pages/manica.php");
        }
    }

    // // IMHAMANE
    if (isset($_POST['inhambane_atualizar'])) {
        $Recuperado = $_POST['Recuperado'];
        $Negativo = $_POST['Negativo'];
        $Possetivo = $_POST['Possetivo'];
        $Quarentena = $_POST['Quarentena'];
        $Obito = $_POST['Obito'];
        $Colocar = mysqli_query($conexao, " INSERT INTO `inhambane`(`Recuperado`, `Negativo`, `Possesetivo`,`Quarentena`, `Obito`) VALUES ('$Recuperado', '$Negativo','$Possetivo','$Quarentena','$Obito') ");

        if (isset($Colocar)) {
            $_SESSION['inhambane'] = "Dados inseridos";
            header("location: ../../pages/inhambane.php");
        } else {
            $_SESSION['inhambane'] = "Dados Nao inseridos";
            header("location: ../../pages/inhambane.php");
        }
    }

    // // PROVICIAMAPUTO
    if (isset($_POST['provinciamaputo_atualizar'])) {
        $Recuperado = $_POST['Recuperado'];
        $Negativo = $_POST['Negativo'];
        $Possetivo = $_POST['Possetivo'];
        $Quarentena = $_POST['Quarentena'];
        $Obito = $_POST['Obito'];
        $Colocar = mysqli_query($conexao, " INSERT INTO `provinciamaputo`(`Recuperado`, `Negativo`, `Possesetivo`, `Quarentena`,`Obito`) VALUES ('$Recuperado', '$Negativo','$Possetivo','$Quarentena','$Obito') ");

        if (isset($Colocar)) {
            $_SESSION['matola'] = "Dados inseridos";
            header("location: ../../pages/provinciamaputo.php");
        } else {
            $_SESSION['matola'] = "Dados Nao inseridos";
            header("location: ../../pages/provinciamaputo.php");
        }
    }
    // // CIDADEMAPUTO
    if (isset($_POST['cidadeMaputo_atualizar'])) {
        $Recuperado = $_POST['Recuperado'];
        $Negativo = $_POST['Negativo'];
        $Possetivo = $_POST['Possetivo'];
        $Quarentena = $_POST['Quarentena'];
        $Obito = $_POST['Obito'];
        $Colocar = mysqli_query($conexao, " INSERT INTO `cidademaputo`(`Recuperado`, `Negativo`, `Possesetivo`,`Quarentena`, `Obito`) VALUES ('$Recuperado', '$Negativo','$Possetivo','$Quarentena','$Obito') ");

        if (isset($Colocar)) {
            $_SESSION['maputo'] = "Dados inseridos";
            header("location: ../../pages/cidademaputo.php");
        } else {
            $_SESSION['maputo'] = "Dados Nao inseridos";
            header("location: ../../pages/cidademaputo.php");
        }
    }



    ?>