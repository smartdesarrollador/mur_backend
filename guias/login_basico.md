<!-- 1.- LOGIN_REGISTER_BASICO-V1-P1-->

# LOGIN BASICO ANGULAR 17 CON LARAVEL 10 Y JWT

### Instalar jwt

composer require tymon/jwt-auth

### Agregue el proveedor de servicios a la matriz de proveedores en el archivo de configuración config/app.php de la siguiente manera:

'providers' => [

    ...

    Tymon\JWTAuth\Providers\LaravelServiceProvider::class,

]

### Ejecute para crear config/jwt.php:

php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"

### generar una clave jwt:

php artisan jwt:secret

<!-- /1.- LOGIN_REGISTER_BASICO-V1-P1-->
