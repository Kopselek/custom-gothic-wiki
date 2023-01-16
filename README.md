#in app dir
composer install --ignore-platform-reqs
composer dump-autoload

#in root dir
docker compose up --build -d