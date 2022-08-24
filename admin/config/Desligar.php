<?php
session_start();
session_unset();
if(session_destroy()){
    session_write_close();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);
    header('location: ../index.php');
   
}



?>