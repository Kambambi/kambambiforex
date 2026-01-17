FROM php:8.3-cli

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Definir diretório de trabalho
WORKDIR /var/www

# Copiar arquivos do projeto
COPY . .

# Permissões
RUN chmod -R 775 storage bootstrap/cache

# Instalar dependências PHP
RUN composer install --no-dev --optimize-autoloader

# Gerar key (Render permite isso no build)
RUN php artisan key:generate || true

# Expor porta
EXPOSE 8080

# Start Laravel
CMD php -S 0.0.0.0:8080 -t public
