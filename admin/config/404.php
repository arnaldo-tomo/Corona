<?php
if(!isset($_SESSION['logado'])){
    header("location: ../admin/index.php");
    exit;
}
?>