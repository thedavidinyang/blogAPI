# BlogAPI

A simple CRUD Blog/Posts API with user interactivity built with Laravel 10.

## Requirements

- PHP 8.1 or higher
- Composer
- MySQL or any other supported database
- Postman (for testing the endpoints)

## Installation

1. Clone the repository:
```bash
   git clone https://github.com/thedavidinyang/blogAPI.git
   cd blogAPI
   ```


2. Install dependencies:

```bash
composer install
```
3. Copy .env.example to .env and configure your database settings:

```bash
cp .env.example .env
Generate the application key:
```

4. Generate the application key:
```bash
php artisan key:generate
```
5. Run  migrations and seed the database:
```bash
php artisan migrate --seed
```
6. Start the laravel server
```bash
php artisan serve
```