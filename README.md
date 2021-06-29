# Php-with-custom-framework

This is an experimental project to understand how frameworks works, using concepts from books (DDD in PHP and others), youtubers (codeholic,coding workshop etc) and other internet resources and open sources like utopia, laravel, symfony etc

# run project

- run 'composer install' && 'composer dump-autoload -o'
- setup appropriate value for db connection in core/BaseModel.php file
- create database named 'blog'
- run the given command to create posts table according to model definitions
  - `vendor/bin/doctrine orm:schema-tool:create`
- open terminal inside `public` folder & run 'php -S ip_addr:port'
- example : 'php -S 127.0.0.1:8081'
