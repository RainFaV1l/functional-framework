<?php

try {

    $dsn = 'mysql:localhost=' . DB_HOST . ';db_name=' . DB_NAME;

    $connection = new PDO($dsn, DB_USER, DB_PASSWORD);

} catch (PDOException $exception) {

    $_SESSION['errors'][] = [
      'message' => 'Ошибка подключение к базе данных.',
      'error_message' => $exception->getMessage(),
      'type' => 'fatal'
    ];

}