# Mi Web Personal

Proyecto web desarrollado en HTML, CSS y PHP, que incluye una página
principal, un formulario de contacto y conexión a base de
datos.

------------------------------------------------------------------------

## Descripción del Proyecto

Este proyecto es un sitio web personal que muestra información personal
del autor e incluye:

-   Página principal (`index.html`)
-   Sección de contacto con formulario funcional
-   Envío de datos mediante PHP
-   Conexión a base de datos MySQL
-   Estilos personalizados mediante CSS
-   Archivos multimedia
-   Script SQL para la base de datos

------------------------------------------------------------------------

## Tecnologías Utilizadas

-   HTML5
-   CSS3
-   PHP 8
-   MySQL
-   Servidor web: InfinityFree / Wuaze Hosting

------------------------------------------------------------------------

## Estructura del Proyecto

    mi_web/
    │── index.html
    │── css/
    │     └── styles.css
    │── contacto/
    │     ├── formulario_contacto.html
    │     └── procesar_formulario.php
    │── conexion/
    │     └── conexion.php
    │── img/
    │     └── foto.jpeg
    └── mi_web.sql

------------------------------------------------------------------------

## Instrucciones de Uso

### Visitar el sitio web

Puede acceder al sitio completamente desplegado aquí: **https://miwebandersones.wuaze.com/**

------------------------------------------------------------------------

### Ejecutar en local 

**Requisitos:** 

- Servidor local (XAMPP)
- PHP 8+
- MySQL

**Pasos:** 

1. Copiar la carpeta del proyecto dentro de `htdocs/`.
2. Importar el archivo `mi_web.sql` en phpMyAdmin. 
3. Configurar `conexion/conexion.php`: `$host = "localhost";    $user = "root";    $pass = "";    $db   = "mi_web"`.
4. Abrir en el navegador: **http://localhost/mi_web/**

------------------------------------------------------------------------

## Autor

Desarrollado por **Anderson Escobar** como proyecto personal y de práctica.
