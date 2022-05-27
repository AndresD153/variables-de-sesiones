<?php
include "./conexion.php";

//--- Insertar ---
if(isset($_POST['Enviar']) and $_POST['Enviar'] === "Guardar"){

    //$id = $_POST['id'];
    $cedula = $_POST['cedula'];                         //Sirve para actualizar
    $nombre = $_POST['nomnbre'];
    $apellido = $_POST['apellido'];
    $usr = $_POST['usr'];
    $pwd = $_POST['pwd'];
    //$pwd = hash('sha256',md5($_POST['pwd']));

    //print_r($_POST);
    $sql = "insert into usuario (cedula,nombre,apellido,usuario,password)
        values('$cedula','$nombre','$apellido','$usr','$pwd');";
    
    if($conn->query($sql)){
        echo "<script>
                    alert ('Dato insertado correctamente');
                    window.location.href = '../login.php';
                </script>";
    }else{
        echo "<script>
                alert ('Error al guardar');
                window.location.href = '../login.php';
            </script>";
        //echo $sql;
    }
    $conn->close();

//------- Si se quiere eliminar -------------------------
}

?>