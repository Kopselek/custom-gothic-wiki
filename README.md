#in app dir
composer install --ignore-platform-reqs

composer dump-autoload

#install sql in sql/install.sql

#in root dir
docker compose up --build -d
