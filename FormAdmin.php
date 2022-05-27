
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/boostrap/bootstrap.min.css">      
    <link rel="stylesheet" href="./public/css/estilos/estilo.css">
    
    <script src=""></script>
    
    <title>ProyectoW</title>
</head>
<!-------------------------------------------------Cuerpo------------------------------->
<div class="login-page">
  <div class="form">
    <form class="login-form" method="POST" action="./servicios/AdminCRUD.php">
        <input type="text" placeholder="Cedula" id="cedula" name="cedula">
        <input type="text" placeholder="Nombre" id="nomnbre" name="nomnbre">
        <input type="text" placeholder="Apellido" id="apellido" name="apellido">
        <input type="text" placeholder="Usuario" id="usr" name="usr">
        <input type="password" placeholder="Contraseña" id="pwd" name="pwd">
        <button id="Enviar" name="Enviar" value="Guardar">Crear cuenta</button>
        <p class="message"><a href="./login.php">Volver</a></p>
    </form>
  </div>
</div>