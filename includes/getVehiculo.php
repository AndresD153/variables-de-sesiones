<?php
    include "../servicios/conexion.php";

    $idProp = $_POST['idprop'];

    $queryV = "select id_vehi, placa from vehiculo where id_prop=$idProp";

    $resultadoV = $conn->query($queryV);

    $html = "<option value='0'>Selecciones Vehiculo</option>";

    while($rowV = $resultadoV->fetch_assoc()){
        $html = "<option value='".$rowV['id_vehi']."'> ".$rowV['placa']."  </option>";
        echo $html;
    }
?>