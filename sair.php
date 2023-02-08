<?php
// if(!isset($_SESSION['logado'])){  
// }

    session_start();
    session_destroy();
    header("Location:login.php");


?>