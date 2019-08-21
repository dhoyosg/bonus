# Taller bonus
Aplicación web en PHP utilizando laravel que permite acceder a una zona de login y realiza tres acciones principales.<br>
1.Registrar vehiculo y su respectivo dueño<br>
2.Listar los vehiculos registrados<br>
3.Ver estadisticas de los vehiculos registrados (Cuantos existen).<br>

## Instalacion<br>
1.Luego de bajar el repositorio, se realiza el comando "composer install" <br>
2.Luego de hacer el composer install, realizamos el comando "php artisan key:generate".<br>
3.Configuramos la base de datos en el archivo .env <br>
4.Realizamos el comando "php artisan migrate" para realizar las migraciones en la abse de datos.<br>
5.Luego, llenamos la base de datos con el seed utilizando el comando "php artisan db:seed".<br>
6.Ejecutamos el proyecto mediante el comando "php artisan serve".<br>