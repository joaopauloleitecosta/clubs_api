# Attention: Readme under construction

# Clubs API
API project about football teams.

# About
Clubs is an API that allows you to register, update, list and delete records about football teams. Information such as name, description, founded, stadium capacity, nickname and image of a team are represented in the API. 

# Types of fields represented in the API
name - string
description - string
stadium capacity - integer
founded - integer
nickname - string
image - string

# Routes list
GET        api/clubs   
POST       api/clubs   
GET        api/clubs/{club}   
PUT|PATCH  api/clubs/{club}   
DELETE     api/clubs/{club}   
POST       api/login   
POST       api/logout

# Technologies used
## Back end
- PHP
- Laravel

# How to execute the project

## Back end
Prerequisites: PHP and Composer instaled.

```bash
# clone repository
git clone https://github.com/joaopauloleitecosta/clubs_api.git

# enter the project folder
cd name_clone_repository

# install dependencies
composer install

# create configuration file
cp .env.example .env

# open .env and config database credentials
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=user
DB_PASSWORD=password

# generate application key
php artisan key:generate

# config database - If you haven't created the database in MySQL yet, create it manually. Then run the command:
php artisan migrate

# execute the project
php artisan serve
```

# Autor
João Paulo Leite Costa

https://www.linkedin.com/in/joaopauloleitecosta/
