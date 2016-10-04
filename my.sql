-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Nis 2016, 17:30:55
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `my`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ad` varchar(255) NOT NULL,
  `soyad` varchar(255) NOT NULL,
  `kullaniciadi` varchar(20) NOT NULL,
  `sifre` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `ad`, `soyad`, `kullaniciadi`, `sifre`, `mail`) VALUES
(3, 'mukadder', 'bahadır', 'radmin', 'admin61', 'mukadderbahadir61@gmail.com'),
(4, 'rumeysa', 'durmuş', 'rumi', '27102012', 'rumeysadurmus@hotmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `incelemeler`
--

CREATE TABLE IF NOT EXISTS `incelemeler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) NOT NULL,
  `icerik` varchar(255) NOT NULL,
  `resim` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Tablo döküm verisi `incelemeler`
--

INSERT INTO `incelemeler` (`id`, `baslik`, `icerik`, `resim`) VALUES
(7, 'EKRAN BÃ–LME Ä°ÅžLEMÄ°', 'WÄ°NDOWS + P TUÅžLARINI KULLANARAK EKRANINIZI Ä°KÄ° MONÄ°TÃ–RE BÃ–LEBÄ°LÄ°RSÄ°NÄ°Z..', '../yuklenen/bg.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yaz`
--

CREATE TABLE IF NOT EXISTS `yaz` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `baslik` mediumtext NOT NULL,
  `icerik` longtext NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kategori` mediumtext NOT NULL,
  `yazar` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=243 ;

--
-- Tablo döküm verisi `yaz`
--

INSERT INTO `yaz` (`id`, `baslik`, `icerik`, `tarih`, `kategori`, `yazar`) VALUES
(240, 'Terminalden GitHubâ€™a Dosya YÃ¼kleme', 'Selamlar, ne zamandÄ±r yazmÄ±yordum. YGSâ€™de geldi geÃ§ti bende artÄ±k geceleri daha sÄ±k Ã§alÄ±ÅŸmaya baÅŸladÄ±m. GitHub da bu sÄ±ralar daha fazla aktif olmaya Ã§alÄ±ÅŸÄ±yorum bundan sonrada aÃ§Ä±k kaynaÄŸa daha fazla destek vermek iÃ§in daha fazlada aktif olacaÄŸÄ±m gibi. Hem kendime kaynak olmasÄ± amacÄ±yla hemde Ã¶ÄŸrendiklerimi paylaÅŸma amacÄ±yla Git Terminalde kullandÄ±ÄŸÄ±m kodlarÄ± kÄ±sa kÄ±sa anlatarak makale olarakşdhlşsnmkopyopugkjbnjupğyouglhvbnkjlşoupyouıglkdjşksljfğo8tp7euıgkşfhjsehp8srıuyejr8coıeŸrendiklerimi paylaÅŸma amacÄ±yla Git Terminalde kullandÄ±ÄŸÄ±m kodlarÄ± kÄ±sa kÄ±sa anlatarak makale olarakşdhlşsnmkopyopugkjbnjupğyouglhvbnkjlşoupyouıglkdjşksljfğo8tp7euıgkşfhjsehp8srıuyejr8coıeŸrendiklerimi paylaÅŸma amacÄ±yla Git Terminalde kullandÄ±ÄŸÄ±m kodlarÄ± kÄ±sa kÄ±sa anlatarak makale olarakşdhlşsnmkopyopugkjbnjupğyouglhvbnkjlşoupyouıglkdjşksljfğo8tp7euıgkşfhjsehp8srıuyejr8coıeŸrendiklerimi paylaÅŸma amacÄ±yla Git Terminalde kullandÄ±ÄŸÄ±m kodlarÄ± kÄ±sa kÄ±sa anlatarak makale olarakşdhlşsnmkopyopugkjbnjupğyouglhvbnkjlşoupyouıglkdjşksljfğo8tp7euıgkşfhjsehp8srıuyejr8coıe', '2016-04-10 15:22:42', 'PHP', 'radmin'),
(241, 'â€œindir.com Mobil Uygulama YarÄ±ÅŸmasÄ± 2016â€ BaÅŸladÄ±!', 'Mobil geliÅŸtiricilere ve eko-sisteme destek vermek amacÄ±yla indir.com tarafÄ±ndan dÃ¼zenlenen â€œindir.com Mobil Uygulama YarÄ±ÅŸmasÄ± 2016â€ katÄ±lÄ±m sÃ¼reci 1 Ocak 2016 tarihi itibarÄ±yla baÅŸladÄ±. Bireysel veya en fazla 3 kiÅŸilik ekipten oluÅŸan herkesin katÄ±labileceÄŸi yarÄ±ÅŸmada, 2016 yÄ±lÄ± iÃ§erisinde yayÄ±mlanmÄ±ÅŸ olan Ã¶zgÃ¼n uygulamalar yarÄ±ÅŸacak. KatÄ±lÄ±m SÃ¼reci: 1 Ocak 2016 tarihi itibarÄ±yla katÄ±lÄ±m sÃ¼reci baÅŸlayan yarÄ±ÅŸmanÄ±n son baÅŸvuru', '2016-04-10 15:23:06', 'CSS', 'radmin'),
(242, 'Html5 CSS3 ve JS ile Web TasarÄ±mÄ± KitabÄ± Ä°ncelemesi #1', 'Merhaba arkadaÅŸlar, Bana Ã§ok fazla Html , css, javascript iÃ§in hangi kitabÄ± almalÄ±yÄ±z tarzÄ±nda sorular geliyor. Bende bundan sonra sizlere bu videoda olduÄŸu gibi kitap Ã¶nerileri iÃ§in iyisiyle kÃ¶tÃ¼sÃ¼yle kitaplarÄ± tanÄ±tacaÄŸÄ±m. Bu videomuzda Burak Tokakâ€™Ä±n Html5 CSS3 ve JS ile web tasarÄ±mÄ± kitabÄ±nÄ± sizlere anlatmaya Ã§alÄ±ÅŸacaÄŸÄ±m. Web TasarÄ±ma, Web GeliÅŸtirmeye yeni baÅŸlayacaksanÄ±z zaten Ã¶ÄŸrenmeniz gereken', '2016-04-10 15:23:41', 'JQUERY', 'radmin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `youtube`
--

CREATE TABLE IF NOT EXISTS `youtube` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `aciklama` longtext NOT NULL,
  `eklenme_tarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Tablo döküm verisi `youtube`
--

INSERT INTO `youtube` (`id`, `url`, `baslik`, `aciklama`, `eklenme_tarihi`) VALUES
(21, '<iframe width="560" height="315" src="https://www.youtube.com/embed/fi1-agMA5tw" frameborder="0" allowfullscreen></iframe>', 'HTC ONE M10 TANITIM', 'Mobil cihaz sektÃ¶rÃ¼, o kadar Ã§alkantÄ±lÄ± bir sektÃ¶r ki, kullanÄ±cÄ±lar dev markalara hemen cezayÄ± kesebiliyor. Bunun son dÃ¶nemlerde en Ã¶n plana Ã§Ä±kan Ã¶rneÄŸi HTC. BirkaÃ§ sene Ã¶ncesine kadar Ã¶zellikle TÃ¼rkiye pazarÄ±nda zirveye oynayan HTC, bir sÃ¼re sonra yeni model telefonlarda kullanÄ±cÄ±larÄ±n beklentilerinin altÄ±nda kalmÄ±ÅŸ ve zirve yarÄ±ÅŸÄ±ndan uzaklaÅŸmÄ±ÅŸtÄ±\r\n\r\nTabii durum sadece TÃ¼rkiye''de deÄŸil, dÃ¼nya genelinde de bu ÅŸekilde. Zira geÃ§tiÄŸimiz sene Mobile World Congress''te One M9''u tanÄ±tan HTC, baÅŸta Samsung Galaxy S6 olmaz Ã¼zere pek Ã§ok cihazÄ±n da gerisinde kalarak bekleyenleri Ã¼zmÃ¼ÅŸtÃ¼. Fakat dediÄŸimiz gibi; mobil cihaz sektÃ¶rÃ¼ deÄŸiÅŸken. Ve bunu iyi bilen HTC, One M10 ile eskiyi unutturmaya geliyor.', '2016-04-14 19:26:49'),
(22, '<iframe width="560" height="315" src="https://www.youtube.com/embed/a7FzWCwwA1s" frameborder="0" allowfullscreen></iframe>', 'iPhone Ultra - iPhone 7 TanÄ±tÄ±m ', 'Appleâ€™Ä±n eylÃ¼l ayÄ±nda iPhone 6s ve iPhone 6s Plus adÄ±ndaki yeni iPhone modelleri Ã¼zerindeki Ã§alÄ±ÅŸmalarÄ± devam ederken iPhone 7 ile ilgili konsept Ã§alÄ±ÅŸmalarÄ± ÅŸimdiden baÅŸladÄ±.\r\n\r\nHollandalÄ± grafik tasarÄ±mcÄ±sÄ± Yasser Farahi, iPhone 7â€™nin konsept videosunu ve fotoÄŸraflarÄ±nÄ± yayÄ±nladÄ±. CultOfMacâ€™in haberine gÃ¶re Farahiâ€™nin konseptinde kablosuz ÅŸarj ve stereo ses teknolojileri yer alÄ±yor. Ses tuÅŸlarÄ± sol taraftan saÄŸ tarafa alÄ±nmÄ±ÅŸ olan konsept iPhone 7â€™nin inceliÄŸi ise 6,1 mm olarak ayarlanmÄ±ÅŸ. iPhone 6â€™nÄ±n inceliÄŸinin 6.9 mm olduÄŸunu ve arasÄ±nda 0.8 mmâ€™lik bir farkÄ±n olduÄŸunu sÃ¶yleyelim. \r\n\r\nFarahiâ€™nin 114 gram aÄŸÄ±rlÄ±ÄŸÄ±nda olacaÄŸÄ±nÄ± iddia ettiÄŸi iPhone 7â€™nin 1920 x 1080 piksel Ã§Ã¶zÃ¼nÃ¼rlÃ¼ÄŸÃ¼nde ve 401 ppi piksel yoÄŸunluklu 4.7 inÃ§ safir cam ekranla gelmesi bekleniyor. A10 iÅŸlemci, 5 GB RAM (!), 32/64/128 GB dahili hafÄ±za, 4K video kaydedebilen 12 megapiksel optik gÃ¶rÃ¼ntÃ¼leme sabitlemeli kamera ve 5 megapiksel FaceTime kamerayla birlikte geleceÄŸi sÃ¶yleniyor.', '2016-04-14 19:57:46');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
