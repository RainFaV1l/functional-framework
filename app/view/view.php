<?php

function asset(string $path) {

    $path = APP_URL . '/' . $path;

    // Подключение шаблона
    echo $path;

}

function renderLayout(string $layout, array $data)
{

    $layout = ROOT_PATH . '/' . $layout;

    if (file_exists($layout)) {

        extract($data);

        include $layout;

    } else {

        $_SESSION['errors'][] = [
            'message' => "Макет $layout не найден",
            'error_message' => "Макет $layout не найден",
            'type' => 'fatal'
        ];

    }

}

function render(string $template, array $data = [], string $type = 'view')
{

    switch ($type) {

        case 'view':

            $templatePath = ROOT_PATH . '/resources/views/pages/' . $template . '.php';

            break;

        case 'error':

            $templatePath = ROOT_PATH . '/resources/views/errors/' . $template . '.php';

            break;

        case 'component':

            $templatePath = ROOT_PATH . '/resources/views/components/' . $template . '.php';

            break;

        default:

            $_SESSION['errors'][] = [
                'message' => "Неверный тип шаблона: $type",
                'error_message' => "Неверный тип шаблона: $type",
                'type' => 'fatal'
            ];

            return;

    }

    if (file_exists($templatePath)) {

        extract($data);

        include $templatePath;

    } else {

        $_SESSION['errors'][] = [
            'message' => "Шаблон $template не найден",
            'error_message' => "Шаблон $template не найден",
            'type' => 'fatal'
        ];

    }
}
