<?php
 //Принимаем постовые данные ,пишем слово, которое записано в инпуте name="" в форме html 
$whatever=$_POST['whatever'];
$username=$_POST['username'];       
$email=$_POST['email'];
$user_message=$_POST['user_message'];

//Тут указываем на какой ящик посылать письмо
$to = "exipi7@mail.ru";
//Далее идет тема письма и само сообщение
// Тема письма
$subject = "Заявка с сайта";
// Сообщение письма
$message = "
Форма с которой отправлено сообщение: ".htmlspecialchars($whatever)."<br />
Имя пользователя: ".htmlspecialchars($username)."<br />
Email: ".htmlspecialchars($email)."<br />
Сообщение: ".htmlspecialchars($user_message);

// Отправляем письмо при помощи функции mail();
$headers = "From: homework.sl <mail@stastroi.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
// Отправляем письмо при помощи функции mail();
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
 ?>