<?php
$title="Software";
$directoryPath = '../';
$software ='active';
$keywords = '<meta name="keywords" content="Antivirus, Malware Cleaner, Web Browsers, Messaging, Media, Run times, Imaging, Documents, File sharing, Online Storage, Passwords, Backups, Utilities, Compression, Tools">';
$description = '<meta name="description" content="Discover essential software and tools including Antivirus, Malware Cleaner, Web Browsers, Messaging apps, Media players, Run times, Imaging software, Document editors, File sharing services, Online Storage solutions, Password managers, Backup utilities, System utilities, Compression tools, and more to enhance your digital experience and protect your data." />';


include ('../include/_code/page.php');

function content(){
    $sw = 'en';
    //$include_path   = '../include/_works/_hardware/';
    //$software_path  = '../hardware/';

 //if (isset($_GET)) :
   // switch (key($_GET)) :
 //default:
        include ('../include/_works/_software/index.php');
        include ('../include/_works/software.php');
            //break;
    //endswitch;
//endif;
}

/*---->CONTENT<---
Each of the subdirectories shall look like this one. maybe have the content just like hardware
under _works/_software/
where the actual content will be held, make it simple, similar, and easy to understand.
*/

/*The work has begun, the last item added was devtools
    Docs has page template, we just need to import Articles/Software from LiveLATPC for the remainder of the items.

*/
?>
