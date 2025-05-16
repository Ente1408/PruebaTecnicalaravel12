🛠️ Instrucciones de instalación

Clonar el repositorio:

   git clone https://github.com/Ente1408/PruebaTecnicalaravel12.git
   cd PruebaTecnicalaravel12

Instalar dependencias:

    composer install
    npm install

Configurar entorno:

    cp .env.example .env
    php artisan key:generate

Crear la base de datos y editar .env con los datos:

        DB_DATABASE=nombre_base_datos
        DB_USERNAME=usuario
        DB_PASSWORD=clave

Ejecutar migraciones y seeders:

     php artisan migrate --seed

Compilar assets:

        npm run dev

Iniciar el servidor:

        php artisan serve
