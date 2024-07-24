<!doctype html>
<html lang="ru" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Мини Фреймворк</title>
    <link rel="stylesheet" href="<?php asset('assets/css/style.css'); ?>">
</head>
<body class="h-full">
    <div class="min-h-full flex flex-col bg-gray-900 text-white">

        <?php

        if(isset($template) && isset($template['type']) && $template['type'] === 'error') stopProject($template['errors']);

        render('header', [], 'component');

        if (isset($template)) {
            ?>
                <main class="flex-auto">
                    <?php render($template['template'], $template['data']); ?>
                </main>
            <?php
        }

        render('footer', [], 'component');

        ?>

    </div>

</body>
</html>