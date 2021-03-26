
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
<center>
<?php

include("settings/settings.php");
$id = $_GET['sayfa'];

    if (!$id){
    
        header("Location: $sitelink/index.php");
    
    }

$data = $conn->prepare("SELECT * FROM icerik WHERE id=?");
$data ->execute([
$id
]);
$_data = $data->fetch(PDO::FETCH_ASSOC);
echo '<br><br><br><br><br><br><br><br><div class="syf"><h1>'.$_data['baslik'].'</h1> </br>';
echo ''.$_data['detay'].'</div>';


?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<title><?php echo $_data['baslik']; ?></title>
<?php include("settings/footer.php");?>