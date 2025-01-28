# Task Manager API

## Requirements
- PHP >= 8.2
- Laravel 11
- SQLite 

## Usage
- Clone the repo: `git clone ...` and run: `composer install`
- Create .env: `cp .env.example .env`. Replace the absolute path of `DB_DATABASE` in `.env`
- Generate the JWT secret key: `php artisan jwt:secret`
- Run: `php artisan migrate`
- Run the Test case - Create a task: `php artisan test`
