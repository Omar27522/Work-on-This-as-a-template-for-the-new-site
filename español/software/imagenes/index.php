<?php
$titulo = 'imágenes';
$software ='active';
$directoryPath = '../../../';
$css = '<link href="../../../include/_code/softwareCSS/imaging.css" rel="stylesheet" type="text/css" />';
//$palabrasClave ='<meta name="keywords" content="">';
//$descripción  = '<meta name="description" content="" />';
include ('../../../include/_code/pagina.php');

    function content(){
       include ('imagenes.php');
        include ('../../../include/_works/_software/imaging.php');
    }
?>