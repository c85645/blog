test :
		./vendor/squizlabs/php_codesniffer/bin/phpcs --standard=PSR2 app

init :
		composer install

serve :
		php artisan serve --port=8080
