 
<?php  
  $connection = mysqli_connect('127.0.0.1','mysql','mysql', 'test_db');
    
    if($connection == false){
        echo'не удалось подлючиться к базе данных!<br>';
        echo mysqli_connect_error();
        exit();
     }