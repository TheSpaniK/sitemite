<head>
<style>
body{
  background-color: black;
}
</style>
</head>
</body>
<center>
<?php
include("settings/settings.php");
$icrkbaslik = strip_tags(trim($_POST["baslikk"]));
$icrkdetay = $_POST['detayy'];
if(!$icrkbaslik || !$icrkdetay){
             
             
    echo ' <div class="containerr">
    <span class="text1">'.$siteismi.'</span>
    <span class="text2">Gerekli alanları doldurmanız gerekiyor</span>
    </div><br><br><br><br><br><br><br><br><br><br><br><br>'; 
    
}else if(strlen($icrkbaslik) > 45){
    
    echo ' <div class="containerr">
        <span class="text1">'.$siteismi.'</span>
        <span class="text2">Konu başlığı 30 karakterden uzun olamaz</span>
        </div><br><br><br><br><br><br><br><br><br><br><br><br>'; 
    

}else {
             
    $v = $conn->prepare("SELECT * FROM icerik WHERE baslik=?");
    $v->execute(array($icrkbaslik));
   $x = $v->fetch(PDO::FETCH_ASSOC);
   $z = $v->rowCount();
    
    if($z){
        
        echo ' <div class="containerr">
        <span class="text1">'.$siteismi.'</span>
        <span class="text2">Böyle bir konu zaten açılmış lütfen başka birtane deneyin</span>
        </div><br><br><br><br><br><br><br><br><br><br><br><br>'; 

    }else {
$query = $conn->prepare("INSERT INTO icerik SET
baslik = ?,
detay = ?"
);
$insert = $query->execute(array(
     $icrkbaslik, $icrkdetay
));
if ( $insert ){
    $last_id = $conn->lastInsertId();
    echo ' <div class="containerr">
        <span class="text1">'.$siteismi.'</span>
        <span class="text2">Konu paylaşıldı!</span>
        </div><br><br><br><br><br><br><br><br><br><br><br><br>'; 
}
    }
}
?>
 <?php include_once("settings/footer.php");?>