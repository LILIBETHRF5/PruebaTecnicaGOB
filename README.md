# CRUD de Usuarios con PHP y Bootstrap

## Descripción
Este proyecto es una aplicación web CRUD (Crear, Leer, Actualizar y Eliminar) para la gestión de usuarios. Está desarrollado con PHP, Bootstrap y MariaDB como practica para GOB

## Características
- Listado de usuarios con paginación.
- Creación, edición y eliminación de usuarios.
- Exportación de usuarios a CSV.
- Uso de Bootstrap para el diseño responsivo.

## Requisitos
- Servidor web con PHP 7.4 o superior.
- MariaDB o MySQL.
- Apache (opcional pero recomendado).

## Instalación
1. Clonar o descargar este repositorio en tu servidor.
2. Configurar la base de datos:
   - Crear una base de datos en MariaDB/MySQL.
   - Importar el archivo `database.sql` en la base de datos.
3. Configurar la conexión a la base de datos en `connection.php`:
   ```php
   $conn = new mysqli('localhost', 'usuario', 'contraseña', 'nombre_base_datos');
   ```
4. Asegurar que el servidor web tenga permisos de lectura y escritura en la carpeta del proyecto.

## Uso
1. Acceder a `index.php` desde el navegador.
2. Usar los botones de "Agregar Usuario", "Editar" y "Eliminar" para administrar usuarios.
3. Para exportar los usuarios a un archivo CSV, hacer clic en el botón "Exportar a CSV".

## Archivos Principales
- `index.php`: Página principal con la lista de usuarios.
- `connection.php`: Configuración de la base de datos.
- `edit_user.php`: Formulario para editar usuarios.
- `update.php`: Procesa la actualización de un usuario.
- `delete_user.php`: Elimina un usuario de la base de datos.
- `exportar.php`: Genera y descarga un archivo CSV con los usuarios.

## Autor
Desarrollado por Lilibeth

## Licencia
Ninguna xd

