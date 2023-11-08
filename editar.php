<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rokkitt:wght@100&display=swap" rel="stylesheet">
    <title>archivo municipal</title>
</head>
<body>
    <div class="Caja-ingreso-datos">
        <h1>Archivos Historicos</h1>
        <form action="" method= "post" enctype="multipart/form-data"> 
            <div class="Ingreso-Datos">
                <div class="campo">codigo de referencia</div> 
                <input type="text" name="codigo_referencia" required>

                <div class="campo"> numero existente</div> 
                <input type="text" name="numero_existente" required>

                <div class="campo">Ubicacion original</div>
                <input type="text" name="ubicacion_original" required>

                <div class="campo">Soporte</div>
                <input type="text" name="soporte" required>

                <div class="campo">Formato</div>
                <input type="text" name="formato" required>

                <div class="campo">Velocidad de grabacion</div>
                <input type="text" name="velocidad_grabacion" required> 

                <div class="campo">¿Tranca de seguridad?</div>
                Si<input type="radio" name="tranca_seguridad" value="Si" required>
                No<input type="radio" name="tranca_seguridad" value="No"  required>

                <div class="campo">Marca</div>
                <input type="text" name="marca" required>

                <div class="campo">Numero de serie de soporte</div>
                <input type="text" name="numero_serie_soporte" required>

                <div class="campo">Fecha de grabacion</div>
                <input type="datetime-local" name="fecha_grabacion" required>

                <div class="campo">Generacion</div>
                <input type="text" name="generacion" required>

                <div class="campo">Duracion de la grabacion</div>
                <input type="text" name="duracion_grabacion" required>

                <div class="campo">Duracion del soporte</div>
                <input type="text" name="duracion_soporte" required>

                <div class="campo">Entrada descriptiva caja</div>
                <input type="text" name="entrada_descriptiva_caja" required>

                <div class="campo">Entrada descriptiva soporte </div>
                <input type="text" name="entrada_desriptiva_soporte" required>

                <div class="campo">Entrada descriptiva documentacion secundaria</div>
                <input type="text" name="entrada_descriptiva_documentacion_secundaria" required> 

                <div class="campo">Deterioro</div>
                <input type="text" name="deterioro" required>

                <div class="campo">Estado de conservacion</div>
                <input type="text" name="estado_conservacion" required>

                <div class="campo">Restauraciones</div>
                <input type="text" name="restauraciones" required>
            </div>
            <div class="Submit-button">
                
                <input type="Submit" name="agregar" value="Agregar" class="button">
            </div>
        </form>
    </div>
        <?php
            include("conexion.php");
            if(isset($_POST['agregar'])){
                if(!empty($_POST['codigo_referencia'])){
                    $codigo_referencia = $_POST['codigo_referencia'];
                    $numero_existente = isset($_POST['numero_existente']) ? $_POST['numero_existente'] : 'Sin Informacion';
                    $ubicacion_original = isset($_POST['ubicacion_original']) ? $_POST['ubicacion_original'] : 'Sin Informacion';
                    $soporte = isset($_POST['soporte']) ? $_POST['soporte'] : 'Soporte';
                    $formato = isset($_POST['formato']) ? $_POST['formato'] : 'formato';
                    $velocidad_grabacion = isset($_POST['velocidad_grabacion']) ? $_POST['velocidad_grabacion'] : 'Sin Informacion';
                    $tranca_seguridad = isset($_POST['tranca_seguridad']) ? $_POST['tranca_seguridad'] : 'No';
                    $marca = isset($_POST['marca']) ? $_POST['marca'] : 'Sin informacion';
                    $numero_serie_soporte = isset($_POST['numero_serie_soporte']) ? $_POST['numero_serie_soporte'] : 'Sin Informacion';
                    $fecha_grabacion = isset($_POST['numero_serie_soporte']) ? $_POST['fecha_grabacion'] : 'Sin Informacion';
                    $generacion = isset($_POST['generacion']) ? $_POST['generacion'] : 'Sin Informacion';
                    $duracion_de_la_grabacion = isset($_POST['duracion_de_la_grabacion']) ? $_POST['duracion_de_la_grabacion'] : 'Sin Informacion';
                    $duracion_soporte = isset($_POST['duracion_soporte']) ? $_POST['duracion_soporte'] : 'Sin Informacion';
                    $entrada_descriptiva_caja = isset($_POST['entrada_descriptiva_caja']) ? $_POST['entrada_descriptiva_caja'] : 'Sin Informacion';
                    $entrada_desriptiva_soporte = isset($_POST['entrada_desriptiva_soporte']) ? $_POST['entrada_desriptiva_soporte'] : 'Sin Informacion';
                    $entrada_descriptiva_documentacion_secundaria = isset($_POST['entrada_descriptiva_documentacion_secundaria']) ? $_POST['entrada_descriptiva_documentacion_secundaria'] : 'Sin Informacion';
                    $deterioro = isset($_POST['deterioro']) ? $_POST['deterioro'] : 'Sin Informacion';
                    $estado_conservacion = isset($_POST['estado_conservacion']) ? $_POST['estado_conservacion'] : 'Sin Informacion';
                    $restauraciones = isset($_POST['restauraciones']) ? $_POST['restauraciones'] : 'Sin Informacion';

                    $sql = "INSERT INTO archivos (codigo_referencia, numero_existente, ubicacion_original, soporte, formato,
                        velocidad_grabacion, tranca_seguridad, marca, numero_serie_soporte, fecha_grabacion, 
                        generacion, duracion_de_la_grabacion, duracion_soporte, entrada_descriptiva_caja, 
                        entrada_desriptiva_soporte, entrada_descriptiva_documentacion_secundaria, deterioro, 
                        estado_conservacion, restauraciones)
                        VALUES ('$codigo_referencia', '$numero_existente', '$ubicacion_original', '$soporte', '$formato',
                        '$velocidad_grabacion', '$tranca_seguridad', '$marca', '$numero_serie_soporte', '$fecha_grabacion', '$generacion', 
                        '$duracion_de_la_grabacion', '$duracion_soporte', '$entrada_descriptiva_caja', '$entrada_desriptiva_soporte',
                        '$entrada_descriptiva_documentacion_secundaria', '$deterioro', '$estado_conservacion', '$restauraciones')";

                    $insertar = mysqli_query($conexion, $sql);
                    header("Refresh:0");
                }else{ echo '<script language="javascript">alert("Error, el campo codigo_referencia es obligatorio.");</script>'; }
            }
            ?>
            <div class="Lista-Archivos">
            <h2>Lista de Archivos</h2>
            <?php
            $sql3="SELECT * FROM archivos";
            $consulta= mysqli_query($conexion,$sql3);
            /*finaliza modificar*/

    //Muestreo de tabla
    while($registro = mysqli_fetch_assoc($consulta)){
        echo "<b>| <td>Codigo de referencia: " . $registro['codigo_referencia'] . "</td> | <br></b>";
        echo "<tr>";
            echo "| <td>" . $registro['numero_existente'] . "</td> | ";
            echo "<td>" . $registro['ubicacion_original'] . "</td> | ";
            echo "<td>" . $registro['soporte'] . "</td> | ";
            echo "<td>" . $registro['formato'] . "</td> | ";
            echo "<td>" . $registro['velocidad_grabacion'] . "</td> | ";
            echo "<td>" . $registro['tranca_seguridad'] . "</td> | ";
            echo "<td>" . $registro['marca'] . "</td> | ";
            echo "<td>" . $registro['numero_serie_soporte'] . "</td> | ";
            echo "<td>" . $registro['fecha_grabacion'] . "</td> | ";
            echo "<td>" . $registro['generacion'] . "</td> | ";
            echo "<td>" . $registro['duracion_de_la_grabacion'] . "</td> | ";
            echo "<td>" . $registro['duracion_soporte'] . "</td> | ";
            echo "<td>" . $registro['entrada_descriptiva_caja'] . "</td> | ";
            echo "<td>" . $registro['entrada_desriptiva_soporte'] . "</td> | ";
            echo "<td>" . $registro['entrada_descriptiva_documentacion_secundaria'] . "</td> | ";
            echo "<td>" . $registro['deterioro'] . "</td> | ";
            echo "<td>" . $registro['estado_conservacion'] . "</td> | ";
            echo "<td>" . $registro['restauraciones'] . "</td> | ";
        echo "</tr><br>";
        echo "<td>" .
        '<div class="form-separacion">'."
            <form action='' method='post'>
                <input type='hidden' name='codigo_referencia' value='" . $registro['codigo_referencia'] . "'>
                <input type='submit' name='eliminar' value='Eliminar' class='button'>
            </form>
            <form action='editar_2.php' method='get'>
                <input type='hidden' name='codigo_referencia' value='" . $registro['codigo_referencia'] . "'>
                <input type='Submit' name='editar' value='Editar' class='button'>
            </form>
        </div>
        </td>";
    echo "</tr>";
    }
    if(isset($_POST['eliminar'])){
        $codigo_referencia = $_POST['codigo_referencia'];
        $sql4 = "DELETE FROM archivos WHERE codigo_referencia = '$codigo_referencia'";
        $eliminar = mysqli_query($conexion, $sql4) ? print('Registro eliminado') : print('Error al eliminar el registro');
        header("Refresh:0");
    }
    ?>
        </div>
</body>
</html>