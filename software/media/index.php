<?php
$title="Media";
$directoryPath = '../../';
$software ='active';
$css = '<link href="../../include/_code/softwareCSS/media.css" rel="stylesheet" type="text/css" />';

//$keywords = '<meta name="keywords" content="">';
//$description = '<meta name="description" content="" />';


include ('../../include/_code/page.php');

function content(){
    include ('./media.php');
 include ('../../include/_works/_software/media.php');
}