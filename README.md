./vendor/bin/sail up
sudo chmod -R 777 storage/
./vendor/bin/sail artisan migrate
./vendor/bin/sail composer require laravel/breeze --dev
./vendor/bin/sail artisan breeze:install
./vendor/bin/sail artisan optimize
./vendor/bin/sail composer require mozex/anthropic-laravel
./vendor/bin/sail artisan anthropic:install

- Adicionar a key do Anthropic na diretiva ANTHROPIC_API_KEY do .env


Usando a OpenAI

./vendor/bin/sail composer require openai-php/laravel
./vendor/bin/sail artisan openai:install

- Adicionar a key do OpenAI na diretiva OPENAI_API_KEY do .env
- Adicionar a organization ID do OpenAI na diretiva OPENAI_ORGANIZATION do .env


Para o CSS funcionar precisa rodar o comando abaixo:

./vendor/bin/sail npm run build
