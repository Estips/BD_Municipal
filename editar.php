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
        <form action="" method= "get" enctype="multipart/form-data"> 
            <div class="Ingreso-Datos">
                <div class="codigo_referencia">codigo de referencia</div> 
                <input type="text" name="codigo_referencia" required>

                <div class="numero_existente"> numero existente</div> 
                <input type="text" name="numero_existente" required>

                <div class="ubicacion_original">Ubicacion original</div>
                <input type="text" name="ubicacion_original" required>

                <div class="soporte">Soporte</div>
                <input type="text" name="soporte" required>

                <div class="velocidad_grabacion">Velocidad de grabacion</div>
                <input type="text" name="velocidad_grabacion" required> 

                <div class="tranca_seguridad">¿Tranca de seguridad?</div>
                Si<input type="radio" name="tranca_seguridad" value="Si" required>
                No<input type="radio" name="tranca_seguridad" value="No"  required>

                <div class="marca">Marca</div>
                <input type="text" name="marca" required>

                <div class="numero_serie_soporte">Numero de serie de soporte</div>
                <input type="text" name="numero_serie_soporte" required>

                <div class="fecha_grabacion">Fecha de grabacion</div>
                <input type="datetime-local" name="fecha_grabacion" required>

                <div class="generacion">Generacion</div>
                <input type="text" name="generacion" required>

                <div class="duracion_grabacion">Duracion de la grabacion</div>
                <input type="text" name="duracion_grabacion" required>

                <div class="duracion_soporte">Duracion del soporte</div>
                <input type="text" name="duracion_soporte" required>

                <div class="entrada_descriptiva_caja">Entrada descriptiva caja</div>
                <input type="text" name="entrada_descriptiva_caja" required>

                <div class="entrada_desriptiva_soporte">Entrada descriptiva soporte </div>
                <input type="text" name="entrada_desriptiva_soporte" required>

                <div class="entrada_descriptiva_documentacion_secundaria">Entrada descriptiva documentacion secundaria</div>
                <input type="text" name="entrada_descriptiva_documentacion_secundaria" required> 

                <div class="deterioro">Deterioro</div>
                <input type="text" name="deterioro" required>

                <div class="estado_conservacion">Estado de conservacion</div>
                <input type="text" name="estado_conservacion" required>

                <div class="restauraciones">Restauraciones</div>
                <input type="text" name="restauraciones" required>
            </div>
            <div class="Submit-button">
                <input type="Submit" name="editar" value="Editar" class="button">
            </div>
        </form>
    </div>
        <?php
            include("conexion.php");

            if (isset($_GET ['editar'])){
                $codigo_referencia_editar=$_GET['editar'];
                $sql2="SELECT * FROM bd_muni WHERE codigo_referencia ='$codigo_referencia_editar'";
                /*
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
                */
                $buscar_reg=mysqli_query($conexion , $sql2);
                $registro= mysqli_fetch_assoc($buscar_reg);
            }

            if(isset($_POST['modificar'])){
                $numero_referencia_new = $_POST['numero_referencia_new'];
                $numero_existente_new = $_POST['numero_existente_new'];
                $ubicacion_original_new = $_POST['ubicacion_original_new'];
                $soporte_new = $_POST['soporte_new'];
                $valocidad_grabacion_new = $_POST['valocidad_grabacion_new'];
                $tranca_seguridad_new = $_POST['tranca_seguridad_new'];
                $marca_new = $_POST['marca_new'];
                $numero_serie_soporte_new = $_POST['numero_serie_soporte_new'];
                $fecha_grabacion_new = $_POST['fecha_grabacion_new'];
                $generacion_new = $_POST['generacion_new'];
                $duracion_de_la_generacion_new = $_POST['duracion_de_la_generacion_new'];
                $duracion_soporte_new = $_POST['duracion_soporte_new'];
                $entrada_descriptiva_caja_new = $_POST['entrada_descriptiva_caja_new'];
                $entrada_desriptiva_soporte_new = $_POST['entrada_desriptiva_soporte_new'];
                $entrada_descriptiva_documentacion_secundaria_new = $_POST['entrada_descriptiva_documentacion_secundaria_new'];
                $deterioro_new = $_POST['deterioro_new'];
                $estado_conservacion_new = $_POST['estado_conservacion_new'];
                $restauraciones_new = $_POST['restauraciones_new'];
                $sql4="UPDATE usuarios SET codigo_referencia= '$codigo_referencia',
                numero_existente= '$numero_existente',
                ubicacion_original='$ubicacion_original',
                soporte='$soporte',
                valocidad_grabacion='$velocidad_grabacion',
                tranca_seguridad='$tranca_seguridad',
                marca='$marca',
                numero_serie_soporte='$numero_serie_soporte',
                fecha_grabacion='$fecha_grabacion',
                generacion='$generacion',
                duracion_de_la_generacion='$duracion_de_la_generacion',
                duracion_soporte='$duracion_soporte',
                entrada_descriptiva_caja='$entrada_descriptiva_caja',
                entrada_desriptiva_soporte='$entrada_desriptiva_soporte',
                entrada_descriptiva_documentacion_secundaria='$entrada_descriptiva_documentacion_secundaria',
                deterioro='$deterioro',
                estado_conservacion='$estado_conservacion',
                restauraciones='$restauraciones', WHERE id='codigo_referencia_editar'";
                $editar=mysqli_query($conexion, $sql4)? print('reg modificado'): print ('error al modificar');
            }

            ?><h2>lista de archivos</h2><?php
            /*$sql2="SELECT * FROM archivos";
            $consulta= mysqli_query($conexion,$sql2);*/
            // $registro= mysqli_fetch_assoc($consulta);
            // print_r($registro);
            /*finaliza modificar*/
    while($registro = mysqli_fetch_assoc($consulta)){
        echo "<tr>";
        echo "<td>" . $registro['codigo_referencia'] . "</td>";
        echo "<td>" . $registro['numero_existente'] . "</td>";
        echo "<td>" . $registro['ubicacion_original'] . "</td>";
        echo "<td>" . $registro['soporte'] . "</td>";
        echo "<td>" . $registro['velocidad_grabacion'] . "</td>";
        echo "<td>" . $registro['tranca_seguridad'] . "</td>";
        echo "<td>" . $registro['marca'] . "</td>";
        echo "<td>" . $registro['numero_serie_soporte'] . "</td>";
        echo "<td>" . $registro['fecha_grabacion'] . "</td>";
        echo "<td>" . $registro['generacion'] . "</td>";
        echo "<td>" . $registro['duracion_grabacion'] . "</td>";
        echo "<td>" . $registro['duracion_soporte'] . "</td>";
        echo "<td>" . $registro['entrada_descriptiva_caja'] . "</td>";
        echo "<td>" . $registro['entrada_desriptiva_soporte'] . "</td>";
        echo "<td>" . $registro['entrada_descriptiva_documentacion_secundaria'] . "</td>";
        echo "<td>" . $registro['deterioro'] . "</td>";
        echo "<td>" . $registro['estado_conservacion'] . "</td>";
        echo "<td>" . $registro['restauraciones'] . "</td>";
        echo '<td><a href="registro.php?editar=' . $registro['codigo_referencia'] . '">editar</a></td>';
        echo "</tr>";
    }
    ?>
    </tr> 
</body>
</html>