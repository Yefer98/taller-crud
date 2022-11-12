<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'db.sql';

try {
    $conn = mysqli_connect($host, $user, $password, $dbName);
  } catch (ErrorException $error) {
    $error->getMessage();
    echo $error;
  }

