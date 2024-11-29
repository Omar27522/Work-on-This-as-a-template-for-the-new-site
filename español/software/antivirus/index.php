<?php
$titulo = 'Antivirus';
$software ='active';
$directoryPath = '../../../';
$palabrasClave ='<meta name="keywords" content="Software antivirus, Cyber seguridad, Protección contra malware, Detección de virus, Seguridad en línea, Detección de amenazas, Soluciones antivirus, Protección de PC, Seguridad en Internet, Eliminación de malware">';
$descripción  = '<meta name="description" content="Protege tu computadora con nuestro avanzado software antivirus. Detecta y elimina rápidamente virus, malware y otras amenazas en línea. Disfruta de una protección robusta adaptada a tus necesidades y mantén tu PC funcionando sin problemas. Navega con confianza con soluciones integrales de ciberseguridad diseñadas para proteger tus datos y prevenir futuras infecciones.">';
include ('../../../include/_code/pagina.php');

    function content(){
        //echo'Antivirus en Español'; This first echo shifts the <h2> to the left. once deleted it goes back with indentation.
        include_once('./antivirus.php');
        include ('../../../include/_works/_software/antivirus.php');
    }
?>