<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="to__main">
        <a href="index.html">Вернуться на главную</a>
    </div>
<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$name = urldecode($name);
$phone = urldecode($phone);
$name = trim($name);
$phone = trim($phone);

if (mail("sukhaniky@mail.ru", "Заявка с сайта", "Имя:".$name.". Телефон: ".$phone ,"From: example2@mail.ru \r\n"))
{   
    echo "сообщение успешно отправлено";
    
} else {
    echo "при отправке сообщения возникли ошибки";
}
ini_set('short_open_tag', 'On');
header('Refresh: 2; URL=index.html');
 ?>
    
</body>
</html>



