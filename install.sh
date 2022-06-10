#!/bin/bash

# variables base de datos
user="-udebianDB"
password="-pdebianDB"
sql="proyecto"
data="proyecto.sql"

# copiar y renombrar env
echo renombrar env.example por env y copiar
sleep 2s
sudo cp .env.example .env
php artisan key:generate

# permisos
#### COMPROBAR el html esta borrado ####
ln -s proyecto/public/ ../html
chown -R www-data:www-data /var/www/html
sudo chown -R $USER:www-data storage
sudo chown -R $USER:www-data bootstrap/cache
chmod -R 775 storage
chmod -R 775 bootstrap/cache
php artisan storage:link
php artisan config:clear
php artisan cache:clear
php artisan livewire:publish --assets
sudo systemctl reload apache2

# Si tu aplicación en Laravel cuenta con muchas rutas es muy importante que corras el comando
#route:cache para mejorar el rendimiento de la aplicación:
# php artisan route:cache

# Ahora vamos a precompilar todas las vistas de Blade:
# php artisan view:cache

echo Crear base de datos
sleep 2s
mysqladmin $user $password create $sql
mysql $user $password  $sql < database/$data
echo Creada e importada base de datos
sleep 2s

echo composer install y npm install
sleep 2s
composer install -n

npm install -y
echo finish
sleep 2s

# copiando archivo necesario para la ruta de url
echo copiando archivo necesario para la ruta de url
sleep 2s

sudo rm -rf /etc/apache2/sites-available/000-default.conf
sudo cp 000-default.conf /etc/apache2/sites-available/
sudo a2enmod rewrite
sudo systemctl restart apache2

