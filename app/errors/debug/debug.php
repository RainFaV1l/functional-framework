<?php

// Функция для обработки ошибки
function dd(mixed $value): void
{
    if (!is_array($value)) {
        var_dump($value);
    } else {
        ?><pre><?php print_r($value) ?></pre><?php
    }
    die();
}

// Функция для обработки ошибки
function dump(mixed $value): void
{
    if (!is_array($value)) {
        var_dump($value);
    } else {
        ?><pre><?php print_r($value) ?></pre><?php
    }
}

// Функция для остановки проекта
function stopProject(array $errors) : void {

    // Вывод сообщения
    showCriticalMessage($errors);

    // Остановка выполнения кода
    die();

}

function start() : void {

    // Проверка на значение 'local'
    if(APP_ENV === 'local') {

        // Проверка на наличие ошибок
        if(isset($_SESSION['errors'])) {

            // Получение списка критических ошибок
            $criticalErrors = array_filter($_SESSION['errors'], fn($error) => $error['type'] === 'fatal');

            // Если есть критические ошибки
            if(count($criticalErrors) > 0) {

                // Очистка сессии
                unset($_SESSION['errors']);

                // Остановка проекта и показ сообщения
                stopProject($criticalErrors);

            }

        }

    }

}