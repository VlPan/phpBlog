
   
   <?php  

    
    $connection = mysqli_connect('127.0.0.1','mysql','mysql', 'test_db');
    
    if($connection == false){
        echo'не удалось подлючиться к базе данных!<br>';
        echo mysqli_connect_error();
        exit();
     }

    echo 'Подлючение есть!';
$result = mysqli_query($connection,"SELECT * FROM `articles_categories`");


if(mysqli_num_rows($result) == 0 ){
    
    echo 'записей не найдено!';
}else{


?> 

<ul>
    
    <?php 
        while(($cat = mysqli_fetch_assoc($result))){
            $articles_count = mysqli_query($connection,'SELECT COUNT(`id`) AS `total_num` FROM `articles` WHERE `categorie_id` =' . $cat['id']);
            $articles_count_result = mysqli_fetch_assoc($articles_count);
            echo '<li>' . $cat['title'] . ' (' . $articles_count_result['total_num'] . ')</li>';
        }
     ?>
</ul>

<?php 
}
    mysqli_close($connection);
?>




    


