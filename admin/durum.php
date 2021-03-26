<center>
<link rel="stylesheet" href="../style.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<?php
include("../settings/settings.php");
$icrkbaslik = strip_tags(trim($_POST["baslik"]));
$icrkdetay = $_POST['detay'];
$icerik_id = $_POST['icerik_id'];
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
    


        
    }else if ($icerik_id){
        $duz = $conn->prepare("UPDATE icerik SET baslik = ?,  detay = ? WHERE id = $icerik_id"
        );
        $duze = $duz->execute(array(
             $icrkbaslik, $icrkdetay
        ));
        if ( $duze ){
            $last_id = $conn->lastInsertId();
            print "İçerik Düzenlendi!";
        }
        }else{
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
        <span class="text2">İçerik paylaşıldı!</span>
        </div><br><br><br><br><br><br><br><br><br><br><br><br>'; 
}
    }



?>
 <?php include_once("../settings/footer.php");?>
