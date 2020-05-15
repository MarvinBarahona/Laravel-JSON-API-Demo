# Configuración inicial

El paquete cloudcreativity/laravel-json-api se agregó con composer. 

`composer require cloudcreativity/laravel-json-api`


Al momento de crear este proyecto, no habia una versión Release para Laravel 7, por lo que se instaló la versión beta: 

`composer require cloudcreativity/laravel-json-api:2.0.0-beta3`

Una vez instalada la dependencia, el primer paso es generar una JSON API con el comando: 

`php artisan make:json-api`

El comando anterior creará el archivo [json-api-default.php](config/json-api-default.php), al que le agregarón las líneas:

* Para modificar el namespace por defecto de la capa de modelos (necesario para crear otros archivos, como Schemas y Adapters, correctamente)

```php
'model-namespace' => 'App\Models',
```

* Para agregar las referencias a las API que se crearán: 
```php
'resources' => [
        'farmacias' => \App\Models\Farmacia::class,
        'sucursals' => \App\Models\Sucursal::class
    ],
```

Además, para evitar conflictos con el versionamiento de la API que provee el paquete, se debe eliminar el prefijo 'api' del archivo [RouteServiceProvider.php](app/Providers/RouteServiceProvider.php).

