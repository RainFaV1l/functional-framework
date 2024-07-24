<?php

// Получение подмодулей модуля
$modules = require ROOT_PATH . '/app/errors/config/modules.php';

// Подключение подмодулей модуля
autoload(modules: $modules);

// Запуск проверки на работоспособность
start();