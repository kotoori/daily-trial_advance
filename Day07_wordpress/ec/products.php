<?php
  require_once 'classes/product.php';

  $products = [
    new Product("avocado", "アボカド", 230, "./images/image_1.jpg"),
    new Product("orange", "みかん", 80, "./images/image_2.jpg"),
    new Product("lemon", "レモン", 130, "./images/image_3.jpg"),
    new Product("pineapple", "パイナップル", 450,"./images/image_4.jpg"),
  ];
?>
