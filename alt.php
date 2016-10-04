<?php
@header('Content-Type: text/html; charset=utf-8');
require "baglan.php";
error_reporting(0);
?>
<link rel="stylesheet" href="css/style.css">
<title>Mukadder Bahadır || Kişisel Blog</title>
<div class="yazilim"><h2><b><a href="?page=software" style="color:#9D174A;">YAZILIM</a></b></h2>
    <?php  Session_start();  $username = $_SESSION['username'];
    $sorgu = mysql_query("select * from yaz order by id desc limit 0,2");

    if (mysql_num_rows($sorgu)) {
        while ($cektik = mysql_fetch_array($sorgu)) {
            $id = $cektik ['id'];
            $icerik = $cektik ['icerik'];
            $baslik = $cektik ['baslik'];
            $tarih = $cektik ["tarih"];
            $veri2 = explode(":", $tarih);
            $category = $cektik ["kategori"];
            $yazar = $cektik ["yazar"];
            echo "<h3 style='font-weight: 600'> <a href='index.php?page=$id'>$baslik </a> </h3>";
            echo " <div class='user' align='left'>  <img src='img/icon.png' width='25' height='25'> $category
                             <img src='img/icon_user.png' width='25' height='25' >$yazar
                             <img src='img/time.png' width='25' height='25' > $veri2[0]:$veri2[1]</div><br>";
            echo substr('<h3>' . $icerik . '</h3>', 0, 500) . '<hr>';
        }} ?>
</div>

<div class="incele">
    <h2><b><a href="index.php?page=examinations" style="color:#9D174A;">İNCELEMELER</a></b></h2>
    <?php
    //
    $sorgunuz = mysql_query("select * from incelemeler ORDER  BY id DESC  limit 0,2 ");
    if (mysql_num_rows($sorgunuz))
    {
        while($cek = mysql_fetch_array($sorgunuz))
        {
            $aydi = $cek ["id"];
            $baslik = $cek["baslik"];
            $icerik = $cek ["icerik"];


            echo '<img src="yuklenen/'.$cek[resim].'"  style="height:300; width:80%;"/><br>';
            echo "<h3 style='font-weight: 600;'> <a href='index.php?page=$aydi'>$baslik</a></h3>";
            echo "<h3>$icerik</h3>".'<hr>';
        }
    }
    ?>
</div>

<div class="youtube" >
    <h2><b><a href="https://www.youtube.com/channel/UClCJaXO1kWceVPLg4bcB9Rw" style="color:#9D174A;">YOUTUBE KANALIM</a></b></h2>
    <?php
    // <iframe width="640" height="360" src="https://www.youtube.com/embed/fi1-agMA5tw" frameborder="0" allowfullscreen></iframe>
    $sorgula=mysql_query("select * from youtube order by id desc limit 0,2");
    if (mysql_num_rows($sorgula)){
        while($cekelim = mysql_fetch_array($sorgula)) {
            $idm = $cekelim ["id"];
            $url =$cekelim['url'];
            $baslik = $cekelim ['baslik'];
            $aciklama = $cekelim ["aciklama"];

            echo  $url.'<br>';
            echo "<h1><a href='index.php?page=$idm'>$baslik</a></h1>";
            echo "<h3>$aciklama</h3>";
            echo "<hr>";
        }
    }
    ?>
    <div class="abone_ol">
        <a href="https://www.youtube.com/channel/UClCJaXO1kWceVPLg4bcB9Rw"> <option>Devamı İçin ALAKASIZ TEKNOLOJİ Kanalına Abone Ol :)</option></a>

        <div class="buton" align="center">
            <script src="https://apis.google.com/js/platform.js"></script>
            <script>
                function onYtEvent(payload)
                {
                    if (payload.eventType == 'subscribe') {
                    } else if (payload.eventType == 'unsubscribe') {
                    }
                    if (window.console) { // for debugging only
                    }
                }
            </script>
            <div class="g-ytsubscribe" data-channelid="UClCJaXO1kWceVPLg4bcB9Rw" data-layout="default" data-theme="dark" data-count="default" data-onytevent="onYtEvent"></div>
        </div>
    </div>
</div>

</div>