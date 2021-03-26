
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="ckeditor5/src/ckeditor.js"></script>
<center>

<?php 
	include("../settings/settings.php");
?>

<br>
<?php 



	$icerik_id = $_GET['sayfa'];
    if (!$icerik_id){
    
        header("Location: http://localhost/admin/index.php");
    
    }
	
	if ($icerik_id){
		$islem_tur = 'Düzenle';
		$icerik = $conn->prepare("SELECT * FROM icerik WHERE id=?");
$icerik ->execute([
$icerik_id
]);
$icerik = $icerik->fetch(PDO::FETCH_ASSOC);
	}else{
		$islem_tur = 'Ekle';
	}

?>

	
<hr>
<form action="durum.php" method="POST">
	<h2><?php echo $islem_tur; ?></h2>
	<h3>Başlık</h3> 
	<input type="text" name="baslik" style="padding:10px; border:1px solid #b1b1b1; width:100%" value="<?php echo $icerik['baslik']; ?>"/><br>
	<h3>Detay</h3> <br>
	<textarea name="detay"><?php echo $icerik['detay']; ?></textarea><br><br>
	<input type="hidden" name="icerik_id" value="<?php echo $icerik_id; ?>" />
	<input type="submit" value="Paylaş" style="padding:10px; border:1px solid #1aab1e; width:100%; background:#1aab1e; color:#fff; cursor:pointer "/>
</form>

<?php
if ($icerik_id = true){
	if ($icerik_id){
		echo '<br><hr><br><h2>İçerik Detayı Önizleme</h2>';
		echo $icerik['detay'];
	}
}
?>