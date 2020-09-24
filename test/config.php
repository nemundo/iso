<?php

require __DIR__.'/../vendor/autoload.php';

$conn=new \Nemundo\Db\Provider\MySql\Connection\MySqlConnection();
$conn->connectionParameter->host = 'localhost';
$conn->connectionParameter->user = 'root';
$conn->connectionParameter->password = '';
$conn->connectionParameter->port = '3333';
$conn->connectionParameter->database = 'iso_test';
\Nemundo\Db\DbConfig::$defaultConnection = $conn;
