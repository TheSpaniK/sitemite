<!DOCTYPE html>
<html>
<head>
<?php
include("settings/settings.php");
?>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<style>
  ::-webkit-scrollbar {
    width: 10px;
    background-color: #eaeaea;
    border-left: 1px solid #ccc;
}
::-webkit-scrollbar-thumb {
    background-color: #596971;
}
::-webkit-scrollbar-thumb:hover {
    background-color: #2E3944;
}
</style>
<style>
  .no-js #loader { display: none; }.js #loader { display: block; position: absolute; left: 100px; top: 0; }.se-pre-con {	position: fixed;	left: 0px;	top: 0px;	width: 100%;	height: 100%;	z-index: 9999;	background: url(../images/Preloader_3.gif) center no-repeat #fff;}
  </style>
<script>

$('.text').html(function(i, html) {
  var chars = $.trim(html).split("");

  return '<span>' + chars.join('</span><span>') + '</span>';
});

</script>
<style>
body{
  background-color: black;
}
</style>
</head>
<body>
<div class="se-pre-con"></div>
<?php 
$query = $conn->query("SELECT * FROM icerik" , PDO::FETCH_ASSOC);
$kic = $query->rowCount();
echo ' <div class="containerr">
<span class="text1">'.$siteismi.'</span>
<span class="text2">Toplam konu sayısı: ' .$kic.'</span>
<span class="text2"><a href="'.$sitelink.'/paylas.php">Sende içerik paylaşabilirsin!</a></span>
</div><br><br><br><br><br><br><br><br><br><br><br><br>';

  
  if ( $query->rowCount() ){
       foreach( $query as $row ){
        $yaz = mb_substr($row["detay"],0,$kisa);
     
        echo '<center><div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">'.$row['baslik'].'</h5>
          <h6 class="card-subtitle mb-2 text-muted">İçerik ID '.$row['id'].'</h6>
          <p class="card-text">'.strip_tags($yaz).'</p>
          <a  href="icerik.php?sayfa='.$row['id'].'">Devamı için tıkla!</a>
          
        </div>
      </div></div><br>';
      
       }
  }


  
  

  
	
?>
<br>
<center>
  
 
<script type="text/javascript">
	var $lod = jQuery.noConflict();	$lod(window).load(function() {	 
    	$lod(".se-pre-con").fadeOut("slow");;	});</script>
      <?php include_once("settings/footer.php");?>
</body>
</html>

