<script src="ckeditor/ckeditor.js"></script>

<link href="../codecolor/prism.css" rel="stylesheet" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<style>
  .no-js #loader { display: none; }.js #loader { display: block; position: absolute; left: 100px; top: 0; }.se-pre-con {	position: fixed;	left: 0px;	top: 0px;	width: 100%;	height: 100%;	z-index: 9999;	background: url() center no-repeat #fff;}
  </style>
<script>

$('.text').html(function(i, html) {
  var chars = $.trim(html).split("");

  return '<span>' + chars.join('</span><span>') + '</span>';
});

</script>
<div class="se-pre-con"></div>
<?php


/* Veritabanı ayarları */
$mysqlsunucu = "localhost";//Host isminiz bu genellikle localhost olur 
$mysqlkullanici = "root";//Mysql kullanıcı adınız
$mysqlsifre = "";//Mysql kullanıcı adı şifreniz
$dbname= "icerikler";//Database ismi
//bunları doğru girdiğinizden emin olun aksi taktirde sistem çalışmaz

/* Diğer ayarlar */
$siteismi ="Al0nea";//Websitenizin ismi
$sitelink ="http://localhost"; //http veya https ile başlamalısınız  en sona / koymayın site dosyalarını en üst dizine atın aksi taktirde sistem çalışmaz
$kisa ="70";//İndex kısmındaki içerik id kısmının altındaki önizleme kısmındaki gösterilicek karakter miktarı için ayar size 70 de kalmasını öneriyorum ama tabi size kalmış birşey
$hakkimizda ="http://alonea.cf/ kayıt olmayı unutmayınız :)";//Footer kısmındaki hakkımızda yazısıdır
$kategoriler ="Ckeditor paylaşım sitesi, blog sitesi, kişisel blog";//Footer kısmındaki kategoriler kısmıdır
/* Hızlı linkler */
/* Footer kısmındakilerdir */
$link1i="Al0nea Development";//link 1 ismi
$link1="http://alonea.cf";//link 1 linki :D

$link2i="";//link 2 ismi
$link2="";//link 2 linki :D

$link3i="";//link 3 ismi
$link3="";//link 3 linki :D

$link4i="";//link 4 ismi
$link4="";//link 4 linki :D

$link5i="";//link 5 ismi
$link5="";//link 5 linki :D
/* Sosyal medya linkleri http/https olarak giriniz yoksa hata verir */
$facebook="";//facebook linkiniz
$twitter="";//twitter linkiniz
$dribbble="";//dribbble linkiniz
$linkedin="";//linkedin linkiniz

try {
    $conn = new PDO("mysql:host=$mysqlsunucu;dbname=$dbname;charset=utf8", $mysqlkullanici, $mysqlsifre);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {/* Hata olursa ekrana yazdırıyoruz */
    echo "Bağlantı hatası: " . $e->getMessage();
    }
?>
<script src="../codecolor/prism.js"></script>
<script type="text/javascript">
	var $lod = jQuery.noConflict();	$lod(window).load(function() {	 
    	$lod(".se-pre-con").fadeOut(1000);;	});</script>
<title><?php echo $siteismi; ?></title>