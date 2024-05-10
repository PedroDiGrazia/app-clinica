# app-clinica

- **extension=zip, extension=pdo_sqlite, extension=fileinfo -> php.ini**
- **composer install** 
- **npm install --save-dev electron**
- **git bash -> php artisan migrate**

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
- **npm start**
- **php artisan serve**
- **resources -> views -> DELETE:"welcome.blade.php"**
