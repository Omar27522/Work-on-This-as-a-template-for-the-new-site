<?php
$title = 'Antivirus';
$software ='active';
$directoryPath = '../../';
$css = '<link href="../../include/_code/softwareCSS/antivirus.css" rel="stylesheet" type="text/css" />';
//$keywords = '<meta name="keywords" content="">';
//$description = '<meta name="description" content="" />';
include ('../../include/_code/page.php');

    function content(){
        include_once('./antivirus.php');
        include ('../../include/_works/_software/antivirus.php');
    }
?>