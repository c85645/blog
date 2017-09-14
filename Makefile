test :
		./vendor/squizlabs/php_codesniffer/bin/phpcs --standard=PSR2 app

init :
		composer install
		php artisan migrate
		php artisan db:seed

serve :
		php artisan serve --port=8080
