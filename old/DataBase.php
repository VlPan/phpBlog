
<?php
include('includes/db.php');
?>

<form method="POST" action ="/handle.php">

<input type="text" placeholder =" Ваш пороль" name="login">
<input type="text" placeholder =" Ваш логин" name = "password">
<hr>
<input type="submit" value="отправить">

</form>

































<?php
/*$start_date ='2016-12-10 14:00:00';
$start_date_timestamp = strtotime($start_date);

echo $start_date_timestamp . '<br>'; // до startdate
echo time(). '<br>'; // До сейчас*/




















/*$result = mysqli_query($connection," SELECT * FROM `categories_id`");

$recNum = mysqli_num_rows($result);

if ($recNum == 0){

 echo "Записи не найдены";

}
else{


?>



<ul>
	<?php
	echo "Количество записей: " . $recNum . '<br>';
	while($record = mysqli_fetch_assoc($result))
	{
		$articles_count = mysqli_query($connection, "SELECT COUNT(`id`) AS `total_count` FROM `articles` WHERE `categorie_id` = " . $record['id']);
		$articles_count_result = mysqli_fetch_assoc($articles_count);
		echo "<li>" . $record["title"].'(' . $articles_count_result['total_count'] . ')' . "</li><hr>";

	}

	?>
</ul>

<?php
}
?>


<?php

mysqli_close($connection);

?>*/


