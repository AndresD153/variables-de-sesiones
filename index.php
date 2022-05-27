<?php
    include "plantillas/encabezado.php";
    include "./servicios/conexion.php";


?>

<h1>Nombre: <?php echo $_SESSION['nombre']?></h1>
<h1>Apellido: <?php echo $_SESSION['apellido']?></h1>



<?php
    include "plantillas/pie.php";
?>