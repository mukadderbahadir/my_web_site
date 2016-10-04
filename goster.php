<link rel="stylesheet" href="css/style.css">
    
        <?php
        if (isset($_GET ['page']))
        {
                $id = $_GET ['page'];
                if ($_GET)
                {
                    $id = $_GET ['page'];
                    $sorgu = @mysql_fetch_array(mysql_query("select * from yaz  WHERE  id='$id'"));
                    $basligim = $sorgu ['baslik'];
                    $icerigim = $sorgu ['icerik'];

                    echo "<div class=\"goster\"><h3 style='font-weight:600'> <a>$basligim</a> </h3><br>";
                    echo "<h3>$icerigim</h3></div>";
                }

                    $idm = $_GET ['page'];
                    $sorgu3 = @mysql_fetch_array(mysql_query("select * from youtube  WHERE  id='$idm'"));
                    $url = $sorgu3 ['url'];
                    $baslikcik = $sorgu3 ['baslik'];
                    $aciklamacik = $sorgu3 ['aciklama'];

                    echo $url;
                    echo "<br><a>$baslikcik</a>";
                    echo "<h3>$aciklamacik </h3>";

                    $aydi = $_GET ['page'];
                    $sorgu2 = @mysql_fetch_array(mysql_query("select * from incelemeler  WHERE  id='$aydi'"));
                    $baslikar = $sorgu2 ['baslik'];
                    $icerikar = $sorgu2 ['icerik'];
                    $resimcik = $sorgu2 ['resim'];

					   echo "<div class=\"goster\"><h3 style='font-weight:600'> <a>$baslikar</a> </h3><br>";
                    echo "<h3>$icerikar</h3></div>";
                
        }
        ?>