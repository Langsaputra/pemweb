<?php

  $name = "Fox" ;
  $umur = 10 ;
  $title = "Praktik 1 PHP"

  //   echo "Welcome " . $name. " dengan umur " . $umur;
  
  define('phi', 3.14);
  $jari = 8;

  $keliling = 2 * phi * $jari;
  $luas = 3.14 * $jari * $jari;

  echo $keliling;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>  <?php echo $title ?>  </h1>

    <p>Keliling Lingkaran :  <?php echo $keliling ?> </p>
</body>
</html>