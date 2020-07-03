<?php
session_start();
session_name();
define('HOSTS', 'localhost');
define('ROOT', 'root');
define('PASSWORD', '');
define('DBNAME', 'role_based_db');
$conn = new mysqli(HOSTS, ROOT, PASSWORD, DBNAME);
?>