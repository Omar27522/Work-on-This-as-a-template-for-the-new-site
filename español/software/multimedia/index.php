<?php
$titulo = 'Multimedia';
$software ='active';
$directoryPath = '../../../';
$css = '<link href="../../../include/_code/softwareCSS/media.css" rel="stylesheet" type="text/css" />';
//$palabrasClave ='<meta name="keywords" content="">';
//$descripción  = '<meta name="description" content="" />';
include ('../../../include/_code/pagina.php');

    function content(){
        include ('./multimedia.php');
        include ('../../../include/_works/_software/media.php');
    }
?>