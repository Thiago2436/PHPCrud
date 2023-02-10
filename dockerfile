# Use a imagem base do PHP
FROM php:7.4-apache

# Copie o código do seu site PHP para o container
COPY . /var/www/html/

# Configure o Apache para usar o diretório de código do seu site
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf \
    && a2enmod rewrite \
    && a2enmod headers \
    && sed -i -e "s/html//" /etc/apache2/sites-available/000-default.conf \
    && echo "DocumentRoot /var/www/html" >> /etc/apache2/sites-available/000-default.conf \
    && echo "Options -Indexes" >> /etc/apache2/conf-available/docker-php.conf


