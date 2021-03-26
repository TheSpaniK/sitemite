<!DOCTYPE html>
<html>
<head>
<?php
include("../settings/settings.php");
?>
<title><?php echo $siteismi; ?></title>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<style>
body{
  background-color: black;
}
</style>
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
</head>
<body>

<center>

<?php 
$query = $conn->query("SELECT * FROM icerik" , PDO::FETCH_ASSOC);
$kic = $query->rowCount();
if($kic < 1){
echo '<font color="red" face="Verdana, Geneva, sans-serif" size="+1">Henüz konu eklenmemiş</font><br>';
}

if ( $query->rowCount() ){
	 foreach( $query as $row ){
	  $yaz = mb_substr($row["detay"],0,$kisa);
	echo '<div class="card" style="width: 18rem;">
	<div class="card-body">
	  <h5 class="card-title">'.$row['baslik'].'</h5>
	  <h6 class="card-subtitle mb-2 text-muted">İçerik ID '.$row['id'].'</h6>
	  <p class="card-text">'.strip_tags($yaz).'</p>
	  <a  href="islem.php?sayfa='.$row['id'].'">Konuyu düzenlemek için tıkla!</a>
	 
 

	  
	</div>
  </div><br>';
  

	 }
}echo '<font color="white" face="Verdana, Geneva, sans-serif" size="+1">Toplam konu sayısı:'.$kic.'</font>';

 

  
	
?>

<br>
<form action="" method="post">
<div class="col-auto">
  <textarea name="sorgu" class="form-control" placeholder="Sql sorgusunu girin"></textarea>
  <input type="submit" value="Çalıştır" class="btn btn-outline-success"/>
</div>
</form>
<form action="" method="post">
<div class="col-auto">
  <textarea name="sil" class="form-control" placeholder="Silmek istediğiniz içeriğin IDsini girin"></textarea>
  <input type="submit" value="Sil" class="btn btn-outline-success"/>
</div>
</form>
<font color="white" face="Verdana, Geneva, sans-serif" size="+1">SQL Çıktıları</font>
<font color="red" face="Verdana, Geneva, sans-serif" size="+0.1">

<?php
if ($_POST['sorgu']) {
$sorgu = $_POST["sorgu"];
$sorguc = $conn->query("$sorgu" , PDO::FETCH_ASSOC);
}
if ($_POST['sil']) {
$deletee = $_POST["sil"];
$deletesorg = $conn->query("DELETE FROM icerik WHERE id=$deletee");
}
?>

</body>
</html>