<?php
include 'db_baglan.php';


echo" Burası create dosyasıdır."
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Telefon Rehberi</title>
    </head>
    <body>
        <h1>Telefon Rehberi</h1>
        <form method="POST">
            Adı Soyadı: <input required type="text" name="adisoyadi" placeholder="adisoyadi" /> <br>
            Telefonu: <input required type="text" name="telefonu" placeholder="telefonu" /> <br>
            Birimi: <input required type="text" name="birimi" placeholder="No birimi" /> <br>
            <input type="submit" name="submit" value="Yeni Kişiyi Kaydet" />
        </form>
    </body>
</html>