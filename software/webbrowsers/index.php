<?php
$title="Web Browsers";
$directoryPath = '../../';
$software ='active';
$css = '<link href="../../include/_code/softwareCSS/webBrowsers.css" rel="stylesheet" type="text/css" />';
//$keywords = '<meta name="keywords" content="">';
//$description = '<meta name="description" content="" />';


include ('../../include/_code/page.php');

function content(){
    include ('../../software/webbrowsers/browsers.php');
    include ('../../include/_works/_software/webbrowsers.php');
}