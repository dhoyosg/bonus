# Taller bonus
Aplicación web en PHP utilizando laravel que permite acceder a una zona de login y realiza tres acciones principales.
1.Registrar vehiculo y su respectivo dueño
2.Listar los vehiculos registrados
3.Ver estadisticas de los vehiculos registrados (Cuantos existen).

## Instalacion
1.Luego de bajar el repositorio, se realiza el comando "composer install" 
2.Luego de hacer el composer install, realizamos el comando "php artisan key:generate".
3.Configuramos la base de datos en el archivo .env 
4.Realizamos el comando "php artisan migrate" para realizar las migraciones en la abse de datos.
5.Luego, llenamos la base de datos con el seed utilizando el comando "php artisan db:seed".
6.Ejecutamos el proyecto mediante el comando "php artisan serve".