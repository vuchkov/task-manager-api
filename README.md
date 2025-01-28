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

### API Users:
- Register user (POST): `http://127.0.0.1:8000/api/auth/register` with POST: name, email, password, c_password.
- Login (POST): `http://127.0.0.1:8000/api/auth/login` with POST: email, password.
- Copy the Bearer `access_token` from the Login response and put in: 
Authorization >> Bearer Token of the next Tasks requests.

I also add:
- Refresh API (POST) `http://127.0.0.1:8000/api/auth/refresh`
- Profile API: (POST) `http://127.0.0.1:8000/api/auth/profile`
- Logout API: (POST) `http://127.0.0.1:8000/api/auth/logout`

### API Tasks
- Tasks: list (GET): `http://127.0.0.1:8000/api/tasks`
- Tasks: create a task (POST): `http://127.0.0.1:8000/api/tasks`, 
with POST: title, description (optionally) and (status: default "pending").
- Tasks: update a task status (PUT): `http://127.0.0.1:8000/api/tasks/{id}`, GET (task) id -> status "completed".

I also add:
- Show a task (GET): `http://127.0.0.1:8000/api/tasks/{id}`
- Delete a task (DELETE): `http://127.0.0.1:8000/api/tasks/{id}`
