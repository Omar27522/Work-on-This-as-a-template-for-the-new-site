<?php
$titulo = 'Run-Times';
$software ='active';
$directoryPath = '../../../';
$css = '<link href="../../../include/_code/softwareCSS/runtimes.css" rel="stylesheet" type="text/css" />';
//$palabrasClave ='<meta name="keywords" content="">';
//$descripción  = '<meta name="description" content="" />';
include ('../../../include/_code/pagina.php');

    function content(){
        include ('./tiemposDeEjecucion.php');
        include ('../../../include/_works/_software/runtimes.php');
    }
?>