FROM webdevops/php-nginx:8.4

RUN apt-get update && \
    apt-get install -y curl gnupg && \
    curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

USER root

RUN mkdir -p /app/storage/logs /app/bootstrap/cache && \
    chown -R application:application /app/storage /app/bootstrap/cache

WORKDIR /app

# Copia os arquivos do Laravel para dentro do container
COPY ../src/ /app/

USER application

RUN composer --version && \
    composer clear-cache && \
    COMPOSER_DISABLE_XDEBUG_WARN=1 \
    COMPOSER_MEMORY_LIMIT=-1 \
    composer install \
    --no-dev --prefer-dist --optimize-autoloader \
    -vvv
