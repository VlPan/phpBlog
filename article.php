<?php include 'includes/config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Блог IT_Минималиста!</title>

  <!-- Bootstrap Grid -->
  <link rel="stylesheet" type="text/css" href="/media/assets/bootstrap-grid-only/css/grid12.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <!-- Custom -->
  <link rel="stylesheet" type="text/css" href="/media/css/style.css">
</head>
<body>

<?php 
include "includes/header.php"
?>

<?php 
  $article = mysqli_query($connection,"SELECT * FROM `articles` WHERE `id`=" . (int) $_GET['id']);

  if(mysqli_num_rows($article) <=0 ){
 ?>

<div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
            
              <h3>Сатья не найдена!</h3>
              <div class="block__content">
                <img src="/media/images/post-image.jpg">

                <div class="full-text">
                    Запрашиваемая вами статья не существует!
                </div>
              </div>
            </div>

            
          </section>
          <section class="content__right col-md-4">
         <?php 
          include "includes/sidebar.php";
         ?>
          </section>
        </div>
      </div>

 <?php } 
 else{
  $art = mysqli_fetch_assoc($article);  
  mysqli_query($connection, 'UPDATE `articles` SET `views` = `views` + 1 WHERE `id` ='. (int)$art['id'] );
  ?>
    <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
            <a href="">просмотров:  <?php echo $art['views'] ?></a>
              <h3><?php echo $art['title'] ?>$</h3>
              <div class="block__content">
                <img src="/static/images/<?php echo $art['image'] ?>">

                <div class="full-text">
                   <?php echo $art['text'] ?>
                </div>
              </div>
            </div>

            
          </section>
          <section class="content__right col-md-4">
         <?php 
          include "includes/sidebar.php";
         ?>
          </section>
        </div>
      </div>

  <?php
  }?>
  
 
  <div id="wrapper">

<div class="block">
                <h3>Комментарии</h3>
                <a href="#comment-add-form">Добавить свой</a>
                <div class="block__content">
                  <div class="articles articles__vertical">

                         <?php 

                   $comments = mysqli_query($connection,"SELECT * FROM `comments` WHERE `articles_id` =" . (int) $art['id'] 
                    . " ORDER BY `id` DESC");
                    
                    
                    
                    if(mysqli_num_rows($comments) <= 0){
                      echo 'Нет комментраиев';
                    }

                      while ( $comment = mysqli_fetch_assoc($comments)) {
                         ?> 
                    }

                    <article class="article">
                      <div class="article__image" style="background-image: url(https://www.gravatar.com/avatar/<?php echo md5($comment['email']) ?>?s=125")></div>
                      <div class="article__info">
                        <a href="/article.php?id= <?php echo $comment['id']; ?>"><?php echo $comment['author']; ?></a>
                        <div class="article__info__meta">
                         
                        </div>
                        <div class="article__info__preview"><?php echo strip_tags($comment['text'] , 0 , 100,'utf-8') . ' ...'; ?></div>
                      </div>
                    </article>

                         <?php  
                      }
                     ?> 
                     <hr>
            <div class="block" id="comment-add-form">
              <h3>Добавить комментарий</h3>
              <div class="block__content">
                <form class="form" action = '/article.php?id=<?php echo $art['id'];?>' method = 'POST'>
                  <div class="form__group">
                    <div class="row">
                      <div class="col-md-6">
                        <input type="text" class="form__control" required="" name="name" placeholder="Имя">
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form__control" required="" name="nickname" placeholder="Никнейм">
                      </div>
                    </div>
                  </div>
                  <div class="form__group">
                    <textarea name="text" required="" class="form__control" placeholder="Текст комментария ..."></textarea>
                  </div>
                  <div class="form__group">
                    <input type="submit" class="form__control" name="do_post" value="Добавить комментарий">
                  </div>
                </form>
              </div>
            </div>

                  </div>
                </div>
              </div>
        

    
    </div>

    <?php 
      include('includes/footer.php');
     ?>

  </div>

</body>
</html>