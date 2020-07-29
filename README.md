# Clarifai PHP gRPC

## Development

1. Install PHP 7.4 and the [gRPC-required packages](https://grpc.io/docs/languages/php/quickstart/).
   Instructions for Ubuntu 20.04:

    ```
    sudo apt install php php-dev php-xml php-mbstring php-pear php-xdebug
    sudo pecl install grpc-1.30.0
    ```

2. Add `extension=grpc.so` to `/etc/php/7.4/cli/php.ini`

3. In the project directory, [install composer](https://getcomposer.org/download/).
