<?php
$url = $_GET['url'];
//header('Content-type: audio/mpeg');
echo file_get_contents($url);
?>