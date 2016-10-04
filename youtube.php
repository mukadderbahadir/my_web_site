
<?php
@header('Content-Type: text/html; charset=utf-8');
require "baglan.php";
error_reporting(0);
?>
     <div class="youtube" >
            <h2><b><a href="https://www.youtube.com/channel/UClCJaXO1kWceVPLg4bcB9Rw" >YOUTUBE KANALI</a></b></h2>
         <?php
         // <iframe width="640" height="360" src="https://www.youtube.com/embed/fi1-agMA5tw" frameborder="0" allowfullscreen></iframe>
         $sorgu=mysql_query("select * from youtube order by id desc limit 0,1000000000000");
         if (mysql_num_rows($sorgu)){
             while($cek = mysql_fetch_array($sorgu)) {

                 $url =$cek['url'];
                 $baslik = $cek ['baslik'];
                 $aciklama = $cek ["aciklama"];
                 


                 echo  $url.'<br>';
                 echo "<h1><a>$baslik</a></h1>";
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
