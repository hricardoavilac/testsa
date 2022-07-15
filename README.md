# Proyecto de Evaluación para Singular Agency

Este es un proyecto de Evaluación para la empresa Singular Agency, únicamente muestra la lista de usuarios creados con el seeder UserSeeder configurado en DatabaseSeeder.

## Configuración Inicial

### Base de Datos
Es necesario crear una base de datos en mysql llamada testsa y luego ejecutar la instrucción

### Archivo de conviguración .env

Renombrar el archivo .env.example a .env de tal forma que se pueda indicar la conexión a la base de datos

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=testsa
DB_USERNAME=root
DB_PASSWORD=
```

### Migraciones

Para ejecutar las migraciones ejecutar el siguiente comando

```
php artisan migrate:fresh --seed
```

El sistema creará un usuario administrador con las siguientes credenciales:
* Nombre:   Administrador
* Email:    admin@testsd.com
* password  12345678

Los otros cuatro usuarios se crean utilizando la función factory, creando otros 4 usuarios de forma aleatoria

# Nota Importante
Para acceder al sitio, entrar a la dirección http://localhost/testsa/public/


# Contacto y soporte
Si tiene alguna duda, puede comunicarse conmigo a hricardoavilac@gmail.com.
