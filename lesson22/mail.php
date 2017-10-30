<?php
//Принимаем постовые данные
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
//Тут указываем на какой ящик посылать письмо
$to = "jul.ryabkova@mail.ru";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с сайта";
// Сообщение письма
$message = "
Имя пользователя: ".htmlspecialchars($name)."<br />
Email: ".htmlspecialchars($email)."<br />
Пароль: ".htmlspecialchars($pass);
// Отправляем письмо при помощи функции mail();
$headers = "From: lesson22.sl <mail@lesson22.sl>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
?>