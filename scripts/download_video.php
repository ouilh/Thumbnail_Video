<?php
$downloadURL = urldecode($_GET['link']);
$type = urldecode($_GET['type']);
$title = urldecode($_GET['title']);
$fileName = $title . '.' . $type;

if (!empty($downloadURL) && substr($downloadURL, 0, 8) === 'https://') {
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment;filename=\"$fileName\"");
    header("Content-Transfer-Encoding: binary");
    
    // Set the Content-Type header to specify the file type
    header("Content-Type: video/mp4");
   
    readfile($downloadURL);
}
?>
