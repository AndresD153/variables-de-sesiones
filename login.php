<?php
  include "./servicios/conexion.php";

  session_start();
  $_SESSION ['PERMISO'] = false;
  if($_SESSION['PERMISO'] === true){
      echo "<script> 
                  alert ('Bienvenido')
                  window.location.href = 'index.php';
              </script>";
  }


  if($_SERVER['REQUEST_METHOD'] === "POST"){
    $user = $_POST['usr'];
    $pass = $_POST['pwd'];
    //$pass = md5($_POST['pwd']);     //--Encriptacion con MD5
    //$pass = hash('sha256',md5($_POST['pwd']));   //--Encriptacion con Sha256 despues de una MD5

    $sql = "select * from usuario where usuario = '$user' and password = '$pass'; ";
    //Ejecuta la consulta y la guarda en variable $res
    $res = $conn->query($sql);

    if($res->num_rows == 1){
        //Variables para inisiar secion
        $row = $res->fetch_assoc();
        $_SESSION['PERMISO'] = true;
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['apellido'] = $row['apellido'];
        
        echo "<script> 
                alert ('Bienvenido')
                window.location.href = 'index.php';
            </script>";
    }else{
        echo "<script> alert ('Error usuario no encontrado')</script>";
    }
    
}



?>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/boostrap/bootstrap.min.css">      
    <link rel="stylesheet" href="./public/css/estilos/estilo.css">
    
    <script src=""></script>
    
    <title>Proyecto W</title>
</head>
<!-------------------------------------------------Cuerpo------------------------------->
<div class="login-page">
  <div class="form">
    <form class="login-form" method="POST">
        <input type="text" placeholder="Usuario" id="usr" name="usr">
        <input type="password" placeholder="password" id="pwd" name="pwd">
        <button>login</button>
        <p class="message">No estas registrado <a href="./FormAdmin.php">Crea una cuenta</a></p>
    </form>
  </div>
</div>