<?php
@header('Content-Type: text/html; charset=utf-8');
require "baglan.php";
error_reporting(0);
?>
<link rel="stylesheet" href="css/style.css">
<title>Mukadder Bahadır || Kişisel Blog</title>

  <div class="ana"  align="center">

    <div class="ust" align="center">

        <div class="menu"  align="right">
            <a href="?page=index">Anasayfa</a>
            <a href="?page=software">Yazılım</a>
            <a href="?page=photo">Fotoğraf</a>
			 <a href="?page=projects">Projeler</a>
            <a href="?page=examinations">İncelemeler</a>
            <a href="?page=youtube">Youtube</a>
            <a href="?page=contact">İletişim</a>
        </div>
        <img src="img/my.jpg"  name="kisi" class="kisi" style="
             cursor:pointer;
             height:160px;
             width:160px;
             margin-left:20px;
             margin-top:10% ;
             border-top-right-radius:100px;
             border-bottom-left-radius: 100px;
             border-bottom-right-radius:100px;
             border-top-left-radius:100px;
             border: solid;
             border-color:#ffffff;">       <br>   <br>
        <B style="font-size: x-large">MUKADDER BAHADIR</B><br><br>
        <i><b>Back-End Developer</b></i>
    </div>
    <div class="alt">
      <?php
          if (isset($_GET["page"])) {
              if ($_GET["page"] == index)
                  require "alt.php";
              if ($_GET["page"] == software)
                  require "yazilim.php";
              else if ($_GET["page"] == photo)
                  require "photo.php";
              else if ($_GET["page"] == examinations)
                  require "incele.php";
              else if ($_GET["page"] == projects)
                  require "projects.php";
              else if ($_GET["page"] == youtube)
                  require "youtube.php";
              else if ($_GET["page"] == contact)
                  require "contact.php";

              $id = $_GET ['page'];
              $sorgu = mysql_fetch_array(mysql_query("select * from yaz  WHERE  id='$id'"));
              $basligim = $sorgu ['baslik'];
              $icerigim = $sorgu ['icerik'];

              echo "<h3 style='font-weight:600'> <a>$basligim</a> </h3><br>";
              echo "<h3>$icerigim</h3>";


              $idm = $_GET ['page'];
              $sorgu3 = mysql_fetch_array(mysql_query("select * from youtube  WHERE  id='$idm'"));
              $url = $sorgu3 ['url'];
              $baslikcik = $sorgu3 ['baslik'];
              $aciklamacik= $sorgu3 ['aciklama'];

              echo $url ;
              echo "<br><a>$baslikcik</a>";
              echo "<h3>$aciklamacik </h3>";

              $aydi = $_GET ['page'];
              $sorgu2= mysql_fetch_array(mysql_query("select * from incelemeler  WHERE  id='$aydi'"));
              $baslikar = $sorgu2 ['baslik'];
              $icerikar = $sorgu2 ['icerik'];
              $resimcik = $sorgu2 ['resim'];

              echo "<a>".$baslikar."</a><br>";
              echo $icerikar;

          }else {
          ?>

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
          <?php
          }
        ?>
    </div>
                                <center style="margin-top:20px; font-family:Calibri;">© MUKADDER BAHADIR || 2016</center>
  </div>