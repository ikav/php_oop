<?php
  include_once "config/config.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Птички</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/style.css" rel="stylesheet" >
  </head>
  <body>
    <h1>Птички во всей красе</h1>
    <!-- Фото галерея -->
    <ul class="products-list catalog-products-list">
      
    <?php
      $sql = "select * from birds order by numViews desc";
      $res = mysqli_query($connect, $sql);
      if (mysqli_num_rows($res) > 0) : 
        while ($data = mysqli_fetch_assoc($res)) :
    ?>
      
    <li class="product-item">
      <p>
        <a href="card-of-bird.php?id=<?=$data['id']?>" target="_blank">  
          <img src="<?=$data['url_small']?>" alt="<?=$data['description']?>">
        </a>
      </p>
      <div><?=$data['name']?></div>
    </li>
    
    <?php 
        endwhile;
      else :
        echo 'Запрос не содержит данных!';
      endif; 
      
      mysqli_close($connect);
    ?>    
</html>



