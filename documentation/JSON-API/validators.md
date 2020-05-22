## Validators

Es posible generar archivos de validación, usando el comando: 

`php artisan make:json-api:validators <<Entidad>>`


Para generar los validadores de las entidades de este ejemplo, se usó: 

[Farmacias/Validators](../../app/JsonApi/Farmacias/Validators.php): `php artisan make:json-api:validators Farmacias`

[Sucursals/Validators](../../app/JsonApi/Sucursals/Validators.php): `php artisan make:json-api:validators Sucursales`

[Medicamentos/Validators](../../app/JsonApi/Medicamentos/Validators.php): `php artisan make:json-api:validators Medicamentos`

El contenido de los archivos fue editado para cumplir las reglas del negocio, usando [la documentación](https://laravel-json-api.readthedocs.io/en/latest/basics/validators/) como guía.
