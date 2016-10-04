<div class="yazilim">
    <h3><b><a>YAZILIM </a></b></h3>
    <?php
    Session_start();
    $username = $_SESSION['username'];
    $sorgu=mysql_query("select * from yaz order by id desc limit 0,30000");
    if (mysql_num_rows($sorgu)){
        while($cek = mysql_fetch_array($sorgu)) {
            $id = $cek ['id'];
            $icerik = $cek ['icerik'];
            $baslik = $cek ['baslik'];
            $tarih = $cek ["tarih"];
            $veri2 = explode(":",$tarih);
            $category = $cek ["kategori"];
            $yazar = $cek ["yazar"];

            echo "<h3 style='font-weight: 600'> <a href='index.php?page=$id'>$baslik </a> </h3>";
            echo " <div class='user' align='left'>  <img src='img/icon.png' width='25' height='25'> $category
                         <img src='img/icon_user.png' width='25' height='25' >$yazar
                         <img src='img/time.png' width='25' height='25' > $veri2[0]:$veri2[1]</div><br>";
            echo substr('<h3>'.$icerik.'</h3>',0,500).'<hr>';
        }
    }
    ?>
</div>
