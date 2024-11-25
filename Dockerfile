# Usamos una imagen oficial de PHP con soporte para PHP-FPM
FROM php:8.1-fpm

# Instalamos dependencias necesarias (conexión a MySQL, imágenes, etc.)
RUN apt-get update && \
    apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev \
    libzip-dev unzip git libxml2-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql zip

# Instalar Composer (gestor de dependencias de PHP)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copiar los archivos del proyecto al contenedor
COPY . /var/www/html/

# Establecer los permisos adecuados para los archivos copiados
RUN chown -R www-data:www-data /var/www/html/

# Exponer el puerto 9000 para PHP-FPM
EXPOSE 9000

# Comando para iniciar PHP-FPM
CMD ["php-fpm"]
