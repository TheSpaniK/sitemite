<style>
body{
  background-color: black;
}
</style>
 <?php
 include("settings/settings.php");
 ?>
 
 <center>
 
<script src="ckeditor5/src/ckeditor.js"></script>
<form action="durum.php" method="POST">
	<h3>İçerik Başlık</h3> 
    <div class="col-auto">
    <input name="baslikk" class="form-control form-control-lg" type="text" placeholder="İçerik başlığı" aria-label=".form-control-lg example">
    
   
  </div><br>
	<h3>İçerik Detay</h3> 
	<textarea name="detayy" class="ckeditor"  id="editor1"></textarea><br><br>
    <input type="submit" value="Paylaş" class="btn btn-outline-dark "/>

</form>