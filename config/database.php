<?php 

  $host = 'localhost';
  $user = 'root';
  $pWord = 'sdmV[TQqecJ@8_u4';
  $dbname = 'world';

  // Set DSN (data source name)
  $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

  try {
    // Create PDO instance
    $pdo = new PDO($dsn, $user, $pWord);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  } catch (PDOException $e) {
    $error_message = 'Database Error: ';
    $error_message .= $e->getMessage();
    echo $error_message;
    exit('Unable to connect to the database');
  }

?>