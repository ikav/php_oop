<?php

require_once 'classes/Product.php';
require_once 'classes/DigitalProduct.php';
require_once 'classes/WeightProduct.php';
require_once 'classes/PieceProduct.php';

require_once 'func/func.php';

//Несколько обычных товаров
$pieceProduct = new PieceProduct('Бумажная книга "Три мушкетера"', 1000, 1);
$pieceProduct2 = new PieceProduct('Бумажная книга "Основы PHP"', 1750, 3);

//Несколько цифровых товаров
$digitalProduct = new DigitalProduct('Цифровая книга "PHP. OOП"', 1000, 2);
$digitalProduct2 = new DigitalProduct('Цифровая книга "PHP. Паттерны проектирования"', 5000, 7);


printProductInfo($pieceProduct);
printProductInfo($pieceProduct2);
printProductInfo($digitalProduct);
printProductInfo($digitalProduct2);



//echo $digitalProduct->getType();
//echo 'Наименование товара: ' . $digitalProduct->getName() . '<br>';
//echo 'Обычная цена товара: ' . $digitalProduct->getPrice() . '<br>';
//echo 'Цифровая цена товара: ' . $digitalProduct->getDigitalPrice() . '<br>';
//echo 'Количество товара: ' . $digitalProduct->getNum() . '<br>';
//echo 'Общая стоимость товаров: ' . $digitalProduct->getTotalCost() . '<br>';
//echo "<hr><b>Итого по всем товарам данной категории: {$digitalProduct->getProfit()}</b>";
//echo '<hr>';

