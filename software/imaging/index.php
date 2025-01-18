<?php
$title="Imaging";
$directoryPath = '../../';
$software ='active';
$css = '<link href="../../include/_code/softwareCSS/imaging.css" rel="stylesheet" type="text/css" />';
//$keywords = '<meta name="keywords" content="">';
//$description = '<meta name="description" content="" />';


include ('../../include/_code/page.php');

function content(){
 include ('imaging.php');
 include ('../../include/_works/_software/imaging.php');
}