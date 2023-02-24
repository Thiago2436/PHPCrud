# Use a imagem base do PHP
FROM php:7.4-apache

# Copie o código do seu site PHP para o container
COPY . /var/www/html/

# Configure o Apache para usar o diretório de código do seu site
RUN apt-get update && \
    apt-get install -y libpq-dev  && \
    docker-php-ext-install pdo pdo_mysql
   
RUN chown -R www-data:www-data /var/www/html 
RUN chmod -R 755 /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]

