
# Laravel Template

### Passo a passo
Clone Repositório criado a partir do template, entre na pasta e execute os comandos abaixo:

Crie o Arquivo .env
```sh
cp .env.example .env
```

Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=Laravel
APP_URL=http://localhost:8080

DB_PASSWORD=root


MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=9d6bfe584d7550
MAIL_PASSWORD=ea03ffe3c91657
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="be5026967c-1e6463@inbox.mailtrap.io"
MAIL_FROM_NAME="${APP_NAME}"
```

Suba os containers do projeto
```sh
docker compose up -d
```

Acessar o container
```sh
docker compose exec app bash
```

Instalar as dependências do projeto dentro do container
```sh
composer install
npm install
php artisan key:generate
php artisan migrate
npm run build
```

Fora do container (exit)
```sh
npm start
```


Acesse o projeto
[http://localhost:8080](http://localhost:8080)

Acesse o phpmyadmin
[http://localhost:8081](http://localhost:8081)
