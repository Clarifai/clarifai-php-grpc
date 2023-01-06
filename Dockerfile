FROM php:7.3

RUN  apt-get update \
    && apt-get install -y --no-install-recommends wget git zlib1g-dev libzip-dev \
    && rm -rf /var/lib/apt/lists/*

RUN curl --silent --show-error https://getcomposer.org/installer | \
    php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install bcmath zip
RUN pecl install xdebug-3.1.0
RUN docker-php-ext-enable xdebug

RUN pecl install grpc
RUN docker-php-ext-enable grpc

# Copy the composer.json file and do `composer install` before copying all the other files, to avoid
# reinstall on every code change.
COPY ./composer.json /usr/src/clarifai/composer.json
RUN cd /usr/src/clarifai/ \
    && composer install

COPY . /usr/src/clarifai/

WORKDIR /usr/src/clarifai/

CMD ["composer", "test"]
