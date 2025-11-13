<?php
 if(file_exists(__DIR__ . "/app/data.php")){
    require_once __DIR__ . "/app/data.php";
 }
 if(file_exists(__DIR__ . "/app/models.php")){
    require_once __DIR__ . "/app/models.php";
 }
 if(file_exists(__DIR__ . "/app/helpers.php")){
    require_once __DIR__ . "/app/helpers.php";
 }
 if(file_exists(__DIR__ . "/app/function.php")){
    require_once __DIR__ . "/app/function.php";
 }

?>