# capi_examen_back_victor_daniel_gonzalez_flores
Examen de prueba para empresa CAPI

- Posicionarse en la rama hf-head
    git checkout hf-head
- Hacer copia del archivo .env.example con nombre .env
- Modificar en el nuevo archivo .env los valores de:
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
- Ejecutar los comandos
    composer install
    php artisan migrate
    php artisan db:seed
- Correr el servidor
    php artisan serve