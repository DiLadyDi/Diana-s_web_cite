<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Diana Ageeva</title>
    <link rel="stylesheet" href="style.css">

    
 </head>
 
 <body>


<div class='top-container'></div>
   

<br>
      <div class='avatar-container'>
        <img class="avatar" src="pictures/avatar.png" width="100" height="100" alt="Diana's photo">
      </div>

      <div class='top-container'></div>


<h2>Thank you! </h2> 
<p>Your message successfully sent.  </p>
<p>I will reply as soon as possible!</p>


<?php
//для начала опишем функцию очистки данных от лишних пробелов и тегов
function clstr($data){
 return trim(strip_tags($data));
}


	$name = clstr($_POST['name']);
	$phone = clstr($_POST['phone']);
	$msg = clstr($_POST['message']);
		//проверим наши переменные на пустоту
		if(!empty($name)&&!empty($phone)&&!empty($msg))
		{
			$to='diana-ageeva98@mail.ru';
			$sub='Письмо с сайта';
			$text='Имя - '.$name.' Телефон - '.' Сообщение: '.$msg;
			//в переменную положим результат от функции mail false или true
			$status=mail($to, $sub, $text); 
			//положим результат в куки с временем хранения 10 сек
			setcookie('status_mail', $status, time()+10);
			header('Location:'.$_SERVER['REQUEST_URI']); 		
}
if($_COOKIE['status_mail']==true){
echo "Сообщение отправлено";
}
?>



  </body>
</html>
