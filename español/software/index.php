<?php
$titulo = "Software";
$directoryPath = '../../';
$software ='active';
$palabrasClave = '<meta name="keywords" content="Antivirus, Limpiador de Malware, Navegadores Web, Mensajería, Medios, Ejecutables, Imagen, Documentos, Compartir Archivos, Almacenamiento en Línea, Contraseñas, Copias de Seguridad, Utilidades, Compresión, Herramientas">';
$descripción = '<meta name="description" content="Descubre software y herramientas esenciales como Antivirus, Limpiador de Malware, Navegadores Web, Apps de Mensajería, Reproductores Multimedia, Ejecutables, Software de Imagen, Editores de Documentos, Servicios para Compartir Archivos, Soluciones de Almacenamiento en Línea, Administradores de Contraseñas, Utilidades de Copias de Seguridad, Utilidades del Sistema, Herramientas de Compresión y más para mejorar tu experiencia digital y proteger tus datos." />';


include ('../../include/_code/pagina.php');

function content(){
    $sw = 'es';
    //$include_path   = '../../include/_works/_hardware/';
    //$software_path  = '../../hardware/';



    /*Hay un problema con los botones dela navegación, me mandan a  alo mejor puedo poner otra variable como $sw='es' pero que demuestre que la pagina de los programas esta 3 directorios adentro
    //ya que por que el software esta activado, no usa &directory path, sino que usa ./

    fue bonito mientras duró, este bichito esta medio raro, porqué se me olvido como trabaja la barra de navegación
*/



    include ('../../include/_works/_software/index.php');
    include ('../../include/_works/software.php');
}
?>
