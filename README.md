# Archivos Historicos del Municipio - README

Este proyecto se centra en la gestión de archivos históricos municipales mediante una aplicación web PHP respaldada por una base de datos MySQL. Aquí se proporciona una visión general de los archivos y cómo utilizarlos.

## Archivos y Estructura

- `conexion.php`: Este archivo contiene la configuración de conexión a la base de datos MySQL. Asegúrate de actualizar las credenciales de acceso antes de utilizar la aplicación.

- `editar.php`: Es la interfaz principal de la aplicación web. Permite agregar, editar y eliminar registros de archivos históricos municipales. También muestra una lista de los archivos existentes.

- `archivos.sql`: Este archivo SQL contiene la estructura de la tabla `archivos` en la base de datos. Asegúrate de ejecutarlo en tu sistema de gestión de bases de datos MySQL para crear la tabla.

## Uso de la Aplicación

1. Asegúrate de configurar la conexión a la base de datos en el archivo `conexion.php` con las credenciales adecuadas.

2. Ejecuta el archivo `archivos.sql` en tu sistema de gestión de bases de datos para crear la tabla `archivos`.

3. Abre la aplicación web visitando `editar.php` en tu navegador.

4. **Agregar Registros:** Ingresa la información requerida en el formulario y presiona el botón "Agregar" para insertar un nuevo registro en la base de datos.

5. **Editar Registros:** Selecciona un registro existente en la lista y modifica los campos según sea necesario. Luego, presiona el botón "Editar" para guardar los cambios.

6. **Eliminar Registros:** Para eliminar un registro, selecciona el registro en la lista y presiona el botón "Eliminar" correspondiente.

7. La aplicación mostrará la lista actualizada de registros después de realizar las operaciones.

## Consideraciones

- La restricción de unicidad se ha configurado para el campo `codigo_referencia` en la base de datos, lo que impide que se ingresen registros duplicados con el mismo código de referencia.

- Asegúrate de que los campos requeridos estén completos antes de realizar una operación (agregar o editar) en la aplicación.

## Autor

Este proyecto fue desarrollado por Martin Calvo y Martina Luaces como una aplicación para la gestión de archivos históricos municipales.


