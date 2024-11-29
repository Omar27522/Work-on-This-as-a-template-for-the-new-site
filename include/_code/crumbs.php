<?php

    if (isset($_POST['program'])) { //Refreshes the page if the criteria is met after the form is submitted
        $pages = [
            'all'             =>    '../#ps2',
            'devtools'        =>    '../developertools/',
            'compression'     =>    '../compression/',
            'utilities'       =>    '../utilities/',
            'other'           =>    '../other/',
            'filesharing'     =>    '../filesharing/',
            'onlinestorage'   =>    '.../onlinestorage/',
            'documents'       =>    '../documents/',
            'imaging'         =>    '../imaging/',
            'runtimes'        =>    '../runtimes/',
            'media'           =>    '../media/',
            'messaging'       =>    '../messaging/',
            'webbrowsers'     =>    '../webbrowsers/',
            'malware'         =>    '../malwarecleaner/',
            'antivirus'       =>    '../antivirus/'
        ];
        if (array_key_exists($_POST['program'], $pages)) {
            header("Location: " . $pages[$_POST['program']]);
            exit;
        }
    }

    if (isset($_POST['programas'])) { //Refresca la pagina si se cumple la condición de la búsqueda de programas
        $pages = [
            'all'             =>    '../#ps2',
            'devtools'        =>    '../herramientasparadesarrolladores/',
            'compression'     =>    '../compresion/',
            'utilities'       =>    '../utilidades/',
            'other'           =>    '../otros/',
            'filesharing'     =>    '../archivosparacompartir/',
            'onlinestorage'   =>    '../almacenamientoenlinea/',
            'documents'       =>    '../documentos/',
            'imaging'         =>    '../imagenes/',
            'runtimes'        =>    '../tiemposdeejecucion/',
            'media'           =>    '../multimedia/',
            'messaging'       =>    '../mensajeria/',
            'webbrowsers'     =>    '../navegadoresweb/',
            'malware'         =>    '../limpiadoresdemalware/',
            'antivirus'       =>    '../antivirus/'
        ];
        if (array_key_exists($_POST['programas'], $pages)) {
            header("Location: " . $pages[$_POST['programas']]);
            exit;
        }
    }
?>