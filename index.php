
   
   <?php  
//РАБОТА С ДАТАМИ В PHP
    
    $connection = mysqli_connect('127.0.0.1','mysql','mysql', 'test_db');
    
    if($connection == false){
        echo'не удалось подлючиться к базе данных!<br>';
        echo mysqli_connect_error();
        exit();
     }

 echo date('d.m.Y') . '<br>'; //день-месяц-год 
 echo date('d.m.Y H:i:s') . '<br>'; //день-месяц-год 
 echo date('Y-m-d H:i:s') . '<br>'; //день-месяц-год 
 echo date('d.m.Y') . '<br>'; //день-месяц-год 


$start_date = '2017-03-12 14:00:00';
$start_date_timestamp = strtotime($start_date);  //timeStamp это перевод строчной даты в секунды с даты основания эпохи линукс до тукущей даты-строки

$time_between = (time() - $start_date_timestamp) /60/60/24; 
echo $start_date_timestamp . '<br>';
echo $time_between;

echo '<br>Время между ' . date('d.m.Y H:i:s', $start_date_timestamp) . ' и '. date('d.m.Y H:i:s'). ' Равно  ' .floor($time_between) . ' дней' ; //Первая дата указывает дату-строку но в указанном формате
    

?>


<form action = "/handle.php" method = "POST">
    <input type="text" name="login" placeholder="Введите ваш логин">
    <input type="text" name="password" placeholder="Введите ваш логин">
    <hr>
    <input type="submit" value='Send'>

</form>