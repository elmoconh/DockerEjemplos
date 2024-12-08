# Usa la imagen oficial de PHP con Apache
FROM php:8.2-apache

# Instala extensiones necesarias para PHP y MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Copia el contenido de la aplicación a la carpeta raíz del servidor web
COPY . /var/www/html/

# Copia el script SQL a un directorio temporal
COPY ./sql/init.sql /docker-entrypoint-initdb.d/

# Cambia permisos de los archivos para evitar problemas de permisos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expone el puerto 80 para el servidor web
EXPOSE 80
