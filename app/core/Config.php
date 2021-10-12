<?php


/*
|
| File ini berisi seluruh konfigurasi mengenai aplikasi ini
|
*/


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);

define("BASE_URL","http://192.168.43.169");

define("DB_HOST","localhost");
define("DB_USERNAME","superadmin");
define("DB_PASSWORD","super");
define("DB_NAME","phpmvc");