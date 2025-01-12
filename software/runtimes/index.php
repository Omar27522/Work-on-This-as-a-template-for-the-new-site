<?php
$title="Runtimes";
$directoryPath = '../../';
$software ='active';
$css = '<link href="../../include/_code/softwareCSS/runtimes.css" rel="stylesheet" type="text/css" />';

//$keywords = '<meta name="keywords" content="">';
//$description = '<meta name="description" content="" />';


include ('../../include/_code/page.php');

function content(){
 echo 'Runtimes';
 include ('../../include/_works/_software/runtimes.php');
}