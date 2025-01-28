# Task Manager API

## Requirements
- PHP >= 8.2
- Laravel 11
- SQLite 

## Usage
- Clone the repo: `git clone ...` and run: `composer install`
- Create .env: `cp .env.example .env`. Replace the absolute path of `DB_DATABASE` in `.env`
- Run: `php artisan migrate`
- Generate the JWT secret key: `php artisan jwt:secret`
- Run the Test case - Create a task: `php artisan test`

Users:
- Register user (POST): `http://127.0.0.1:8000/api/auth/register` with POST: name, email, password, c_password.
- Login (POST): `http://127.0.0.1:8000/api/auth/login` with POST: email, password.
- Tasks list (GET): `http://127.0.0.1:8000/api/tasks`
