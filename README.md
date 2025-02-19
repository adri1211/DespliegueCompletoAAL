Creamos el archivo .env en la raiz del proyecto con el siguiente contenido:
MYSQL_ROOT_PASSWORD=root
MYSQL_DATABASE=AAL_BD
MYSQL_USER=alumnoDAW
MYSQL_PASSWORD=passAAL

PMA_USER=${MYSQL_USER}
PMA_PASSWORD=${MYSQL_PASSWORD}

Aqui ponemos las contraseñas de la base de datos.
Con el .env creado en el compose no necesitamos tantas variables de entorno, solo ponemos env_file y el nombre del archivo (.env).
