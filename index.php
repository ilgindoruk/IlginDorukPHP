<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ilgın Doruk</title>
</head>

<body>
    <?php
    //Yorum satırı ekler
    /*
    Yorum satırları ekler
    */
    $sayi = 10;
    $sayi2 = 5;

    $Ad = "Ilgın Doruk";
    echo ("Merhaba " . $Ad . "<br>");
    echo $sayi++ . "<br>";
    echo "$sayi + $sayi2 =  " . ($sayi + $sayi2);
    ?>

    <form action="islem.php" method="post">
        <input type="text" name="sayi1" id="sayi1"><br>
        <input type="text" name="sayi2" id="sayi2"><br>
        <input type="button" value="Merhaba">
        <input type="reset" value="Temizle">
        <input type="submit" value="Topla"><br>
        <hr>
        <input type="checkbox" name="secenek" value="bilişim">Bilişim <br>
        <input type="radio" name="Cins" id="cins" value="0">Erkek
        <input type="radio" name="Cins" id="cins" value="1">Kadın
        <hr>
        <select name="gunler" id="gunler">

            <option>Günler</option>
            <option value="1">Pazartesi</option>
            <option value="2">Salı</option>
            <option value="3">Çarşamba</option>
            <option value="4">Perşembe</option>
            <option value="5">Cuma</option>
            <option value="6">Cumartesi</option>
            <option value="7">Pazar</option>
        </select>
        <hr>

        <textarea name="Adres" id="Adres" rows="10">

  </textarea>

    </form>
</body>

</html>