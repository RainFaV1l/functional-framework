<?php

// Запуск сессии
session_start();

// Экранирование
$rootPath = htmlentities($_SERVER['DOCUMENT_ROOT'], ENT_QUOTES, "UTF-8");

// Убираем '/public' для получения пути к корню проекта
$rootPath = rtrim(str_replace('/public', '', $rootPath), '/');

// Получение пути к корню сервера
define('ROOT_PATH', $rootPath);

// Определите константы для путей к вашим шаблонам
const TEMPLATE_PATH = ROOT_PATH . '/resources/views';

// Подключение автозагрузки
require ROOT_PATH . '/app/autoload.php';

// Получение модуля из config
$modules = require ROOT_PATH . '/config/modules.php';

// Подключение основных модулей
autoload(modules: $modules);

// Получение доступа к глобальной переменной подключения к БД
global $connection;