<?php

if(!isset($_GET)) stopProject([
    [
        'message' => 'Поддерживается только get запрос.',
        'error_message' => 1,
        'type' => 'FATAL',
    ],
]);

function get($url, $path, $data = [])
{

    global $template;

    if (isset($_GET['url'])) {

        if($_GET['url'] === $url) {

            $template = $path;

        } else {

            return [
                'template' => 'critical',
                'type' => 'error',
                'errors' => [
                    [
                        'message' => 'Ошибка 404.',
                        'error_message' => 'Данной страницы не существует.',
                        'type' => 'fatal'
                    ]
                ]
            ];

        }


    } else {

        $template = 'start';

    }

    return [
        'template' => $template,
        'data' => $data,
    ];

}


$template = get('/', 'start', []);

$template = get('catalog', 'catalog', []);

// Подключение шаблона верстки
renderLayout(LAYOUT, ['template' => $template]);