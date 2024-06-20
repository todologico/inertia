FROM ubuntu:22.04

ARG DEBIAN_FRONTEND=noninteractive

# user para correr artisan dentro del contenedor
ARG USER_NAME=appuser
ARG USER_UID=1000
RUN useradd -u $USER_UID -ms /bin/bash $USER_NAME && \
    usermod -aG 1000 $USER_NAME && \
    usermod -aG www-data $USER_NAME

RUN apt update && apt install -y \
    software-properties-common \
    unzip \
    curl \
    iproute2 \
    iputils-ping \
    nano \
    supervisor \
    htop \
    git && \
    add-apt-repository -y ppa:ondrej/php && \
    apt update && apt install -y \
    php8.2-cli \
    php8.2-fpm \
    php8.2-common \
    php8.2-mysql \
    php8.2-pgsql \
    php8.2-zip \
    php8.2-gd \
    php8.2-mbstring \
    php8.2-curl \
    php8.2-ldap \
    php8.2-xml \
    php8.2-bcmath && \
    mkdir -p /var/run/php && \
    apt install -y nginx && \
    curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt update && apt install -y nodejs && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Configuración de nginx y PHP-FPM
COPY www.conf /etc/php/8.2/fpm/pool.d/
COPY nginx.conf /etc/nginx/
COPY app.conf /etc/nginx/conf.d/

# Copiar scripts y configuraciones adicionales
COPY docker-entrypoint.sh /usr/local/bin/
COPY supervisord.conf /etc/

# Establecer permisos y entradas
RUN chmod -R 755 /usr/local/bin/docker-entrypoint.sh

# Definir volumen para la aplicación
VOLUME /var/www/app

ENTRYPOINT ["docker-entrypoint.sh"]
