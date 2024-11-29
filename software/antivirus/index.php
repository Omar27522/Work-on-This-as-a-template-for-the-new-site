<?php
$title = 'Antivirus';
$software ='active';
$directoryPath = '../../';
$css = '<link href="../../include/_code/softwareCSS/antivirus.css" rel="stylesheet" type="text/css" />';
$keywords = '<meta name="keywords" content="Antivirus software,Cybersecurity,Malware protection,Virus detection,Online security,Threat detection,Antivirus solutions,PC protection,Internet safety,Malware removal">';
$description = '<meta name="description" content="Safeguard your computer with our advanced antivirus software. Quickly detect and remove viruses, malware, and other online threats. Enjoy robust protection tailored to your needs and keep your PC running smoothly. Browse confidently with comprehensive cybersecurity solutions designed to secure your data and prevent future infections." />';

include ('../../include/_code/page.php');

    function content(){
        include_once('./antivirus.php');
        include ('../../include/_works/_software/antivirus.php');
    }
?>