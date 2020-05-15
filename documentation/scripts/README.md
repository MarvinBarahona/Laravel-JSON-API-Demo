El orden de ejecución para estos archivos es: 
1) [DB Setup](documentation/scripts/POC%20Laravel%20-%20DB%20Setup.sql): Creación de una base de datos para el proyecto, y de un usuario de base de datos para el mismo. 
2) [Tables](documentation/scripts/POC%20Laravel%20-%20Tables.sql): DDL que define las tablas utilizadas por el proyecto.
3) [Seeds](documentation/scripts/POC%20Laravel%20-%20Seeds.sql): DML para insertar datos iniciales en las tablas creadas. 

Para inicial el proyecto, se debe clonar y configurar como cualquier proyecto Laravel: crear un archivo .env y configurar la base de datos, con la base de datos y el usuario creados con el primer script.
