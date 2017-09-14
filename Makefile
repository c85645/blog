test :
		./vendor/squizlabs/php_codesniffer/bin/phpcs --standard=PSR2 app

init :
		cp .env.example .env
		composer install
		php artisan key:generate
		php artisan migrate
		php artisan db:seed

serve :
		php artisan serve --port=8080
