# Probar con Postman

Se creó [una colección](POC%20Laravel%20JSON%20API.postman_collection.json) y el [entorno de "Local"](Local.postman_environment.json), para probar este proyecto. 

Para exportar ambos archivos, se uso Postman v7.24.0.

La opción de importación se encuentra entre la opciones "New" y "Runner" del menú principal; en el menú contextual "File -> Import" o con el comando Ctrl + O en Windows.

Para conocer más de Postman, ver:
* [Uso general](https://learning.postman.com/docs/postman/sending-api-requests/requests/)
* [Postman Collections](https://learning.postman.com/docs/postman/collections/intro-to-collections/)
* [Postman Environments](https://learning.postman.com/docs/postman/variables-and-environments/variables/) 


### Consideraciones. 

* El estándar JSON:API utiliza la cabecera "Content-Type" seteada con "application/vnd.api+json", por lo que todas las peticiones POST y PATCH tienen esa cabecera. 
* En pruebas realizadas, solo fue posible crear una sucursal a partir de la creación de una farmacia, o enviando el parametro "farmacia_id" en la data de la sucursal.
* Si se intenta eliminar una farmacia con sucursales, habrá un error en la base de datos. Pendiente manejar apropiadamente ese error. 

