требования:
php, composer

run:
composer install
php ./public/index.php?first=000000&end=999999

tests:
composer install
php ./vendor/bin/phpunit tests