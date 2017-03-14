
   
   <?php  

    
    $connection = mysqli_connect('127.0.0.1','mysql','mysql', 'test_db');
    
    if($connection == false){
        echo'не удалось подлючиться к базе данных!<br>';
        echo mysqli_connect_error();
        exit();
    }

    echo 'Подлючение есть!';
$result = mysqli_query($connection,"SELECT * FROM `articles_categories`");

?>

<ul>
    
    <?php 
        while(($cat = mysqli_fetch_assoc($result))){
            echo '<li>' . $cat['title'] . '</li>';
        }
     ?>
</ul>

<?php 
    mysqli_close($connection);
?>




    


