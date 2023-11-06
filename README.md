# URL Shortener

## Description

The URL shortening service allows users to shorten long URLs into shorter ones, which is convenient for sharing links on social media, messengers, and other applications. The project uses the Laravel framework and MySQL database.

**This is just the skeleton of the application. Customize as your heart desires.**

Project uses [TailwindCSS](https://github.com/tailwindlabs/tailwindcss) and [JSON:API library](https://github.com/laravel-json-api/laravel/)

## Installation Guide

To install the project, follow these steps:

```bash
git clone https://github.com/termit5606/urlshortener.git
```

1. Navigate to the project directory:

```bash
cd urlshortener
```

5. Install dependencies using composer:

```bash
composer install
```

6. Initialize NPM:
   
```bash
 npm init
```

1. Create a .env file based on the example:

```bash
cp .env.example .env
```

7. Generate an application key:

```bash
php artisan key:generate
```

8. Configure the database connection in the .env file:

```properties
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=database_user
DB_PASSWORD=database_password
```

9. Run migrations to create tables in the database:

```bash
php artisan migrate
```

10. Start the server:
```bash
php artisan serve
```

11. You are beautiful :)