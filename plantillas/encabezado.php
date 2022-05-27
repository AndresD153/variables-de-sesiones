<?php
    
    session_start();

    if(isset($_SESSION['PERMISO']) and $_SESSION['PERMISO'] == false){
        echo "<script> 
                    alert ('Porfavor inicie seseion primero')
                    window.location.href = 'login.php';
                </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/boostrap/bootstrap.min.css">        <!--Referenciar una hoja de tipop css-->
    <script src="./public/js/bootstrap.bundle.js"></script>              <!--referenciar una hoja tipo JS-->
    <title>Matriculas</title>
</head>
<body>


<!---Barra de navegacion o Menu-->
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #255047;">    
    <a class="navbar-brand" href="#">Inicio</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio </a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="salir.php">Salir </a>
                </li>
            </ul>
    </nav>
