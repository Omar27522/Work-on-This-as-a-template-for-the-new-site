<?php
$title = 'Antivirus';
$software ='active';
$directoryPath = '../../';
//$keywords = '<meta name="keywords" content="">';
//$description = '<meta name="description" content="" />';
include ('../../include/_code/page.php');

    function content(){
        include_once('./antivirus.php');
        include ('../../include/_works/_software/antivirus.php');
    }
?>