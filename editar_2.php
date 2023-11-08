<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("conexion.php");
        $codigo_referencia = $_GET["codigo_referencia"];
        $sql5 = "SELECT * FROM archivos WHERE codigo_referencia = '" . $codigo_referencia . "'";
        $consulta= mysqli_query($conexion,$sql5);
        $registro = mysqli_fetch_assoc($consulta);
    ?>
    <div class="Caja-ingreso-datos">
        <h1>Archivos Historicos</h1>
        <form action="" method= "post" enctype="multipart/form-data"> 
            <div class="Ingreso-Datos">
                
                <div class="campo">codigo de referencia</div>
                <label style ="border: 1px solid black; padding-right: 20vh;"> <?php echo $codigo_referencia; ?> </label>

                <div class="campo"> numero existente</div> 
                <?php
                echo '<input type="text" name="numero_existente" value="'. $registro['numero_existente'] .'">'
                ?>

                <div class="campo">Ubicacion original</div>
                <?php
                echo '<input type="text" name="ubicacion_original" value="'. $registro['ubicacion_original'] .'">'
                ?>

                <div class="campo">Soporte</div>
                <?php
                echo '<input type="text" name="soporte" value="'. $registro['soporte'] .'">'
                ?>

                <div class="campo">Formato</div>
                <?php
                echo '<input type="text" name="formato" value="'. $registro['formato'] .'">'
                ?>

                <div class="campo">Velocidad de grabacion</div>
                <?php
                echo '<input type="text" name="velocidad_grabacion" value="'. $registro['velocidad_grabacion'] .'">'
                ?>

                <div class="campo">¿Tranca de seguridad?</div>
                <?php 
                if($registro['tranca_seguridad'] == 'Si'){
                    echo 'Si<input type="radio" name="tranca_seguridad" value="Si" checked>
                        No<input type="radio" name="tranca_seguridad" value="No">';
                }else if($registro['tranca_seguridad'] == 'No'){
                    echo 'Si<input type="radio" name="tranca_seguridad" value="Si">
                        No<input type="radio" name="tranca_seguridad" value="No" checked>';
                }
                ?>

                <div class="campo">Marca</div>
                <?php
                echo '<input type="text" name="marca" value="'. $registro['marca'] .'">'
                ?>

                <div class="campo">Numero de serie de soporte</div>
                <?php
                echo '<input type="text" name="numero_serie_soporte" value="'. $registro['numero_serie_soporte'] .'">'
                ?>

                <div class="campo">Fecha de grabacion</div>
                <?php
                echo '<input type="text" name="fecha_grabacion" value="'. $registro['fecha_grabacion'] .'">'
                ?> <!--ej: value="2018-06-12T19:30" -->

                <div class="campo">Generacion</div>
                <?php
                echo '<input type="text" name="generacion" value="'. $registro['generacion'] .'">'
                ?>

                <div class="campo">Duracion de la grabacion</div>
                <?php
                echo '<input type="text" name="duracion_grabacion" value="'. $registro['duracion_de_la_grabacion'] .'">'
                ?>

                <div class="campo">Duracion del soporte</div>
                <?php
                echo '<input type="text" name="duracion_soporte" value="'. $registro['duracion_soporte'] .'">'
                ?>

                <div class="campo">Entrada descriptiva caja</div>
                <?php
                echo '<input type="text" name="entrada_descriptiva_caja" value="'. $registro['entrada_descriptiva_caja'] .'">'
                ?>

                <div class="campo">Entrada descriptiva soporte </div>
                <?php
                echo '<input type="text" name="entrada_desriptiva_soporte" value="'. $registro['entrada_desriptiva_soporte'] .'">'
                ?>

                <div class="campo">Entrada descriptiva documentacion secundaria</div>
                <?php
                echo '<input type="text" name="entrada_descriptiva_documentacion_secundaria" value="'. $registro['entrada_descriptiva_documentacion_secundaria'] .'">'
                ?>

                <div class="campo">Deterioro</div>
                <?php
                echo '<input type="text" name="deterioro" value="'. $registro['deterioro'] .'">'
                ?>

                <div class="campo">Estado de conservacion</div>
                <?php
                echo '<input type="text" name="estado_conservacion" value="'. $registro['estado_conservacion'] .'">'
                ?>

                <div class="campo">Restauraciones</div>
                <?php
                echo '<input type="text" name="restauraciones" value="'. $registro['restauraciones'] .'">'
                ?>
            </div>
            <div class="Submit-button">
                <input type="Submit" name="editar2" value="Editar" class="button">
            </div>
            <?php
        if (isset($_POST['editar2'])){
            $numero_existente = $_POST['numero_existente'];
            $ubicacion_original = $_POST['ubicacion_original'];
            $soporte = $_POST['soporte'];
            $formato = $_POST['formato'];
            $velocidad_grabacion = $_POST['velocidad_grabacion'];
            $tranca_seguridad = $_POST['tranca_seguridad'];
            $marca = $_POST['marca'];
            $numero_serie_soporte =$_POST['numero_serie_soporte'];
            $fecha_grabacion = $_POST['fecha_grabacion'];
            $generacion = $_POST['generacion'];
            $duracion_de_la_grabacion = $_POST['duracion_grabacion'];
            $duracion_soporte = $_POST['duracion_soporte'];
            $entrada_descriptiva_caja = $_POST['entrada_descriptiva_caja'];
            $entrada_desriptiva_soporte = $_POST['entrada_desriptiva_soporte'];
            $entrada_descriptiva_documentacion_secundaria = $_POST['entrada_descriptiva_documentacion_secundaria'];
            $deterioro = $_POST['deterioro'];
            $restauraciones = $_POST['restauraciones'];
            $estado_conservacion = $_POST['estado_conservacion'];

            $sql2 = "UPDATE archivos SET
            numero_existente = '$numero_existente',
            ubicacion_original = '$ubicacion_original',
            soporte = '$soporte',
            formato = '$formato',
            velocidad_grabacion = '$velocidad_grabacion',
            tranca_seguridad = '$tranca_seguridad',
            marca = '$marca',
            numero_serie_soporte = '$numero_serie_soporte',
            fecha_grabacion = '$fecha_grabacion',
            generacion = '$generacion',
            duracion_de_la_grabacion = '$duracion_de_la_grabacion',
            duracion_soporte = '$duracion_soporte',
            entrada_descriptiva_caja = '$entrada_descriptiva_caja',
            entrada_desriptiva_soporte = '$entrada_desriptiva_soporte',
            entrada_descriptiva_documentacion_secundaria = '$entrada_descriptiva_documentacion_secundaria',
            deterioro = '$deterioro',
            estado_conservacion = '$estado_conservacion',
            restauraciones = '$restauraciones'
            WHERE codigo_referencia = '$codigo_referencia'";

            $buscar_reg=mysqli_query($conexion, $sql2);
            header("Refresh:0");
        }
        ?>
        </form>
        <a href="editar.php">¿Volver al inicio?</a>
    </div>
</body>
</html>

<!--

if (isset($_POST ['editar'])){
                if(!empty($_POST['codigo_referencia'])){
                    $codigo_referencia = $_POST['codigo_referencia'];
                    $numero_existente = isset($_POST['numero_existente']) ? $_POST['numero_existente'] : 'Sin Informacion';
                    $ubicacion_original = isset($_POST['ubicacion_original']) ? $_POST['ubicacion_original'] : 'Sin Informacion';
                    $soporte = isset($_POST['soporte']) ? $_POST['soporte'] : 'soporte';
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

                    $sql2 = "UPDATE archivos SET
                        numero_existente = '$numero_existente',
                        ubicacion_original = '$ubicacion_original',
                        soporte = '$soporte',
                        formato = '$formato',
                        velocidad_grabacion = '$velocidad_grabacion',
                        tranca_seguridad = '$tranca_seguridad',
                        marca = '$marca',
                        numero_serie_soporte = '$numero_serie_soporte',
                        fecha_grabacion = '$fecha_grabacion',
                        generacion = '$generacion',
                        duracion_de_la_grabacion = '$duracion_de_la_grabacion',
                        duracion_soporte = '$duracion_soporte',
                        entrada_descriptiva_caja = '$entrada_descriptiva_caja',
                        entrada_desriptiva_soporte = '$entrada_desriptiva_soporte',
                        entrada_descriptiva_documentacion_secundaria = '$entrada_descriptiva_documentacion_secundaria',
                        deterioro = '$deterioro',
                        estado_conservacion = '$estado_conservacion',
                        restauraciones = '$restauraciones'
                        WHERE codigo_referencia = '$codigo_referencia'";

                $buscar_reg=mysqli_query($conexion, $sql2);
                }else{ echo '<script language="javascript">alert("Error, el campo codigo_referencia es obligatorio.");</script>'; }
            }

 -->