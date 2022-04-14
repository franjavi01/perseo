# perseo

Para el correcto funcionamiento es necesario instalar en localhost/phpmyadmin una base de datos llamada "perseo"

Esta base de datos tiene dos tablas con estos nombres: "cursos" y "usuarios"

Para el cotejamiento se utiliza "utf8mb4_general_ci"

A continuación se indica la estructura de cada tabla:

## cursos
  - id (int11) autoincrementable
  - nombre (varchar255)
  - imagen (varchar255)
  - precio (varchar255)

## usuarios
  - id (int11) autoincrementable
  - email (varchar255)
  - nombre (varchar255)
  - apellidos (varchar255)
  - password1 (varchar255)
  - imagen (varchar255)
  - texto (varchar255)
