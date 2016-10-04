<?php
@header('Content-Type: text/html; charset=utf-8');
require "../baglan.php";
error_reporting(0);
?>

<title>YÖNETİM PANELİ</title>

<link rel="stylesheet" href="../css/admin.css">

<p>
<?php

session_start();

$username = $_POST['username'];
$password = $_POST ['password'];

   if ($username && $password){

       $sorgula = @mysql_query ("select * from admin where kullaniciadi='$username' and sifre = '$password'");
       $say = mysql_num_rows ($sorgula);

                     if ($say !=0){

                         $_SESSION['username'] = $username ;

                         echo "<p align='center'> Başarılı Giriş !</p> ";
                         header("refresh:3;url=admin.php");
                         die('<p align="center">3 Saniye Sonra Yönetim Paneline Gideceksiniz. Bu Süreyi beklememek İçin
                         <a href="admin.php">Buraya Tıklayınız !</a></p>');

                     }else{
                         echo "<p align='center'>Başarısız Giriş !</p> ";
                         header("refresh:1;url=index.php");
                     }
   }else
   {
        echo   "<p align='center'>Alanları Boş Bırakmayınız !</p>";
        require ('index.php');
   }

?>
</p>
</body>
</html>
