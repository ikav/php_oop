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
      $dir = "public/img";
      $file = scandir($dir);
      
      foreach ($file as $value) {
        //Пропускаем служебную информацию
        if ($value == '.' || $value == '..') continue;
    ?>
      
    <li class="product-item">
      <p>
        <a href="<?=$dir."/".$value?>" target="<?=$value?>"><img src="<?=$dir."/".$value?>" width="184" alt="<?=$value?>"></a>
      </p>
      <div><?=$value?></div>
    </li>
    
    <?php
      }
    ?>    
</html>



