<?php

function autoload(array $modules): void
{
    // Подключение модулей
    foreach ($modules as $module) {

        try {

            require ROOT_PATH . $module;

        } catch (Exception $exception) {

            $_SESSION['errors'][] = [
                'message' => 'Ошибка загрузки модуля по пути: ' . $module . '.',
                'error_message' => $exception->getMessage(),
                'type' => 'fatal'
            ];

        }

    }
}