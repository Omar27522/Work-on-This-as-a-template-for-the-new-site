<?php
if (isset($_GET['respaldos'])):
    $titulo="Respaldos";
    $palabrasClave = '<meta name="keywords" content="respaldo de datos, recuperación de archivos, almacenamiento en la nube, respaldos locales, respaldos seguros, respaldo informático, LatinosPC, soluciones de respaldo, protección de datos personales, protección de datos comerciales, respaldos automatizados" />';
    $descripción = '<meta name="description" content="LatinosPC.com ofrece servicios confiables de respaldo de datos para garantizar la seguridad de sus archivos personales o comerciales. Brindamos soluciones de respaldo local y en la nube, adaptadas a sus necesidades específicas. Mantenga sus datos seguros con nuestros servicios de respaldo profesionales." />';
else:
    $titulo="Bienvenidos a LAtinosPC.com";
    $palabrasClave = '<meta name="keywords" content="Reparación de computadoras, eliminación de virus, respaldo de datos, clases de computación, clases presenciales, clases en línea, soporte técnico, gamers, TI para pequeñas empresas, soporte TI para estudiantes" />';
    $descripción = '<meta name="description" content="LatinosPC.com es tu tienda única para todas tus necesidades de reparación de computadoras. Ofrecemos una variedad de servicios, incluyendo reparación de computadoras, eliminación de virus, respaldo de datos, y clases de computación presenciales y en línea. Trabajamos con individuos, estudiantes, pequeñas empresas y gamers.">';
endif;

$casa ='active';
$directoryPath = '../';
include ('../include/_code/pagina.php');

function content(){
        if (isset($_GET['respaldos'])) {
            //echo "Respaldos";
            include_once('../español/respaldos.php');
            include_once('../include/_works/backups.php');
        }
        elseif (isset($_GET['Jesus']))  {
            include_once('../español/miSeñorYSalvadorJesusCristo.php');
            include_once('../include/_works/_faith/heavenlyFatherTellMeAboutTheWeb.php');
        }
        else    {
            include_once('../include/_works/es/es_start.php');
            include_once('../include/_works/start.php');
    }
        }

?>
