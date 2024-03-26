<?php

// Root de la aplicación a partir de http://localhost/
define("APP_ROOT", "\Práctica06_File_Manager");

// Ruta física de la aplicación
define("APP_PATH", "D:\xampp\htdocs\Práctica06_File_Manager");

// Directorio donde se van a subir los archivos
define("DIR_UPLOAD", "D:\xampp\htdocs\Práctica06_File_Manager\archivos");

// Extensiones de archivos con su correspondiente content-type.
$CONTENT_TYPES_EXT = [
    "jpg" => "image/jpeg",
    "jpeg" => "image/jpeg",
    "gif" => "image/gif",
    "png" => "image/png",
    "json" => "application/json",
    "pdf" => "application/pdf",
    "bin" => "application/octet-stream"
];