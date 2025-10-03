<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ?>
    <form action="poznegornek.php" method="post">
    <input type="number" name="sayi" id="sayi1"><br>
    <input type="submit" value="Gönder"> <br>

    </form>

    <?php
   if(isset($_POST["sayi"]) && !empty($_POST["sayi"])){

        $sayi=$_POST["sayi"];
        if($sayi>0){
            echo"Pozitif";
        }elseif($sayi<0){
            echo"Negatif";
        }else{
            echo"Sayi sıfırdır";
        }
    }

    else{
        echo"Lütfen bir sayı giriniz";

    }






    ?>
</body>
</html>