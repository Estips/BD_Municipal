<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_muni";
$conexion = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO archivos (codigo_referencia, numero_existente, ubicacion_original, soporte, 
        velocidad_grabacion, tranca_seguridad, marca, numero_serie_soporte, fecha_grabacion, 
        generacion, duracion_de_la_generacion, duracion_soporte, entrada_descriptiva_caja, 
        entrada_desriptiva_soporte, entrada_descriptiva_documentacion_secundaria, deterioro, 
        estado_conservacion, restauraciones)
        VALUES ('ABC123', '1234', 'Estante C3', 'Betacam', 'x1.2', 'TRUE', 'Sony', '122', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '')";
//$insertar= mysqli_query($conexion, $sql) ? print('reg.Ingresado'): print('error al guardar');
$sql2 = "UPDATE archivos SET
    codigo_referencia = '$codigo_referencia',
    numero_existente = '$numero_existente',
    ubicacion_original = '$ubicacion_original',
    soporte = '$soporte',
    velocidad_grabacion = '$velocidad_grabacion',
    tranca_seguridad = '$tranca_seguridad',
    marca = '$marca',
    numero_serie_soporte = '$numero_serie_soporte',
    fecha_grabacion = '$fecha_grabacion',
    generacion = '$generacion',
    duracion_de_la_generacion = '$duracion_de_la_generacion',
    duracion_soporte = '$duracion_soporte',
    entrada_descriptiva_caja = '$entrada_descriptiva_caja',
    entrada_desriptiva_soporte = '$entrada_desriptiva_soporte',
    entrada_descriptiva_documentacion_secundaria = '$entrada_descriptiva_documentacion_secundaria',
    deterioro = '$deterioro',
    estado_conservacion = '$estado_conservacion',
    restauraciones = '$restauraciones'
    WHERE codigo_referencia = '$codigo_referencia'";

//$editar= mysqli_query($conexion,$sql2) ? print('registro modificado'): print('error al modificar');

?>