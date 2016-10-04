
<?php
@header('Content-Type: text/html; charset=utf-8');
require "../baglan.php";
error_reporting(0);
?>

<title>YÖNETİM PANELİ</title>
<link rel="stylesheet" href="../css/admin.css">

</head>

<body>


<div class="indexmenu" align="center">
    <h2>GİRİŞ YAPINIZ ! </h2>

<form action="login.php"  method="post">

                <input type="text"  class="yaz" name="username"/>

                <input type="password" class="yaz" name="password"/>
    <BR>

                <input type="submit" CLASS="buton" value="Gönder"/>

        </form>
</div>
</body>
</html>