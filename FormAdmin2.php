<?php
    include "./plantillas/encabezado.php";
    include "./servicios/conexion.php";

    $id="";
    $cedula="";
    $nombres="";
    $apellidos="";
    $usr="";
    $pwd="";

    if($_SERVER['REQUEST_METHOD'] === "POST"){  //Si la informacion la trae un emtodo POST
        //print_r($_POST);
        if(isset($_POST) && $_POST["Enviar"] == "Actualizar"){
            
            $id = $_POST["id"];     //En una variable almacena lo que contenga el id con el name id
            $sql = "select * from admin where id_admin = $id";
            //echo $sql;
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
    
            $id = $row['id_admin'];
            $cedula = $row['cedula'];
            $nombres = $row['nombre'];
            $apellidos = $row['apellido'];
            $usr = $row['usuario'];
            $pwd = md5($row['password']);    //---Encriptacion
        }
    }

?>


<div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6"><br>
                <div class="card">
                    <div class="card-header">
                        Datos del Usuario
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="./servicios/AdminCRUD.php">
                        <!--Para traer el ide para editar-->
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <!---->
                        <div class = "form-group">
                            <label for="nombres">Cedula</label>
                            <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Ingrese sus nombres" value="<?php echo $cedula ?>">
                        </div>
                        <br>
                        <div class = "form-group">
                            <label for="nombres">Ingrese sus nombres</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese sus nombres" value="<?php echo $nombres ?>">
                        </div>
                        <br>
                        <div class = "form-group">
                            <label for="apellidos">Ingrese sus apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese sus apellidos" value="<?php echo $apellidos ?>">
                        </div>
                        <br>
                        <div class = "form-group">
                            <label for="apellidos">Ingrese Usuario</label>
                            <input type="text" class="form-control" id="usr" name="usr" placeholder="Ingrese su Usuario" value="<?php echo $usr ?>">
                        </div>
                        <br>
                        <div class = "form-group">
                            <label for="apellidos">Ingrese Contraseña</label>
                            <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Ingrese su contraseña" value="<?php echo $pwd ?>">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" name="Enviar" value="Guardar">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>