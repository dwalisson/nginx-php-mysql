<?php

/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=new_app;host=localhost';
$user = 'new_app';
$password = 'new_app';

$dbh = new PDO($dsn, $user, $password);
