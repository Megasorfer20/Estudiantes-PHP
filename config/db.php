<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

if (!defined("DB_TYPE")){
    define("DB_TYPE","mysql");
}

if (!defined("DB_HOST")){
    define("DB_HOST","localhost");
}

if (!defined("DB_NAME")){
    define("DB_NAME","CampusLands");
}

if (!defined("DB_USER")){
    define("DB_USER","root");
}

if (!defined("DB_PASSWORD")){
    define("DB_PASSWORD","");
}

?>