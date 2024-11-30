<?php
$titulo = 'Mensajería';
$software ='active';
$directoryPath = '../../../';
$css = '<link href="../../../include/_code/softwareCSS/messaging.css" rel="stylesheet" type="text/css" />';
//$palabrasClave ='<meta name="keywords" content="">';
//$descripción  = '<meta name="description" content="" />';
include ('../../../include/_code/pagina.php');

    function content(){
        include('./mensajeria.php');
        include ('../../../include/_works/_software/messaging.php');
    }
?>