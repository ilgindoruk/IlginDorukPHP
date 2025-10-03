<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="karekupornek.php" method="post">
     <input type="number" name="sayi" id="sayi1"><br>
     <input type="radio" name="secim" id="Kare" value="0" checked>Kare
     <input type="radio" name="secim" id="Küp" value="1">Küp
     <input type="submit" value="Gönder">

     </form>
     
     <?php
     if (isset($_POST["sayi"])) {
        $sayi=$_POST["sayi"];
        $secim=$_POST["secim"];

        if ($secim==0) {
            echo"$sayi karesi =".($sayi*$sayi);
        }elseif ($secim==1) {
            echo"$sayi karesi =".($sayi*$sayi*$sayi);
        }else {
            echo"İşlem seç";
        }
     }
         
       
    
    
         

 

     ?>



</body>
</html>