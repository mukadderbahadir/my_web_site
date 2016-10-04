<?php
@header('Content-Type: text/html; charset=utf-8');
require "../baglan.php";
error_reporting(0);
?>
            <title>YÖNETİM PANELİ</title>
<link rel="stylesheet" href="../css/admin.css">

</head>

<body>


<?php

session_start();
$username = $_SESSION ['username'];

      session_destroy();

      echo "<p align='center'>Başarılı Bir Şekilde Çıkış Yaptınız !</p>";
      header("refresh:2;url=index.php");
      die('<p align="center"> 2 Saniye Sonra ANA SAYFA ya Gideceksiniz. Bu Süreyi Beklememek İçin <a href="index.php">Buraya Tıklayınız !</a></p>');

?>
</body>
</html>