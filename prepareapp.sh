#!/bin/bash
composer install
sleep 30 
php artisan migrate
