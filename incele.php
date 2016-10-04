<?php
@header('content type : text/html; charset = utf-8');
require "baglan.php";
error_reporting(0);
?>
<link rel="stylesheet" href="css/style.css">
<title>Mukadder Bahadır || Kişisel Blog</title>

   <div class="incele">
                            <h3><b><a>İNCELEMELER </a></b></h3>

        <?php
          //  <h2><b><a href="index.php?page=incelemeler" style="color:#9D174A;">İNCELEMELER</a></b></h2>
            $sorgunuz = mysql_query("select * from incelemeler ORDER  BY id DESC  limit 0,30000 ");

            if (mysql_num_rows($sorgunuz))
            {
                 while($cek = mysql_fetch_array($sorgunuz))
                 {
                     $id = $cek ['id'];
                     $baslik = $cek["baslik"];
                     $icerik = $cek ["icerik"];
                     $resim = $cek ["resim"];

                     echo '<img src="yuklenen/'.$cek[resim] .'" style="height:300px; width:550px;" />';
                     echo "<h3 style='font-weight: 600;'> <a href='index.php?page=$id'>$baslik </a></h3>";
                     echo "<h3>$icerik</h3>".'<hr>';
                 }
            }
        ?>
   </div>