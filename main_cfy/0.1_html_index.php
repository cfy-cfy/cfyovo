<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css)$/', $_SERVER["REQUEST_URI"]))
    return false;    // 直接返回请求的文件
else { 
    $string = file_get_contents('index.html');
    echo $string;
    return $string;
}
?>