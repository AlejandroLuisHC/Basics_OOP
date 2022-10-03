<?php 
    require_once('../src/products/instruments/class_guitar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $lesPaul = new Guitar('guitar', 950, 'electric', 'Gibson');

        echo '<br>';
        echo '<br> Sample: <br>';
        echo " Instrument family: {$lesPaul::$family}";
        echo '<br>';
        echo $lesPaul -> playSampleSong();
        echo '<br>';
        
        echo '<br> Price before: <br>';
        echo $lesPaul -> getPrice();
        echo '<br>';

        echo '<br> Price after: <br>';
        $lesPaul -> setPrice(900);
        echo $lesPaul -> getPrice();
        echo '<br>';
        
        echo '<br> All information: <br>';
        echo $lesPaul -> getData();
        echo '<br>';
        echo '<br>';
        
        echo '<br> *Clicked add to cart button* <br>';
        $lesPaul -> addToCart();
        echo '<br>';
        echo '<br>';
    ?>
</body>
</html>
    
  