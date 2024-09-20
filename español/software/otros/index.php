<?php
$titulo = 'Otros';
$software ='active';
$directoryPath = '../../../';
//$palabrasClave ='<meta name="keywords" content="">';
//$descripción  = '<meta name="description" content="" />';
include ('../../../include/_code/pagina.php');

    function content(){
        echo' Otros en Español'; //This first echo shifts the <h2> to the left. once deleted it goes back with indentation.
        include ('../../../include/_works/_software/other.php');
    }
?>