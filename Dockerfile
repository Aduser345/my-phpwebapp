FROM php:8.2-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

RUN a2enmod rewrite

# Copy app code
COPY . /var/www/html/

# Set permissions (optional)
RUN chown -R www-data:www-data /var/www/html

# Expose port
EXPOSE 80

CMD ["apache2-foreground"]
