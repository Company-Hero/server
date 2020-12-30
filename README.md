# Company Hero (server)


# Requirements
* HTTP server with PHP support (Apache, Nginx)
* PHP 7.3 - 7.4
* Composer
* Database (MySQL, PostgreSQL, SQLite)

# Installing StatusWatcher
1. Download StatusWatcher from GitHub
2. Rename file ```.env.example``` to ```.env```
3. Edit file ```.env```
4. Bash ```composer install```
5. Generate a new application key ```php artisan key:generate```
6. Add database configuration in ```.env``` file
7. Run installer ```php artisan migrate --seed```
8. Install NPM Packages ```npm install```
9. FINISH

# Compile CSS & JS
Run ```npm rund dev``` in Bash  