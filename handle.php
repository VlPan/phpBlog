<?php 
//ОБРАБОТЧИК получает данные с формы из файла index.php и здесь их обрабатывает и отправляет обратно!
//$_GET
//$_POST

print_r($_POST); //Array ( [login] => Toster2 [password] => Mopster [submit] => Send )

$login =  $_POST['login'];
$password = $_POST['password'];


include('includes/db.php');

$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

if(mysqli_num_rows($count) == 0){
	echo 'Вы не зарегестрированы!';
}
else{
	echo '<br>Привет ' . $login;
}





print_r($users_result);







echo '<br>Ваш логин: ' . $_POST['login'] . '<br>Ваш Пороль: ' .$_POST['password'];  




 ?>