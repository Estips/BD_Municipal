<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-editando.css">
    <link href='https://fonts.googleapis.com/css?family=Barlow Semi Condensed' rel='stylesheet'>
</head>
<body>
    <header>
        <a href="https://www.mda.gob.ar" style="z-index: 1;"><img src="css/image_1.png" width="100" height="80" style="z-index: 1;"></a>
        <h1 style="color: white; text-align: center; z-index: 0;">ARCHIVO AUDIOVISUAL DE LA MUNICIPALIDAD DE AVELLANEDA</h1>
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 16 16"><g fill="#fff0"><path d="M6 3a3 3 0 1 1-6 0a3 3 0 0 1 6 0z"/><path d="M9 6a3 3 0 1 1 0-6a3 3 0 0 1 0 6z"/><path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z"/></g></svg>
    </header>
    <section>
        <aside class="Agregar">
        <div class="Background-blur">
            <div class="Formulario">
                <h1>Archivos Historicos</h1>
                <form action="" method= "post" enctype="multipart/form-data" class="datos"> 
                    <div class="campo">Codigo de referencia</div> 
                    <input type="text" name="codigo_referencia" >
                    <div class="campo">Numero existente</div> 
                    <input type="text" name="numero_existente" >
                    <div class="campo">Ubicacion original</div>
                    <input type="text" name="ubicacion_original" >
                    <div class="campo">Soporte</div>
                    <input type="text" name="soporte" >
                    <div class="campo">Formato</div>
                    <input type="text" name="formato" >
                    <div class="campo">Velocidad de grabacion</div>
                    <input type="text" name="velocidad_grabacion" > 
                    <div class="campo">¿Tranca de seguridad?</div>
                    Si<input type="radio" name="tranca_seguridad" value="Si" >
                    No<input type="radio" name="tranca_seguridad" value="No"  >
                    <div class="campo">Marca</div>
                    <input type="text" name="marca" >
                    <div class="campo">Numero de serie de soporte</div>
                    <input type="text" name="numero_serie_soporte" >
                    <div class="campo">Fecha de grabacion</div>
                    <input type="datetime-local" name="fecha_grabacion" >
                    <div class="campo">Generacion</div>
                    <input type="text" name="generacion" >
                    <div class="campo">Duracion de la grabacion</div>
                    <input type="text" name="duracion_de_la_grabacion" >
                    <div class="campo">Duracion del soporte</div>
                    <input type="text" name="duracion_soporte" >
                    <div class="campo">Entrada descriptiva caja</div>
                    <input type="text" name="entrada_descriptiva_caja" >
                    <div class="campo">Entrada descriptiva soporte </div>
                    <input type="text" name="entrada_desriptiva_soporte" >
                    <div class="campo">Entrada descriptiva documentacion secundaria</div>
                    <input type="text" name="entrada_descriptiva_documentacion_secundaria" > 
                    <div class="campo">Deterioro</div>
                    <input type="text" name="deterioro" >
                    <div class="campo">Estado de conservacion</div>
                    <input type="text" name="estado_conservacion" >
                    <div class="campo">Restauraciones</div>
                    <input type="text" name="restauraciones" >
                    <input type="Submit" name="agregar" value="Agregar" class="button" style="margin-top: 10px; padding-bottom: 10px; color: white; font-size: large; background-color: #0f559f;">
                </form>
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

                    $numero_existente = !empty($_POST['numero_existente']) ? $_POST['numero_existente'] : 'Sin Informacion';
                    $ubicacion_original = !empty($_POST['ubicacion_original']) ? $_POST['ubicacion_original'] : 'Sin Informacion';
                    $soporte = !empty($_POST['soporte']) ? $_POST['soporte'] : 'Sin informacion';
                    $formato = !empty($_POST['formato']) ? $_POST['formato'] : 'Sin informacion';
                    $velocidad_grabacion = !empty($_POST['velocidad_grabacion']) ? $_POST['velocidad_grabacion'] : 'Sin Informacion';
                    $tranca_seguridad = isset($_POST['tranca_seguridad']) ? $_POST['tranca_seguridad'] : 'No';
                    $marca = !empty($_POST['marca']) ? $_POST['marca'] : 'Sin Informacion';
                    $numero_serie_soporte = !empty($_POST['numero_serie_soporte']) ? $_POST['numero_serie_soporte'] : 'Sin Informacion';
                    $fecha_grabacion = !empty($_POST['fecha_grabacion']) ? $_POST['fecha_grabacion'] : 'Sin Informacion';
                    $generacion = !empty($_POST['generacion']) ? $_POST['generacion'] : 'Sin Informacion';
                    $duracion_de_la_grabacion = !empty($_POST['duracion_de_la_grabacion']) ? $_POST['duracion_de_la_grabacion'] : 'Sin Informacion';
                    $duracion_soporte = !empty($_POST['duracion_soporte']) ? $_POST['duracion_soporte'] : 'Sin Informacion';
                    $entrada_descriptiva_caja = !empty($_POST['entrada_descriptiva_caja']) ? $_POST['entrada_descriptiva_caja'] : 'Sin Informacion';
                    $entrada_desriptiva_soporte = !empty($_POST['entrada_desriptiva_soporte']) ? $_POST['entrada_desriptiva_soporte'] : 'Sin Informacion';
                    $entrada_descriptiva_documentacion_secundaria = !empty($_POST['entrada_descriptiva_documentacion_secundaria']) ? $_POST['entrada_descriptiva_documentacion_secundaria'] : 'Sin Informacion';
                    $deterioro = !empty($_POST['deterioro']) ? $_POST['deterioro'] : 'Sin Informacion';
                    $estado_conservacion = !empty($_POST['estado_conservacion']) ? $_POST['estado_conservacion'] : 'Sin Informacion';
                    $restauraciones = !empty($_POST['restauraciones']) ? $_POST['restauraciones'] : 'Sin Informacion';

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
                }else{ echo '<script language="javascript">alert("Error, el campo codigo_referencia es obligatorio.");</script>';
                    header("Location: {$_SERVER['PHP_SELF']}");
                    exit();}
            }
            ?>
            </div>
        </div>
        </aside>
        <aside class="Editar-Eliminar">
            <h2>Lista de Archivos</h2>
            <table>
                <tr style="color: white; background-color: #0F549F;">
                    <th>Codigo de referencia</th>
                    <th>Numero existente</th>
                    <th>Ubicacion original</th>
                    <th>Soporte</th>
                    <th>Formato</th>
                    <th>Velocidad de grabacion</th>
                    <th>Tranca de seguridad</th>
                    <th>Marca</th>
                    <th>Numero de serie del soporte</th>
                    <th>Fecha de grabacion</th>
                    <th>Generacion</th>
                    <th>Duracion de la grabacion</th>
                    <th>Duracion del soporte</th>
                    <th>Entrada descriptiva de la caja</th>
                    <th>Entrada descriptiva del soporte</th>
                    <th>Entrada descriptiva de documentacion secundaria</th>
                    <th>Deterioro</th>
                    <th>Restauraciones</th>
                    <th>Estado de conservacion</th>
                </tr>
                <?php
            $sql3="SELECT * FROM archivos";
            $consulta= mysqli_query($conexion,$sql3);
            
            while($registro = mysqli_fetch_assoc($consulta)){
                echo "<tr>";
                    echo "<td>" . $registro['codigo_referencia'] . "</td>";
                    echo "<td>" . $registro['numero_existente'] . "</td>";
                    echo "<td>" . $registro['ubicacion_original'] . "</td>";
                    echo "<td>" . $registro['soporte'] . "</td>";
                    echo "<td>" . $registro['formato'] . "</td>";
                    echo "<td>" . $registro['velocidad_grabacion'] . "</td>";
                    echo "<td>" . $registro['tranca_seguridad'] . "</td>";
                    echo "<td>" . $registro['marca'] . "</td>";
                    echo "<td>" . $registro['numero_serie_soporte'] . "</td>";
                    echo "<td>" . $registro['fecha_grabacion'] . "</td>";
                    echo "<td>" . $registro['generacion'] . "</td>";
                    echo "<td>" . $registro['duracion_de_la_grabacion'] . "</td>";
                    echo "<td>" . $registro['duracion_soporte'] . "</td>";
                    echo "<td>" . $registro['entrada_descriptiva_caja'] . "</td>";
                    echo "<td>" . $registro['entrada_desriptiva_soporte'] . "</td>";
                    echo "<td>" . $registro['entrada_descriptiva_documentacion_secundaria'] . "</td>";
                    echo "<td>" . $registro['deterioro'] . "</td>";
                    echo "<td>" . $registro['estado_conservacion'] . "</td>";
                    echo "<td>" . $registro['restauraciones'] . "</td>";
                echo "</tr>";
                echo "<tr class='tr-dmrd'>";
                echo "<td class='td-dmrd'>";
                echo '<div class="form-separacion">';
                echo "<form action='' method='post'>";
                echo "<input type='hidden' name='codigo_referencia' value='" . $registro['codigo_referencia'] . "'>";
                echo "<input type='submit' name='eliminar' value='Eliminar' class='eliminar'>";
                echo "</form>";
                echo "<form action='Editando.php' method='get'>";
                echo "<input type='hidden' name='codigo_referencia' value='" . $registro['codigo_referencia'] . "'>";
                echo "<input type='Submit' name='editar' value='Editar' class='editar'>";
                echo "</form>";
                echo '</div>';
                echo "</td>";
                echo "</tr>";
            }
            if(isset($_POST['eliminar'])){
                $codigo_referencia = $_POST['codigo_referencia'];
                $sql4 = "DELETE FROM archivos WHERE codigo_referencia = '$codigo_referencia'";
                $eliminar = mysqli_query($conexion, $sql4) ? print('Registro eliminado') : print('Error al eliminar el registro');
            }
            ?>
            </table>
        </aside>
    </section>
    <footer>
        <p style="width: 80%;
        color: white;
        font-size: 24px;">Proyecto desarrollado por los alumnos de la técnica N°7 "José Hernández" - Martin Calvo y Martina Luaces.</p>
    </footer>
</body>
</html>