<?php

$nama="Dezzzz";
$panjang=10;
$lebar=5;

// Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam totam fugiat esse accusamus harum itaque ratione, quaerat neque ut ipsum dolore voluptatum iste dolorem corrupti ea quae? Fugit, ipsa nobis.

?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Nama Saya <?php echo $nama; ?></h1>
    <p><?php echo"ini adalah paragraph";?></p>
    <?php
            echo"<h1>Ini adalah Header yang ditulis didalam tag PHP</h1>"
    ?>
    <?php echo $panjang * $lebar;
    ?>
    
</body>
</html>