<?php

// Данные для подключения к базе данных
const DB_HOST = 'localhost';
const DB_NAME = 'base_functional';
const DB_USER = 'root';
const DB_PASSWORD = '';

// Версия проекта
const APP_ENV = 'local';

// Путь проекта
const APP_URL = 'http://base-functional';

// Папка со страницами
const PAGES_URL = 'resources/views/pages/';

// Макет страницы
const LAYOUT = 'resources/views/layout/app.php';

// Запуск команды tailwind
// npx tailwindcss -i ./resources/css/app.css -o ./public/assets/css/style.css --watch