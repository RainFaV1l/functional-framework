<?php

// Показ сообщения
function showCriticalMessage(array $data) {

    render('critical', ['data' => $data], 'error');

}