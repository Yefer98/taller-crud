<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'lociones_angelica';

try {
    $connect = mysqli_connect($host, $user, $password, $dbName);
  } catch (ErrorException $error) {
    $error->getMessage();
    echo $error;
  }

