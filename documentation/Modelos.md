# Creación de modelos a partir de la BD.

Para crear modelos Eloquent a partir de tablas de la base de datos, se uso la dependencia [eloquent-model-generator](https://github.com/krlove/eloquent-model-generator).

Se ejecutaron los comandos: 

`
krlove:generate:model Farmacia --table-name=farmacia --output-path=Models --namespace=App/Models
`

`
krlove:generate:model Sucursal --table-name=sucursal --output-path=Models --namespace=App/Models
`

_Nota: Ya que, al crear la base de datos, no se uso la [conveción de Eloquent](https://laravel.com/docs/7.x/eloquent#eloquent-model-conventions), el resultado contiene el nombre correctamente semántico "sucursals" _
