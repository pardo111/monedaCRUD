Codigo realizado en mayo 2024, con la finalidad de entrega universitaria, se usa laravel con arquitectura mvc, con vite para cargar estilos entre otros, finalidad un sistema que cumpliera con los requisitos de un crud con login, sistema parcialmente terminado dado que falta eliminar y ordenar alguna informacion de manera mas adecuada, modo de uso, luego de registrarse o hacer login redirige a pagina home, en la cual hacemos click en el apartado coin para poder acceder al crud de monedas.

requisitos para correr el programa, tener instalado node, composer, xampp o algun gestor que incluya para correr php, y la base de datos relacional, en el archivo .env pueden variar lo que seria la base de datos y sus credenciales

luego de clonar el repositorio se necesitan instalar dependencias

para instalar dependencias de programa se necesita ejecutar en consola dentro del proyecto "composer install" "npm install" 

para crear la base de datos ejecutar en terminal "php artisan migrate"

para correr el desarrollo abrir dos terminales en una ejecutar npm run dev (para vite sino no carga los estilos la pag) y en la otra php artisan serve, el cual nos arrojara la ruta a consultar para poder acceder al programa probarlo.

programa desarrollado unicamente con fines academicos para poder demostrar los conocimientos adquiridos en el ciclo 1 2024.
