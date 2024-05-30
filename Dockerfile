# Use a imagem oficial do PHP com Apache
FROM php:8.0.30-apache

# Defina o diretório de trabalho
WORKDIR /var/www/html

# Instale extensões PHP necessárias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Instale o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copie os arquivos da aplicação Laravel para o container
COPY . /var/www/html

# Defina as permissões corretas para o diretório storage e bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Ative o mod_rewrite do Apache
RUN a2enmod rewrite

# Exponha a porta 80
EXPOSE 80

# Execute o comando para iniciar o servidor Apache
CMD ["apache2-foreground"]
