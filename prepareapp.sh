#!/bin/bash
cp env.example .env
composer install
sleep 30 
php artisan migrate --seed
