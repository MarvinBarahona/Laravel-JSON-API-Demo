# Adapters

Por cada API generada con el paquete Laravel JSON API, es necesario crear un Adapter, que contiene la estrategio de manejo de datos.

Esto se hace con ayuda del comando: 

`php artisan make:json-api:adapter <<Entidad>>`

Para el caso de este proyecto, se ejecutaron: 

`php artisan make:json-api:adapter Farmacias`

`php artisan make:json-api:adapter Sucursals`

Con esto se crean archivos dentro de la carpeta [JsonApi](app/JsonApi), que se modificaron. 

1) Al archivo [Farmacias/Adapter.php](app/JsonApi/Farmacias/Adapter.php) se le agregaron las siguientes líneas para especificar la relación existente con Sucursal:

    ```php
    protected function sucursals()
    {
        return $this->hasMany();
    }
    ```

1) Al archivo [Sucursals/Adapter.php](app/JsonApi/Sucursals/Adapter.php) se le agregaron las siguientes líneas para especificar la relación existente con Farmacia:

    ```php
    protected function farmacia()
    {
        return $this->hasOne();
    }
    ```

