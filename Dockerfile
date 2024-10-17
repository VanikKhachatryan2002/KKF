FROM richarvey/nginx-php-fpm:1.7.2

# Install PHP 8.2
RUN apt-get update && apt-get install -y software-properties-common \
    && add-apt-repository ppa:ondrej/php \
    && apt-get update \
    && apt-get install -y php8.2 php8.2-fpm php8.2-mbstring php8.2-xml php8.2-mysql \
    && apt-get purge -y php7.*  # Remove old PHP versions

# Copy your application
COPY . /var/www/html

# Set environment variables
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr
ENV COMPOSER_ALLOW_SUPERUSER 1

CMD ["/start.sh"]
