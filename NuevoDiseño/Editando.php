<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-agregando.css">
    <link href='https://fonts.googleapis.com/css?family=Barlow Semi Condensed' rel='stylesheet'>
</head>
<body>
    <header>
        <a href="https://www.mda.gob.ar" style="z-index: 1;"><img src="css/image_1.png" width="100" height="80" style="z-index: 1;"></a>
        <h1 style="color: white; text-align: center; z-index: 0;">ARCHIVO AUDIOVISUAL DE LA MUNICIPALIDAD DE AVELLANEDA</h1>
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 16 16"><g fill="#fff0"><path d="M6 3a3 3 0 1 1-6 0a3 3 0 0 1 6 0z"/><path d="M9 6a3 3 0 1 1 0-6a3 3 0 0 1 0 6z"/><path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z"/></g></svg>
    </header>
    <section>
        <?php
            include("conexion.php");
            $codigo_referencia = $_GET["codigo_referencia"];
            $sql5 = "SELECT * FROM archivos WHERE codigo_referencia = '" . $codigo_referencia . "'";
            $consulta= mysqli_query($conexion,$sql5);
            $registro = mysqli_fetch_assoc($consulta);
        ?>
        <aside>
        <div class="Background-blur">
            <div class="Formulario">
                <h1>Archivos Historicos</h1>
                <form action="" method= "post" enctype="multipart/form-data" class="datos"> 
                    <div class="campo">codigo de referencia</div>
                    <label style ="border: 1px solid #f9f9f900; padding: 2vh;"> <?php echo $codigo_referencia; ?> </label>

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
                    <input type="Submit" name="editar2" value="Editar" class="button" style="background-color: #0F549F">
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
        </aside>
    </section>
    <footer>
        <p style="width: 80%;
        color: white;
        font-size: 24px;">Proyecto desarrollado por los alumnos de la técnica N°7 "José Hernández" - Martin Calvo y Martina Luaces.</p>
    </footer>
</body>
</html>