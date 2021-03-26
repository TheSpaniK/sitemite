<?php
# serkoloji.wordpress.com
function bbcode($takla_at){
$bbcode['$gulucuk'] = array(":)", ":D", ":(");
$bbcode['$cevir'] = array("<img src='mutlu.gif'>","<img src='kahkaha.gif'>","<img src='mutsuz.gif'>");
$takla_at = str_replace($bbcode['$gulucuk'],$bbcode['$cevir'],$takla_at);
return $takla_at;
}
?>