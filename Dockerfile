FROM php:8.2-apache

# Instalar dependências necessárias
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    git

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Ativar mod_rewrite (opcional mas útil)
RUN a2enmod rewrite

# Definir diretório de trabalho
WORKDIR /var/www/html