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

    <section>
    <div class="Busqueda">
        Codigo de referencia:
        <input type="text" class="form-control" id="buscar" name="buscar" value="<?php echo $_POST["codigo_referencia"]?>"><br>
        Numero existente
        <input type="text" value="<?php echo $_POST["Numero-existente"]?>"><br>
        Ubicacion original
        <input type="text" value="<?php echo $_POST["Numero-existente"]?>"><br>
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
        Velocidad de grabacion
        <input type="text" value="<?php echo $_POST["Numero-existente"]?>"><br>
        ¿Tranca de seguridad?
        <select>
            <option value="Si">Si</option>
            <option value="No">No</option>
        </select>
        Marca
        <select name="BuscarMarca" id="BuscarMarca">
            <?php if($_POST["BuscarMarca"] != ''){ ?>
            <option value="<?php echo $_POST["BuscarMarca"]?>"><?php echo $_POST["BuscarMarca"]; ?></option>
            <?php } ?>
            <option value="">Todos</option>
            <option value="sony">Sony</option>
            <option value="otros">Otros</option>
        </select><br>
        Numero de serie del soporte 
        <input type="text" value="<?php echo $_POST["Numero-existente"]?>"><br>
        Fecha de grabacion
        <input type="datetime-local" value="<?php echo $_POST["Numero-existente"]?>"><br>
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
        Duracion de la grabacion
        <input type="text" value="<?php echo $_POST["Numero-existente"]?>"><br>
        Duracion del soporte
        <!-- (Capacidad máxima del cassette en minutos, Ej 60, 90, 120) -->
        <input type="text" value="<?php echo $_POST["Numero-existente"]?>"><br>
        Entrada descriptiva de la caja
        <input type="text" value="<?php echo $_POST["Numero-existente"]?>"><br>
        Entrada descriptiva del soporte 
        <input type="text" value="<?php echo $_POST["Numero-existente"]?>"><br>
        Entrada descriptiva de documentacion secundaria 
        <input type="text" value="<?php echo $_POST["Numero-existente"]?>"><br>
        Deterioro
        <select name="BuscarDeterioro" id="BuscarDeterioro">
            <?php if($_POST["BuscarDeterioro"] != ''){ ?>
            <option value="<?php echo $_POST["BuscarDeterioro"]?>"><?php echo $_POST["BuscarDeterioro"]; ?></option>
            <?php } ?>
            <option value="">Todos</option>
            <option value="suciedad">Suciedad</option>
            <option value="hongos">Hongos</option>
            <option value="deterioro-de-aglutinante">Deterioro de aglutinante (binder)</option>
            <option value="roturas-en-la-cinta">Roturas en la cinta</option>
            <option value="sin-caja">Sin caja</option>
            <option value="dano-en-el-envase"> Daños en el envase</option>
            <option value="danos-en-el-cassette">Daños en el cassette</option>
            <option value="sin-deterioro">Sin deterioro</option>
            <option value="otro">Otro</option>
        </select><br>
        Estado de conservacion
        <select name="BuscarConservacion" id="BuscarConservacion">
            <?php if($_POST["BuscarConservacion"] != ''){ ?>
            <option value="<?php echo $_POST["BuscarConservacion"]?>"><?php echo $_POST["BuscarConservacion"]; ?></option>
            <?php } ?>
            <option value="">Todos</option>
            <option value="bueno">Bueno</option>
            <option value="regular">Regular</option>
            <option value="malo">Malo</option>
        </select><br>
        Restauraciones
        <select name="BuscarRestauraciones" id="BuscarRestauraciones">
            <?php if($_POST["BuscarRestauraciones"] != ''){ ?>
            <option value="<?php echo $_POST["BuscarRestauraciones"]?>"><?php echo $_POST["BuscarRestauraciones"]; ?></option>
            <?php } ?>
            <option value="">Todos</option>
            <option value="limpieza-fisica">Limpieza fisica</option>
            <option value="remocion-de-hongos">Remoción de hongos</option>
            <option value="reparacion-de-cinta">Reparacion de cinta</option>
            <option value="cambio-de-contenedor">Cambio de contenedor</option>
            <option value="limpieza-de-contenedor">Limpieza de contenedor</option>
            <option value="agregado-de-cola">Agregado de cola</option>
            <option value="otro">Otro</option>
        </select>
    </div>

    <div class="Muestreo">
        <?php
        include("conexion.php");
        $sql3="SELECT * FROM archivos";
        $consulta= mysqli_query($conexion,$sql3);
        //Muestreo de tabla
        while($registro = mysqli_fetch_assoc($consulta)){
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
        ?>
    </div>
    </section>

    <footer><b>Proyecto municipal - estudiantes: Martin Calvo y Martina Luaces</footer>
</body>
</html>

<!--

.Terminar diseño

.Buscar alternativa la muestreo de datos (diseño)

.Obtencion de datos:
 - Si no se pide un numero en especifico mostrar todos los archivos de la bd
 - Agregar buscador para filtrar la busqueda de los archivos.


(Asegurar que los "values" de cada option esten en camelcase lowercase cuando sean ingresados a la bd, forzarlos a ser camelcase lowercase a la hora
de ingresar los valores)

-->