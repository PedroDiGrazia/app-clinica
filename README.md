
# App Clinica Mentalis

### Contexto
Bem-vindo ao Clinica Mentalis, um sistema desenvolvido para auxiliar uma clínica de psicologia a gerenciar suas operações e facilitar o acesso dos clientes aos serviços da clínica. Este sistema possui funcionalidades para clientes e profissionais da clínica (psicólogos e secretárias), permitindo a consulta e o acréscimo de informações dos clientes com as devidas permissões de acesso.

### Extensões
Este repositório contém um sistema Clínico desenvolvido utilizando:

ElectronJS ElectronJS : Framework para criar aplicativos de desktop multiplataforma usando tecnologias web (HTML, CSS e JavaScript).
Docker Docker : Plataforma para desenvolver, enviar e executar aplicativos em contêineres.
Laravel Laravel : Framework PHP para desenvolvimento de aplicativos web robustos e escaláveis.
PHP PHP : Linguagem de programação amplamente usada para desenvolvimento web.
MySQL MySQL : Sistema de gerenciamento de banco de dados relacional.
VueJS VueJS : Utilizado para o front-end do projeto.
PHPUnit PHPUnit : Usamos o PHPUnit para executar testes.
ViaCep ViaCep: E uma API para preenchimento automático de endereços a partir de um CEP fornecido pelo usuário.

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


Suba os containers do projeto
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
npm install
php artisan key:generate
npm run build
```


Agora já fora do container
```sh
npm start
```


Acesse o projeto
[http://localhost:8080](http://localhost:8080)

Acesse o phpmyadmin
[http://localhost:8081](http://localhost:8081)
