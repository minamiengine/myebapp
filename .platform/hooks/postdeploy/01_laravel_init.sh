#!/bin/bash
cp -p /var/www/html/.env.example /var/www/html/.env
cd /var/www/html
php artisan key:generate
