# Clubs API 
API project about football teams.

# About
Clubs is an API that allows you to register, update, list and delete records about football teams. Information such as name, description, founded, stadium capacity, nickname and image of a team are represented in the API. 

# Routes list
GET        api/clubs   
POST       api/clubs   
GET        api/clubs/{club}   
PUT|PATCH  api/clubs/{club}   
DELETE     api/clubs/{club}   
POST       api/login   
POST       api/logout

# Tecnologies used
## Back end
- PHP
- Laravel

# How to execute the project

## Back end
Prerequisites: PHP and Composer instaled.

```bash
# clonar repositório
git clone https://github.com/joaopauloleitecosta/clubs_api.git

# entrar na pasta do projeto back end
cd backend

# install dependencies
composer install

# criar arquivo de configuração
cp .env.example .env

# open .env and config database credentials
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=user
DB_PASSWORD=password

# gerar chave da aplicação
php artisan key:generate

# config database - Se ainda não tiver criado o banco de dados no MySQL, crie manualmente. E depois rode o comando:
php artisan migrate

# executar o projeto
php artisan serve
```

# Autor
João Paulo Leite Costa

https://www.linkedin.com/in/joaopauloleitecosta/
