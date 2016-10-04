<?php
@header('Content-Type: text/html; charset=utf-8');
require "../baglan.php";
error_reporting(0);
?>
    <title>YÖNETİM PANELİ</title>
<link rel="stylesheet" href="../css/admin.css">


<?php                       /** YÖNETİCİ GİRİŞİ İLE İLGİLİ İŞLEMLER  **/
Session_start();
$username = $_SESSION['username'];
if ($username){
    echo  "<h2><option>Sayın <A STYLE='color: mediumspringgreen; '>$username</A> ,Hoşgeldiniz...</option><div align='right'><a href ='logout.php' >Çıkış Yap</a></div> </h2> ";
}else{
    echo   "Giriş Yapmadınız.  ";
    header("refresh:2;url= index.php");
    die('2 Saniye Sonra ANA SAYFA ya Gideceksiniz. Bu Süreyi Beklememek İçin
                         <a href="index.php">Buraya Tıklayınız !</a>');
}
?>

   <div class="anamenu" align="center">







           <div class="kolon" align="center" style="border-right: 3px solid;">
               <option><h3>YAZILIM </h3></option><br>

               <?php
               $baslik = mysql_real_escape_string($_POST ['baslik']);
               $haber = mysql_real_escape_string($_POST ['icerik']);
               $gonder = $_POST ["resbuton"];
               $sec = $_POST ["sec"];
               $yazar = $username;

               if($gonder)
               {
                   $sorgu = mysql_query("insert into yaz(baslik,icerik,kategori,yazar) values ('$baslik','$haber','$sec','$yazar')  ");
                   echo "<option>Başarılı İşlem</option>";
                   if ($sorgu) {
                       echo "<option> Ve Veritabanina Kaydedildi. </option>";
                   } else {
                       echo "<option> Ve Veritabanina Kaydedilemedi. </option>";
                   }
               }
               ?>

               <form action="" method="post"  enctype="multipart/form-data">
                   <textarea name="baslik" class="yaz" placeholder="BAŞLIK YAZINIZ..." ></textarea> <br> <br>

                   <textarea name="icerik" class="yaz" placeholder="HABERİ YAZINIZ..."></textarea> <br> <br>

                   <input type="checkbox" name="sec" value="PHP"><option>PHP</option>
                   <input type="checkbox" name="sec" value="CSS"><option>CSS</option>
                   <input type="checkbox" name="sec" value="JQUERY"><option>JQUERY</option>
                   <input type="checkbox" name="sec" value="JAVASCRİPT"> <option>JAVA SCRİPT</option>
				     <input type="checkbox" name="sec" value="ANDROİD"> <option>ANDROİD</option>
                   <br>
                   <input type="submit"  name="resbuton" class="resbut" value="Gönder"/>
               </form>
           </div>



           <div class="kolon" align="center" style="border-right: 3px solid;">
               <option><h3>İNCELEMELER </h3></option><br>

               <?php


               $baslik = mysql_real_escape_string($_POST ['baslik']);
               $icerik = mysql_real_escape_string($_POST ['icerik']);

               if($baslik) {
                   if ($_FILES["resim"]["size"] ) {
                       $resim = $_FILES["resim"]["name"];
                       $yol = "../yuklenen/" . $resim;
                       if (move_uploaded_file($_FILES["resim"]["tmp_name"], $yol)) {
                           $sorgu = mysql_query("insert into incelemeler(baslik,icerik,resim) values ('$baslik','$icerik','$yol')  ");
                           echo "BAŞARILI İŞLEM";
                       }
                       if ($sorgu) {
                           echo " ve veritabanina kaydedildi.";
                       } else {
                           echo " ve veritabanina kaydedilemedi";
                       }
                   } else {
                       echo "Dosya Yuklenemedi";
                   }
               }
               ?>


               <form action="" method="post"  enctype="multipart/form-data">
                   <textarea name="baslik" class="yaz" placeholder="BAŞLIK YAZINIZ..." ></textarea> <br> <br>

                   <textarea name="icerik" class="yaz" placeholder="HABERİ YAZINIZ..."></textarea> <br> <br>

                   <input type="file" class="res" name="resim"/> <br> <br>
                   <input type="submit" name="buton" class="resbut" value="Gonder"/>
               </form>
           </div>






       <div class="kolon" align="center">
           <option><h3> YOUTUBE </h3></option><br>

           <?php
           $url = mysql_real_escape_string($_POST ['url']);
           $baslik = mysql_real_escape_string($_POST ['baslik']);
           $aciklama = mysql_real_escape_string($_POST ["aciklama"]);
           $paylas= $_POST ["paylas"];

           if($paylas)
           {
               echo "<option>Başarılı İşlem</option>";
               $sor = mysql_query("insert into youtube (url, baslik,aciklama) values ('$url','$baslik','$aciklama')  ");
               if ($sor) {
                   echo "<option> Ve Veritabanina Kaydedildi. </option>";
               } else {
                   echo "<option> Ve Veritabanina Kaydedilemedi. </option>";
               }
           }
           ?>

           <form action="" method="post">
               <textarea name="url" class="yaz" placeholder="URL" ></textarea> <br> <br>
               <textarea name="baslik" class="yaz" placeholder="Video Başlığı..." ></textarea> <br> <br>
               <textarea name="aciklama" class="yaz" placeholder="Açıklama..."></textarea> <br> <br>
               <input type="submit" style="margin-top:90px" name="paylas" class="resbut" value="Gönder"/>
           </form>
       </div>

   </div>