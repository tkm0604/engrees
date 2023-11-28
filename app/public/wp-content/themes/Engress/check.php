<?php
    ini_set('display_errors', "On");
     
    //取得したいコンテンツのURL（置き換えてください）
    $target_url = "http://localhost:10008/test/";
     
    file_get_contents($target_url);
 
?>