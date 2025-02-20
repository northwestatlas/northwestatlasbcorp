<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "atlasnw.sv@gmail.com"; // Конечный email
    $subject = "Новое сообщение с сайта";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: $email";

    // Отправка письма
    if (mail($to, $subject, "От: $name\nEmail: $email\nСообщение:\n$message", $headers)) {
        echo "Сообщение успешно отправлено!";
    } else {
        echo "Произошла ошибка при отправке сообщения.";
    }
}
?>
