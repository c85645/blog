test :
		./vendor/squizlabs/php_codesniffer/bin/phpcs --standard=PSR2 app

init :
		cp .env.example .env
		composer install
		php artisan key:generate
		make initdb

serve :
		php artisan serve --port=8080

initdb :
		php artisan migrate:refresh --seed
