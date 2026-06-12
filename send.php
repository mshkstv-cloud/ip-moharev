<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];

$message = "
Имя: $name

Телефон: $phone

Комментарий:
$comment
";

mail(
"moharev.aleksei@mail.ru",
"Новая заявка с сайта",
$message
);

?>