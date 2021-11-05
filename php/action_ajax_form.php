<?php
$headers = 'Content-Type: text/html; charset="utf-8"';
if (isset($_POST["name"]) && isset($_POST["phonenumber"]) ) {
    $to = '';//'khort@i.ua';//Куда отправить
    $theme = 'Хочу';//Название сообщения
// Сообщение
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phonenumber"]);
    $message = 'Имя: ' . $name . ', Телефон: ' . $phone;

// На случай если какая-то строка письма длиннее 10000 символов мы используем wordwrap()
    $message = wordwrap($message, 10000, "\r\n");
// Отправляем

    mail($to, $theme, $message, $headers);

    // Формируем массив для JSON ответа
    $result = array(
        'name' => $_POST["name"],
        'phonenumber' => $_POST["phonenumber"]
    );

    // Переводим массив в JSON
    echo json_encode($result);
}
