# perseo

Para el correcto funcionamiento es necesario instalar en localhost/phpmyadmin una base de datos llamada "perseo"

Esta base de datos tiene tres tablas con estos nombres: "cursos", "roles" y "usuarios"

Para el cotejamiento se utiliza "utf8mb4_general_ci"

A continuación se indica la estructura de cada tabla:

## cursos
  - id (int11) autoincrementable
  - nombre (varchar255)
  - imagen (varchar255)
  - precio (varchar255)

## roles
  - id (int11) autoincrementable
  - rol (varchar255)

En esta tabla introducimos directamente los valores:
  - id | rol
  -  1 | admin
  -  2 | client

## usuarios
  - id (int11) autoincrementable
  - email (varchar255)
  - nombre (varchar255)
  - apellidos (varchar255)
  - password1 (varchar255)
  - imagen (varchar255)
  - texto (varchar255)
  - rol_id (int11): esta columna esta relacionada con la columna id de roles

Para hacer efectiva esta relación, dentro de la tabla usuarios hay que hacer este recorrido:
  - Estructura
  - Vista de relaciones
  - Relaciones internas
  - rol_id tiene tres cuadros de texto, cada uno de ellos tiene que poner: perseo/roles/id
  - hacer click en Guardar

Cada usuario que se registra automáticamente se le asignará el rol 2 client. Para que sea efectiva la organización por lo menos uno de los susuarios debería asumir el rol 1 admin. Esto lo conseguimos actuando manualmente:

En la pestaña Examinar de la tabla usuarios editamos la fila del usuario que hemos elegido para que asuma el rol 1 admin. En rol_id donde pone 2-client lo cambiamos por 1-admin. A continuación hacemos click en Continuar
