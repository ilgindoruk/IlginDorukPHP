<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if(isset($_POST["sayi1"])){  
$sayi1=$_POST["sayi1"];
$sayi2=$_POST["sayi2"];
$toplam=$sayi1+$sayi2;
echo $toplam;
}else{
    echo "Lütfen sayıları giriniz";
}

/*

if(şart){
//şart doğru ise çalışıcak kodlar
}
else{
//şart yanlış ise çalışıcak kodlar 
}
< Küçük mü
> Büyük mü
== Eşit



*/
?>
    
</body>
</html>