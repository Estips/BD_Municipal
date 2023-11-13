<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-index.css">
    <link href='https://fonts.googleapis.com/css?family=Barlow Semi Condensed' rel='stylesheet'>
    <title>Archivo audiovisual</title>
</head>
<body>
    <header>
        <a href="https://www.mda.gob.ar" style="z-index: 1;"><img src="css/image_1.png" width="100" height="80" style="z-index: 1;"></a>
        <h1 style="color: white; text-align: center; z-index: 0;">ARCHIVO AUDIOVISUAL DE LA MUNICIPALIDAD DE AVELLANEDA</h1>
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 16 16"><g fill="#fff0"><path d="M6 3a3 3 0 1 1-6 0a3 3 0 0 1 6 0z"/><path d="M9 6a3 3 0 1 1 0-6a3 3 0 0 1 0 6z"/><path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z"/></g></svg>
    </header>
    <?php 
    include("conexion.php");
    if(!isset($_POST['codigo_referencia'])){$_POST["codigo_referencia"] = '';}
    if(!isset($_POST['BuscarSoporte'])){$_POST["BuscarSoporte"] = '';}
    if(!isset($_POST['BuscarFormato'])){$_POST["BuscarFormato"] = '';}
    if(!isset($_POST['BuscarMarca'])){$_POST["BuscarMarca"] = '';}
    if(!isset($_POST['Fecha-grabacion'])){$_POST['Fecha_grabacion'] = '';}
    if(!isset($_POST['BuscarGeneracion'])){$_POST["BuscarGeneracion"] = '';}

    $consulta = "SELECT * FROM archivos";

    if (isset($_POST['submit'])) {
        // Filtro
        $consulta = "SELECT * FROM archivos WHERE 1 = 1";
        $codigo_referencia = $_POST["CodigoReferencia"];
        $Fecha_grabacion = $_POST["FechaGrabacion"];

        if ($codigo_referencia != '') {
            $consulta .= " AND codigo_referencia = '" . $codigo_referencia . "'";
        }

        if ($_POST["BuscarSoporte"] != '') {
            $consulta .= " AND soporte = '" . $_POST["BuscarSoporte"] . "'";
        }

        if ($_POST["BuscarFormato"] != '') {
            $consulta .= " AND formato = '" . $_POST["BuscarFormato"] . "'";
        }

        if ($_POST["BuscarMarca"] != '') {
            $consulta .= " AND marca = '" . $_POST["BuscarMarca"] . "'";
        }

        if ($Fecha_grabacion  != '') {
            $consulta .= " AND fecha_grabacion = '" . $Fecha_grabacion  . "'";
        }

        if ($_POST['BuscarGeneracion'] != '') {
            $consulta .= " AND generacion = '" . $_POST['BuscarGeneracion'] . "'";
        }
    }
    ?>
    <section class="Datos">
        <aside class="filtro">
            <form class="Ingreso" method="post">
                <label style="padding-bottom: 20px; font-size: larger">Filtrar datos</label>
                Código de referencia:
                <input type="text" id="CodigoReferencia" name="CodigoReferencia" value="<?php $codigo_referencia ?>" class="form">
                Soporte
                <select name="BuscarSoporte" id="BuscarSoporte" class="form">
                    <option value="">Todos</option>
                    <option value="magnetico">Magnetico</option>
                    <option value="magnetico/digital">Magnetico/Digital</option>
                    <option value="digital">Digital</option>
                    <option value="otro">Otro</option>
                </select>
                Formato
                <select name="BuscarFormato" id="BuscarFormato" class="form">
                    <option value="">Todos</option>
                    <option value="cassette">Cassette</option>
                    <option value="dat">DAT</option>
                    <option value="cinta-1/4">Cinta 1/4</option>
                    <option value="vhs">VHS</option>
                    <option value="super8">Super8</option>
                    <option value="otro">Otro</option>
                </select>
                Marca
                <select name="BuscarMarca" id="BuscarMarca" class="form">
                    <option value="">Todos</option>
                    <option value="sony">Sony</option>
                    <option value="otros">Otros</option>
                </select>
                Fecha de grabación
                <input type="datetime-local" name="FechaGrabacion" id="FechaGrabacion" value="<?php $Fecha_grabacion ?>" class="form">
                Generación
                <select name="BuscarGeneracion" id="BuscarGeneracion" class="form">
                    <option value="">Todos</option>
                    <option value="master">Master</option>
                    <option value="submaster">Submaster</option>
                    <option value="copia">Copia</option>
                    <option value="sin-datos">Sin datos</option>
                    <option value="otro">Otro</option>
                </select>  
                <input type="submit" name="submit" value="Buscar" class="buscar">
            </form>
        </aside>
        <aside class="background-shadow">
            <h1>Todos los archivos encontrados</h1><br>
            <?php
            $result = mysqli_query($conexion, $consulta);

            if (!$result) {
                echo "Error: " . mysqli_error($conexion);
            }else {
                while ($registro = mysqli_fetch_assoc($result)) {
                echo "<p><b>Código de referencia</b>";
                echo $registro['codigo_referencia'] . "<br>";
                echo "<b>Número existente</b>";
                echo $registro['numero_existente'] . "<br>";
                echo "<b>Ubicación original</b>";
                echo $registro['ubicacion_original'] . "<br>";
                echo "<b>Soporte</b>";
                echo $registro['soporte'] . "<br>";
                echo "<b>Formato</b>";
                echo $registro['formato'] . "<br>";
                echo "<b>Velocidad de grabación</b>";
                echo $registro['velocidad_grabacion'] . "<br>";
                echo "<b>Tranca de seguridad</b>";
                echo $registro['tranca_seguridad'] . "<br>";
                echo "<b>Marca</b>";
                echo $registro['marca'] . "<br>";
                echo "<b>Número de serie del soporte</b>";
                echo $registro['numero_serie_soporte'] . "<br>";
                echo "<b>Fecha de grabación</b>";
                echo $registro['fecha_grabacion'] . "<br>";
                echo "<b>Generación</b>";
                echo $registro['generacion'] . "<br>";
                echo "<b>Duración de la grabación</b>";
                echo $registro['duracion_de_la_grabacion'] . "<br>";
                echo "<b>Duración del soporte</b>";
                echo $registro['duracion_soporte'] . "<br>";
                echo "<b>Entrada descriptiva de la caja</b>";
                echo $registro['entrada_descriptiva_caja'] . "<br>";
                echo "<b>Entrada descriptiva del soporte</b>";
                echo $registro['entrada_desriptiva_soporte'] . "<br>";
                echo "<b>Entrada descriptiva de documentación secundaria</b>";
                echo $registro['entrada_descriptiva_documentacion_secundaria'] . "<br>";
                echo "<b>Deterioro</b>";
                echo $registro['deterioro'] . "<br>";
                echo "<b>Restauraciones</b>";
                echo $registro['estado_conservacion'] . "<br>";
                echo "<b>Estado de conservación</b>";
                echo $registro['restauraciones'] . "<br>";
                echo "<br>";
            }
        }
        ?>
        </aside>
    </section>
    <article>
        <section class="Como-funciona">
            <p>¿Cómo funciona?</p>
        </section>
        <section class="Guia">
            <div class="background-black-blur">
                <p style="width: 80%;
                color: white;
                font-size: 54px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore unde, ducimus itaque alias blanditiis exercitationem architecto minima repellat reprehenderit eum! Maiores iste quo laboriosam amet. Ipsa nihil inventore facere minus.</p>
            </div>
        </section>
    </article>
    <footer>
        <p style="width: 80%;
        color: white;
        font-size: 24px;">Proyecto desarrollado por los alumnos de la técnica N°7 "José Hernández" - Martin Calvo y Martina Luaces.</p>
    </footer>
</body>
</html>