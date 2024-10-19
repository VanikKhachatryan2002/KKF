FROM richarvey/nginx-php-fpm:3.1.6

RUN useradd -ms /bin/bash appuser


WORKDIR /var/www/html
COPY . .

RUN chown -R appuser:appuser /var/www/html


# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

COPY supervisord.conf /etc/supervisord.conf

USER appuser


CMD ["/start.sh"]
