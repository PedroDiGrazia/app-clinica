
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
```
Caso não haja arquivo .env copie o .env.example
- No arquivo .env substitua:
```plaintext
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=2ca42311cbb634
MAIL_PASSWORD=ea9bc3f3a17679
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="no-reply@mailtrap.club"
MAIL_FROM_NAME="${APP_NAME}"
````

Suba os containers do projeto ->

```sh
docker compose up -d
```

Acessar o container
```sh
docker compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

Acesse o projeto
[http://localhost:8080](http://localhost:8080)

Acesse o phpmyadmin
[http://localhost:8081](http://localhost:8081)

poweshell ->
 ```sh
 npm install --save-dev electron
 ```
```sh
npm start
```

 git bash -> 
 ```sh
 php artisan migrate
 ```
```sh
php artisan serve
```
resources -> views -> DELETE:**"welcome.blade.php"**
# envio-clinica
