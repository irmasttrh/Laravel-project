FROM php:8.2-fpm

# Set default values for user and UID
ARG user=app-user
ARG uid=1000

# Update and install dependencies
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    curl \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libmagickwand-dev \
    supervisor \
    cron \
    && apt-get install -y mariadb-client \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo_mysql mbstring exif pcntl bcmath zip \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Set the timezone to Makassar (Asia/Makassar)
RUN ln -snf /usr/share/zoneinfo/Asia/Makassar /etc/localtime && echo "Asia/Makassar" > /etc/timezone

# Copy Composer from the composer image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Add a new user
RUN useradd -G www-data,root -u $uid -d /home/$user $user \
    && mkdir -p /home/$user/.composer \
    && chown -R $user:$user /home/$user

# Set the working directory and permissions
WORKDIR /var/www/html
RUN chown -R $user:www-data /var/www/html

# Copy PHP configuration file
COPY ./php/php.ini /usr/local/etc/php/php.ini

# Set timezone in PHP configuration
RUN echo "date.timezone=Asia/Makassar" >> /usr/local/etc/php/php.ini

USER $user