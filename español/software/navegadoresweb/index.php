<?php
$titulo = 'Navegadores Web';
$software ='active';
$directoryPath = '../../../';
$css = '<link href="../../../include/_code/softwareCSS/webBrowsers.css" rel="stylesheet" type="text/css" />';
//$palabrasClave ='<meta name="keywords" content="">';
//$descripción  = '<meta name="description" content="" />';
include ('../../../include/_code/pagina.php');

    function content(){
        include ('../../../español/software/navegadoresweb/navegador.php');
        include ('../../../include/_works/_software/webbrowsers.php');
    }
?>