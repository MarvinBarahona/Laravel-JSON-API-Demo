# Schemas

Por cada API generada con el paquete Laravel JSON API, es necesario crear un Schema, que contiene información de los campos y relaciones a considerar.

Esto se hace con ayuda del comando: 

`php artisan make:json-api:schema <<Entidad>>`

Para el caso de este proyecto, se ejecutaron: 

`php artisan make:json-api:schema Farmacias`

`php artisan make:json-api:schema Sucursals`

Con esto se crean archivos dentro de la carpeta [JsonApi](../../app/JsonApi), que se modificaron. 

1) Al archivo [Farmacias/Schema.php](../../app/JsonApi/Farmacias/Schema.php) se le agregaron las siguientes líneas: 

    1) Para listar los campos a considerar en la generación de la API 'farmacias'.
    
        ```php
        public function getAttributes($resource)
        {
           return [
               'nombre' => $resource->razon_social,
               'nombre_comercial' => $resource->nombre_comercial
           ];
        }
        ```
    1) Para declarar la relación con Sucursal (y las mostrarla en la API)
        ```php
       public function getRelationships($resource, $isPrimary, array $includeRelationships)
        {
            return [
                'sucursals' => [
                    self::SHOW_SELF => true,
                    self::SHOW_RELATED => true,
                ]
            ];
        }
       ```

1)  Al archivo [Sucursals/Schema.php](../../app/JsonApi/Sucursals/Schema.php) se le agregaron las siguientes líneas: 
    1) Para listar los campos a considerar en la generación de la API 'sucursals'.
        ```php
        public function getAttributes($resource)
            {
                return [
                    'nombre' => $resource->nombre,
                    'direccion' => $resource->direccion
                ];
            }
            ```
    1) Para declarar la relación con Farmacia (y las mostrarla en la API)
        ```php
        public function getRelationships($resource, $isPrimary, array $includeRelationships)
            {
                return [
                    'farmacia' => [
                        self::SHOW_SELF => true,
                        self::SHOW_RELATED => true,
                    ]
                ];
            }
       ```
