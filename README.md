# URL Shortener

## Description

The URL shortening service allows users to shorten long URLs into shorter ones, which is convenient for sharing links on social media, messengers, and other applications. The project uses the Laravel framework and MySQL database.

**This is just the skeleton of the application. Customize as your heart desires.**

Project uses [TailwindCSS](https://github.com/tailwindlabs/tailwindcss) and [JSON:API library](https://github.com/laravel-json-api/laravel/)

## Requirements

<ul>
    <sup>
        <li>PHP >= 8.1</li>
        <li>Ctype PHP Extension</li>
        <li>cURL PHP Extension</li>
        <li>DOM PHP Extension</li>
        <li>Fileinfo PHP Extension</li>
        <li>Filter PHP Extension</li>
        <li>Hash PHP Extension</li>
        <li>Mbstring PHP Extension</li>
        <li>OpenSSL PHP Extension</li>
        <li>PCRE PHP Extension</li>
        <li>PDO PHP Extension</li>
        <li>Session PHP Extension</li>
        <li>Tokenizer PHP Extension</li>
        <li>XML PHP Extension</li>
    </sup>
</ul>

## Installation Guide

To install the project, follow these steps:

1. Clone the project
```bash
git clone https://github.com/termit5606/urlshortener.git
```

2. Navigate to the project directory:

```bash
cd urlshortener
```

3. Install dependencies using composer:

```bash
composer install
```

4. Initialize NPM:
   
```bash
 npm init
```

5. Create a .env file based on the example:

```bash
cp .env.example .env
```

6. Generate an application key:

```bash
php artisan key:generate
```

7. Configure the database connection in the .env file:

```properties
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=database_user
DB_PASSWORD=database_password
```

8. Run migrations to create tables in the database:

```bash
php artisan migrate
```

9. Start the server:
```bash
php artisan serve
```

10. You are beautiful :)