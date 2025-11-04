FROM php:8.2-fpm

# Instala dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nginx \
    supervisor \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define diretório de trabalho
WORKDIR /var/www
COPY . /var/www

# Copia arquivos de config
COPY ./docker/nginx.conf /etc/nginx/conf.d/default.conf
COPY ./docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Direitos de pasta storage e bootstrap
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# Instala dependências PHP
RUN composer install --optimize-autoloader --no-dev

# Expõe a porta 80
EXPOSE 80

# Comando de start com Supervisor (roda PHP-FPM, Nginx e queue se precisar)
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
