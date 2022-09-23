требования:
  - php
  - composer

run:
  - php -S localhost:8000 public/index.php
  - composer install

tests:
  - composer install
  - php ./vendor/bin/phpunit tests
