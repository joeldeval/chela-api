# 1. Clona y utiliza ese ejemplo como API rest

        git clone https://github.com/joeldeval/chela-api.git

# 2. Instala las dependencias

        // entra a la carpeta del proyecto
        cd chela-api

        // ahora instala las dependencias
        composer install

# 3. Conectar a base de datos

###  Crea una base de datos y cambia el nombre del archivo .env.exampe por solo .env al abrirlo deberas cambiar la informacion para que apunte a tu base de datos

        APP_ENV=local
        APP_DEBUG=true
        APP_KEY=
        APP_TIMEZONE=UTC

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=NOMBER_BASE_DE_DATOS
        DB_USERNAME=USUARIO_BASE_DE_DATOS
        DB_PASSWORD=PASSWORD_BASE_DE_DATOS

        CACHE_DRIVER=file
        QUEUE_DRIVER=sync

# 4. Migra la base de datos del proyecto

        php artisan migrate

# 5. Inserta registros a la base de datos

        php artisan db:seed
