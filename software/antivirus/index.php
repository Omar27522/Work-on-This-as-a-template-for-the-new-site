<?php
$title = 'Antivirus';
$software ='active';
$directoryPath = '../../';
//$keywords = '<meta name="keywords" content="">';
//$description = '<meta name="description" content="" />';
include ('../../include/_code/page.php');

    function content(){
        //echo'Antivirus'; //This first echo shifts the <h2> to the left. once deleted it goes back with indentation.
        include ('../../include/_works/_software/antivirus.php');
    }
?>