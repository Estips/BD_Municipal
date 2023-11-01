<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_2.css">
    <title>Municipalidad</title>
</head>
<body>
    <header><a href="https://www.mda.gob.ar"><img src="img/Logo_muni.png" width="160" height="80"><b>Municipalidad de avellaneda</b></a></header>

    <?php 
    include("conexion.php");
    if(!isset($_POST["codigo_referencia"])){$_POST["codigo_referencia"] = '';}
    if(!isset($_POST['BuscarSoporte'])){$_POST["BuscarSoporte"] = '';}
    if(!isset($_POST['BuscarFormato'])){$_POST["BuscarFormato"] = '';}
    if(!isset($_POST['BuscarMarca'])){$_POST["BuscarMarca"] = '';}
    if(!isset($_POST['Fecha-grabacion'])){$_POST['$Fecha_grabacion'] = '';}
    if(!isset($_POST['$BuscarGeneracion'])){$_POST['$BuscarGeneracion'] = '';}

    $consulta = "SELECT * FROM archivos";

    if (isset($_POST['submit'])) {
        // Filtro
        $consulta = "SELECT * FROM archivos WHERE 1 = 1";

        if ($_POST["codigo_referencia"] != '') {
            $consulta .= " AND codigo_referencia = '" . $_POST["codigo_referencia"] . "'";
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

        if ($_POST['$Fecha_grabacion'] != '') {
            $consulta .= " AND fecha_grabacion = '" . $_POST['$Fecha_grabacion'] . "'";
        }

        if ($_POST['$BuscarGeneracion'] != '') {
            $consulta .= " AND generacion = '" . $_POST['$BuscarGeneracion'] . "'";
        }
    }
    ?>
    <section>
    <form method="POST">
    <div class="Busqueda">
        Codigo de referencia:
        <input type="text" class="form-control" id="buscar" name="buscar" value="<?php echo $_POST["codigo_referencia"]?>"><br>
        Soporte
        <select name="BuscarSoporte" id="BuscarSoporte">
            <?php if($_POST["BuscarSoporte"] != ''){ ?>
            <option value="<?php echo $_POST["BuscarSoporte"]?>"><?php echo $_POST["BuscarSoporte"]; ?></option>
            <?php } ?>
            <option value="">Todos</option>
            <option value="magnetico">Magnetico</option>
            <option value="magnetico/digital">Magnetico/Digital</option>
            <option value="digital">Digital</option>
            <option value="otro">Otro</option>
        </select><br>
        Formato
        <select name="BuscarFormato" id="BuscarFormato">
            <?php if($_POST["BuscarFormato"] != ''){ ?>
            <option value="<?php echo $_POST["BuscarFormato"]?>"><?php echo $_POST["BuscarFormato"]; ?></option>
            <?php } ?>
            <option value="">Todos</option>
            <option value="cassette">Cassette</option>
            <option value="dat">DAT</option>
            <option value="cinta-1/4">Cinta 1/4</option>
            <option value="vhs">VHS</option>
            <option value="super8">Super8</option>
            <option value="otro">Otro</option>
        </select><br>
        Marca
        <select name="BuscarMarca" id="BuscarMarca">
            <?php if($_POST["BuscarMarca"] != ''){ ?>
            <option value="<?php echo $_POST["BuscarMarca"]?>"><?php echo $_POST["BuscarMarca"]; ?></option>
            <?php } ?>
            <option value="">Todos</option>
            <option value="sony">Sony</option>
            <option value="otros">Otros</option>
        </select><br>
        Fecha de grabacion
        <input type="datetime-local" value="<?php echo $_POST['$Fecha_grabacion']?>"><br>
        Generacion
        <select name="BuscarGeneracion" id="BuscarGeneracion">
            <?php if($_POST["BuscarGeneracion"] != ''){ ?>
            <option value="<?php echo $_POST["BuscarGeneracion"]?>"><?php echo $_POST["BuscarGeneracion"]; ?></option>
            <?php } ?>
            <option value="">Todos</option>
            <option value="master">Master</option>
            <option value="submaster">Submaster</option>
            <option value="copia">Copia</option>
            <option value="sin-datos">Sin datos</option>
            <option value="otro">Otro</option>
        </select><br>    
        <input type="submit" name="submit" value="Buscar">
        </div>
    </form>

    <div class="Muestreo">
        <?php
        $result = mysqli_query($conexion, $consulta);

        if (!$result) {
            echo "Error: " . mysqli_error($conexion);
        } else {
                while ($registro = mysqli_fetch_assoc($result)) {
                echo "<b>| <td>Codigo de referencia: " . $registro['codigo_referencia'] . "</td> | <br></b>";
                echo "<tr>";
                    echo "<td>| Numero existente: " . $registro['numero_existente'] . "</td> | <br>";
                    echo "<td>| Ubicacion del archivo: " . $registro['ubicacion_original'] . "</td> | <br>";
                    echo "<td>| Soporte: " . $registro['soporte'] . "</td> | <br>";
                    echo "<td>| Formato: " . $registro['formato'] . "</td> | <br>";
                    echo "<td>| Velocidad de grabacion: " . $registro['velocidad_grabacion'] . "</td> | <br>";
                    echo "<td>| ¿Tiene tranca de seguridad? " . $registro['tranca_seguridad'] . "</td> | <br>";
                    echo "<td>| Marca: " . $registro['marca'] . "</td> | <br>";
                    echo "<td>| Numero de serie del soporte: " . $registro['numero_serie_soporte'] . "</td> | <br>";
                    echo "<td>| Fecha de grabacion: " . $registro['fecha_grabacion'] . "</td> | <br>";
                    echo "<td>| Generacion: " . $registro['generacion'] . "</td> | <br>";
                    echo "<td>| Duracion de la grabacion: " . $registro['duracion_de_la_grabacion'] . "</td> | <br>";
                    echo "<td>| Duracion del soporte: " . $registro['duracion_soporte'] . "</td> | <br>";
                    echo "<td>| Entrada descriptiva de la caja: " . $registro['entrada_descriptiva_caja'] . "</td> | <br>";
                    echo "<td>| Entrada descriptiva del soporte: " . $registro['entrada_desriptiva_soporte'] . "</td> | <br>";
                    echo "<td>| Entrada descriptiva de documentacion secundaria: " . $registro['entrada_descriptiva_documentacion_secundaria'] . "</td> | <br>";
                    echo "<td>| Deterioro: " . $registro['deterioro'] . "</td> | <br>";
                    echo "<td>| Estado de conservacion: " . $registro['estado_conservacion'] . "</td> | <br>";
                    echo "<td>| Restauraciones hechas: " . $registro['restauraciones'] . "</td> | ";
                    echo "</tr><br>";
                echo "</tr><br><br>";
            }
        }
        ?>
    </div>
    </section>

    <footer><b>Proyecto municipal - estudiantes: Martin Calvo y Martina Luaces</footer>
</body>
</html>

<!--
26/10

.Terminar diseño

.Buscar alternativa la muestreo de datos (diseño)

.Obtencion de datos:
    - Si no se pide un numero en especifico mostrar todos los archivos de la bd
    - Agregar buscador para filtrar la busqueda de los archivos.

27/10

.Cambiar buscar fecha de grabacion por un desde-hasta?

-->
