<?php

ob_start();

session_start();

defined("DS") ? null : define("DS",DIRECTORY_SEPARATOR);


defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT",__DIR__ . DS . "templates" . DS ."front");

// echo TEMPLATE_FRONT;
defined("TEMPLATE_back") ? null : define("TEMPLATE_back",__DIR__ . DS . "templates". DS ."back");

defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASS") ? null : define("DB_PASS", "guotong");
defined("DB_NAME") ? null : define("DB_NAME", "ecom_db");

$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

$connection->query("SET NAMES UTF8"); 
require_once("function.php");


?>