./vendor/bin/sail up
sudo chmod -R 777 storage/
./vendor/bin/sail artisan migrate
./vendor/bin/sail composer require laravel/breeze --dev
./vendor/bin/sail artisan breeze:install
./vendor/bin/sail artisan optimize
./vendor/bin/sail composer require mozex/anthropic-laravel
./vendor/bin/sail artisan anthropic:install

- Adicionar o key do Anthropic na diretiva ANTHROPIC_API_KEY do .env
