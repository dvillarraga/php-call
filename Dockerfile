FROM php:7.2-apache

COPY src/ /var/www/html/

EXPOSE 80

CMD ["apache2-foreground"]