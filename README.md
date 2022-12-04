# Restaurant Management System
This is a sample restaurant management system that aims to keep track of its users, transactions, and staff. This project was made in fulfillment of the requirements at our university.

## Installation
1. Install PHP and [Composer](https://getcomposer.org/ "Composer")
2. Clone this repo
3. Change database configuration in the .env.example file
4. Run the following code to install other dependencies:
```
composer install
php artisan key:generate
copy .env.example .env
php artisan migrate --seed
```
5. Run the following code to initialize the development server:
```
php artisan serve
```
6. Open http://localhost:8000 in your browser

## For Frontend
Put the html or php files in the /resources/views/ directory.

Also, put the css, js, images, and other public access files in the /public/ directory.

## Blade Template
Click [here](https://laravel.com/docs/9.x/blade "here") for the documentation of the PHP templating engine to be used.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
