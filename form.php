<!DOCTYPE html>
<html lang="tr">
<head>
    <link rel="icon" href="apple.png" size"32x32"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>
    <?php

    ?>
    <form action="form.php" method="post">
     <input type="text" name="sayi1" id="sayi1"><br>
     <input type="text" name="sayi2" id="sayi2"><br>
     <select name="islem" id="islem">
     <hr>
     <option value="0">+</option>
     <option value="1">-</option>    
     <option value="2">*</option>
     <option value="3">/</option>
     <input type="submit" value="işlem">
     </select>
    </form>
    <hr>
     <?php
    if(isset($_POST["sayi1"])){
    $sayi1=$_POST["sayi1"];
    $sayi2=$_POST["sayi2"];
    $islem=$_POST["islem"];

      if($islem==0){
        echo "$sayi1 + $sayi2 = " .($sayi1+$sayi2); 
      }
    
      if($islem==1){
        echo "$sayi1 - $sayi2 = " .($sayi1-$sayi2); 
      }

      if($islem==2){
        echo "$sayi1 * $sayi2 = " .($sayi1*$sayi2); 
      }

      if($islem==3){
        echo "$sayi1 / $sayi2 = " .($sayi1/$sayi2); 
      }
    }

    ?>
</body>
</html>