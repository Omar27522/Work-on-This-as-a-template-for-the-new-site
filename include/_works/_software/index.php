<?php
if ($sw == 'en'){
$title ='<h2>Commonly known as computer programs -these, are the instructions for the computer’s tasks.</h2>';
$description=[
    '<p>Like paper
            programs, (which we get before the start of performances, like Concert Shows, a Graduation or Stage Plays.</p>
            <p>
            <strong>Software</strong> are a way to communicate to the computer user, about the computer’s ongoing performances.<br />
            Computer software, like paper programs could be considered the same idea in this instance. Much more
            different than paper programs, <ins>software</ins> contains all the necessary parts that make the whole
            show.</p>
            <p style="text-align: center;">The “stage” is the CPU,Ram,Hard drive.<br />
            The public enjoys the performance through the computer display, the performers are the programs
            themselves.</p>
            <p>Because computers can execute muti-millions of instructions per second; millions+ of performers and
            performances have to be coordinated in a way that makes the computer <b>run</b> without declaring any
            software errors, glitches, bugs, or unwanted features.)</p>'];
$programs = ['Click on the image','Anti-Virus','Malware Cleaner','Web Browsers','Messaging','Media','Runtimes','Imaging','Documents','File Sharing','Online Storage','Other','Utilities','Compression','Development Tools','Read more',
            'links'=>['antivirus','malwarecleaner']];

$descriptions = [
    'av'=>'<p>An anti-virus program in itself, is created to help the computer shield itself from viruses. The best antivirus solutions are the ones keeping Up to date with whats out there trying to harm the computer (PC). Also, the best antivirus solutions are simple, cost less than imagined, and bring peace of mind.</p>',
    'mlwc'=>'<p>Malware, harmful files infecting computers, can be found in spam, emails, infected drives, or bundled software. Often disguised as harmless software, malware steals data and can cause irreparable damage. To prevent infections, use paid or free antivirus solutions that offer real-time protection and background scanning.</p>',
    ''=>''
];
        }

if ($sw == 'es') {
    /*change this one to titles and fix teh PHP code structure on Software,
    I just came back to it and Im using this file as both the English and Spanish software $vars file*/

$titulo = '<h2>Conocidos comúnmente como programas de computadora -estos son las instrucciones para las tareas del ordenador.</h2>';

$descripcion = ['<p>Al igual que los programas en papel (los cuales recibimos antes de comenzar los eventos, como conciertos, graduaciones o obras de teatro).</p>
<p><strong>El software</strong> es una forma de comunicar al usuario de la computadora sobre las tareas en curso del sistema.<br />
El software de computadora, al igual que los programas en papel, podría considerarse como una idea similar en este caso. Mucho más diferente que los programas en papel, el <ins>software</ins> contiene todas las partes necesarias que conforman el espectáculo completo.</p>
<p style="text-align: center;">El "escenario" es la CPU, la RAM y el disco duro.<br />
El público disfruta del espectáculo a través de la pantalla del ordenador, los actores son los propios programas.</p>
<p>Debido a que las computadoras pueden ejecutar millones de instrucciones por segundo, millones de actores y actuaciones deben coordinarse de manera que la computadora <b>funcione</b> sin declarar errores de software, fallos, bugs o características no deseadas.</p>'];

$programas =['Haz click en la imagen','Anti-Virus','Limpiadores de Malware','Navegadores Web','Mensajería','Multi-Media','Tiempos de Ejecución','imágenes','Documentos','Archivos Para Compartir','Almacenamiento en linea','Otros','Utilidades','Compression','Herramientas para Desarrollar','Leer más',
            'links'=>['antivirus','limpiadordemalware','navegadoresweb','mensajeria','multimedia','runtimes','imagingenes','documentos','archivosparacompartir','almacenamientoenlinea','otros','utilidades','compression','herramientasparadesarrollar']];
}
?>