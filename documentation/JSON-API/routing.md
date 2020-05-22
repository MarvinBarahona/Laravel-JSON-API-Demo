# Routing

Por cada API creada con Laravel JSON API, se debe agregar un resource a las rutas del proyect en el archivo [api.php](../../routes/api.php).

Para este proyecto, las dos APIs generadas se agregaron con: 

```php
JsonApi::register('default')->routes(function ($api) {
    $api->resource('farmacias')->relationships(function ($relations) {
        $relations->hasMany('sucursals');
        $relations->hasMany('medicamentos');
    });
    $api->resource('sucursals')->relationships(function ($relations) {
        $relations->hasOne('farmacia');
    });
    $api->resource('medicamentos')->relationships(function ($relations) {
        
    });
});
```
