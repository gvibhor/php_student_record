<?php $username = "vibhor";
$password = "vibhor123";
$host = "85.10.205.173:3306";
$dbname = "studentrecord";

$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

try
{
    $db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options);
}
catch(PDOException $ex)
{
    die("Failed to connect to the database: " . $ex->getMessage());
}
