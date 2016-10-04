<?php
@header('Content-Type: text/html; charset=utf-8');
?>

<?php

$host="localhost" ;      //host name(**)
$db_adi="my";         //oluşturduğumuz veritabanı adıdır.
$user_name="root";      //kullanıcı adı(**)
$password="";               //şifre(**)

$baglan = @mysql_connect($host,$user_name,$password)  or die("Veritabanı Seçilemedi")  ;//database'ye bağlanmayı sağlar(**)

$baglan2 = @mysql_select_db($db_adi, $baglan) or die ("Bağlanamadı");  //mysql database i seç (*)

?>

