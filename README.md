# 24 Chicken Manager

This is a sample restaurant management system that aims to keep track of its users, transactions, and staff. This project was made in fulfillment of the requirements at our university.

## Installation

1. Install PHP and [Composer](https://getcomposer.org/ "Composer")
2. Clone this repo
3. Change database configuration in the .env.example file
4. Run the following code to install other dependencies:

```
composer install
copy .env.example .env
php artisan key:generate
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

## Features

-   Guest can sign up or login to use the website
-   Users can view the menu
-   Users can add items to their cart
-   Users can update their info
-   Users can checkout and place an order
-   Employees can view all orders
-   Employees can edit and delete an order
-   Employees can create a new order
-   Admins can view the menu
-   Admins can edit and delete a menu item

## Interface

[Sample Interface](./docs/screenshots.md)
