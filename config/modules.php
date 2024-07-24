<?php

// Основные модули приложения
return [
    // Подключение confug
    '/config/config.php',
    // Подключение к БД
    '/database/connection.php',
    // Подключение представлений
    '/app/view/view.php',
    // Обработка ошибок перед запуском проекта
    '/app/errors/app.php',
    // Подключение роутера
    '/app/router/app.php',
];