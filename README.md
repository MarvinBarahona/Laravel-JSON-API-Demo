# POC Laravel API Rest usando JSON:API

Este proyecto es una prueba de conceptos, donde se desarrolla una API Rest siguiendo el estandar [JSON:API](https://jsonapi.org/) 

Se uso como base un proyecto de Laravel 7, y la implementación de JSON:API [Laravel JSON API](https://laravel-json-api.readthedocs.io/en/latest/)

## Ejecutar el proyecto

El proyecto contiene una [carpeta de scripts](documentation/scripts). El orden de ejecución para estos archivos es: 
1) [DB Setup](documentation/scripts/POC%20Laravel%20-%20DB%20Setup.sql): Creación de una base de datos para el proyecto, y de un usuario de base de datos para el mismo. 
2) [Tables](documentation/scripts/POC%20Laravel%20-%20Tables.sql): DDL que define las tablas utilizadas por el proyecto.
3) [Seeds](documentation/scripts/POC%20Laravel%20-%20Seeds.sql): DML para insertar datos iniciales en las tablas creadas. 

Para inicial el proyecto, se debe clonar y configurar como cualquier proyecto Laravel: crear un archivo .env y configurar la base de datos, con la base de datos y el usuario creados con el primer script.

Para arrancar el proyecto, se ejecuta el comando:
`php artisan serve`

_Nota: Laravel 7 trae, por defecto un par de migraciones. Se deben realizar para poder ejectuar el proyecto, con el comando `php artisan migrate`_


## Desarrollo.
* [Creación de modelos](documentation/Modelos.md) a partir de la base de datos.


# Fe de Errata
Ya que, al crear la base de datos, no se uso la [conveción de Eloquent](https://laravel.com/docs/7.x/eloquent#eloquent-model-conventions), el resultado contiene el nombre correctamente semántico "sucursals"
