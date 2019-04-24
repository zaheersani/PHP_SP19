<?php
/**
 * Created by PhpStorm.
 * User: Shehla
 * Date: 18-Apr-19
 * Time: 21:26
 */
//define('DBHOST', 'localhost');
//define('DBNAME', 'testdb');
//define('DBUSER', 'root');
//define('DBPASSWORD', '');

$connString = "mysql:host=localhost;dbname=universitydb";
$user = "root";
$pass = "";
$pdo = new PDO($connString,$user,$pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>