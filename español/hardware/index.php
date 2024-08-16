<?php

$hardwareTitulos = [
    'cc'   => 'Console Controllers',
    'cpu'  => 'CPU',
    'ram'  => 'RAM',
    'ssd'  => 'SSD',
    'psu'  => 'Fuente de Poder',
    'gpu'  => 'Tarjeta de Procesamiento Gráfico',
    'pci'  => 'Tarjetas PCI',
    'ratón' => 'Ratón',
    'escritorio'  => 'Escritorios',
    'silla'  => 'Sillas',
    'enfriamiento'=> 'Enfriamiento',
    'tableta' => 'Tabletas',
    'micro'  => 'Micrófonos',
    'pantalla' => 'Pantallas',
    'headset' => 'Auriculares totales',
    'impresora' => 'Impresoras',
    'escáner' => 'Escáner',
    'chasis'  => 'Carcasa del PC',
    'teclado'  => 'Teclado',
    'joystick'  => 'Joysticks',
    'auriculares' => 'Auriculares',
    'memoria_portable'  => 'Memoria Portable',
    'controlador' => 'Controladores',
    'mezclador_de_audio' => 'Mezclador de Audio',
    'motherboard' => 'Motherboard',
    'lápiz' => 'Plumas, Lapices, Tabletas',
    'almohadillas_anti-deslizantes' => 'Alfombrillas Antideslizantes',
    'bocinas_y_subwoofers' => 'Bocinas y Subwoofers',
    'uniformes' => 'Uniformes'
    ];

    $titulo = 'Hardware'; // Default title
    foreach ($hardwareTitulos as $llave => $valor) {
        if (isset($_GET[$llave])) {
            $titulo = $valor;
            break;
        }
    }
//WE need to update Titles as well as the English titles
//ALSO the files have changed, so we need to update way the site displays in Spanish



$directoryPath = '../../';
$hardware ='active';

include ('../../include/_code/pagina.php');

function content(){
    $hw = 'es';
	$include_path = '../../include/_works/_hardware/';
	$include_path_vars = '../../español/hardware/';
	$include_pathV = $include_path_vars;


if (isset($_GET)) :
    switch (key($_GET)) :
        case 'cpu':
			include ($include_pathV. 'cpu.php');
            include ($include_path . 'cpu.php');
            break;
        case 'cooling':
            include ($include_pathV. 'enfriamiento.php');
            include ($include_path . 'cooling.php');
            break;
        case 'chassis':
            include ($include_pathV. 'chasis.php');
            include ($include_path . 'chassis.php');
            break;
        case 'gpu':
            include ($include_pathV. 'gpu.php');
            include ($include_path . 'gpu.php');
            break;
        case 'motherboard':
            include ($include_pathV. 'motherboard.php');
            include ($include_path . 'motherboard.php');
            break;
        case 'ssd':
            include ($include_pathV. 'ssd.php');
            include ($include_path . 'ssd.php');
            break;
        case 'ram':
            include ($include_pathV. 'ram.php');
            include ($include_path . 'ram.php');
            break;
        case 'mouse':
        case 'computer_mouse':
        case 'raton':
        case 'ratón':
            include ($include_pathV. 'raton.php');
            include ($include_path . 'mouse.php');
            break;
        case 'keyboard':
        case 'teclado':
            include ($include_pathV. 'teclado.php');
            include ($include_path . 'keyboard.php');
            break;
        case 'display':
        case 'pantalla':
            include ($include_pathV. 'pantalla.php');
            include ($include_path . 'display.php');
            break;
        case 'external_memory_drives':
        case 'external_drives':
        case 'memoria_externa':
            include ($include_pathV. 'memoria_externa.php');
            include ($include_path . 'external_memory_drives.php');
            break;
        case 'pci_cards':
        case 'pci':
            include ($include_pathV. 'tarjeta_pci.php');
            include ($include_path . 'pci_cards.php');
            break;
        case 'power_supply':
        case 'psu':
            include ($include_pathV. 'fuente_de_poder.php');
            include ($include_path . 'power_supply.php');
            break;
        case 'scanners':
            include ($include_pathV. 'scaners.php');
            include ($include_path . 'scanners.php');
            break;
        case 'printers':
        case 'printer':
            include ($include_pathV. 'impresoras.php');
            include ($include_path . 'printers.php');
            break;
        case 'controllers':
            include ($include_pathV. 'controladores.php');
            include ($include_path . 'controllers.php');
            break;
        case 'cc':
            include ($include_pathV. 'mando_de_consola.php');
            include ($include_path . 'console_controllers.php');
            break;
        case 'joystick':
        case 'joysticks':
            include ($include_pathV. 'joystick.php');
            include ($include_path . 'joystick.php');
            break;
        case 'tablets':
            include ($include_pathV. 'tabletas.php');
            include ($include_path . 'tablets.php');
            break;
        case 'microphones':
        case 'microphone':
            include ($include_pathV. 'microfonos.php');
            include ($include_path . 'microphones.php');
            break;
        case 'headsets':
            include ($include_pathV. 'headsets.php');
            include ($include_path . 'headsets.php');
            break;
        case 'headphones':
            include ($include_pathV. 'audifonos.php');
            include ($include_path . 'headphones.php');
            break;
        case 'audio_mixers':
        case 'audiomixer':
            include ($include_pathV. 'audio_mezcladora.php');
            include ($include_path . 'audio_mixers.php');
            break;
        case 'gaming_uniforms':
        case 'uniforms':
            include ($include_pathV. 'uniformes_gaming.php');
            include ($include_path . 'gaming_uniforms.php');
            break;
        case 'pens_pencils_tablets':
        case 'pens_and_pencils_and_stylus':
            include ($include_pathV. 'lapices_plumas_tabletas.php');
            include ($include_path . 'pens_pencils_tablets.php');
            break;
        case 'chairs':
            include ($include_pathV. 'sillas.php');
            include ($include_path . 'chairs.php');
            break;
        case 'desks':
            include ($include_pathV. 'escritorios.php');
            include ($include_path . 'desks.php');
            break;
        case 'anti_slip_mats':
        case 'antislipmats':
            include ($include_pathV. 'alfombrilla_antideslizante.php');
            include ($include_path . 'anti_slip_mats.php');
            break;
        case 'speakers_and_subwoofers':
            include ($include_pathV. 'bocinas_y_subwoofers.php');
            include ($include_path . 'speakers_and_subwoofers.php');
            break;
        default:
	$title = "<h2>El hardware es la computadora — sus componentes físicos.</h2>";

	$description = "<p>Estos componentes pueden incluir la funcionalidad, diseño, materiales, innovaciones, termales, etc. de la computadora.<br />Una computadora es un dispositivo electrónico que manipula datos o información. Tiene la capacidad de almacenar, recuperar y procesar datos.<p> <!--https://unsplash.com/photos/2sILr4DwabQ-->
	<h3><a href=\"https://latinospc.com/hardware/?anatomy_of_a_computer#navi\">La anatomía de una computadora</a> típicamente incluye, 
	<a href=\"https://latinospc.com//hardware/?notebooks#navi\">Portátiles</a>, Dispositivos Portátiles, Dispositivos Inteligentes, PC's Modulares, ETC.</h3>";

	$contentSubTitles = ["Partes de la Computadora", "Unidad Central de Procesamiento (CPU):", "Memoria (RAM):", "Unidad de Almacenamiento de Memoria (disco duro, SSD):",
	"Placa Base:", "Unidad de Fuente de Alimentación (PSU):", "GPU:", "Chasis:", "Refrigeradores", "Dispositivos de Entrada/Salida:", "Dispositivos Periféricos:"];

	$content = ['CPU' => "El \"cerebro\" de la computadora, responsable de ejecutar las instrucciones de los programas de computadora.",
	'RAM' => "Almacena datos que la CPU usa a corto plazo.",
	'HDD' => "Almacena datos de manera persistente, incluso cuando la computadora está apagada.",
	'Motherboard' => "La placa de circuito principal en una computadora, que alberga la CPU, la memoria y otros componentes.&nbsp;",
	'PSU' => "Convierte la corriente alterna de una toma de corriente en corriente continua utilizada por la computadora.",
	'GPU' => "Unidad de Procesamiento Gráfico (GPU) especializada que maneja la carga computacional necesaria para las tareas.&nbsp;",
	'Chassis' => "Aloja todos los componentes internos que una computadora necesita.",
	'Coolers' => "Ayudan a regular la temperatura de la unidad central de procesamiento (CPU) y otros componentes críticos de la computadora.",
	'I/O' => "Permiten que los datos se ingresen en la computadora (como un teclado y un ratón) y se saquen de la computadora (como una pantalla y altavoces).&nbsp;",
	'Peripherals' => "Hardware adicional conectado a una computadora, como impresoras, escáneres y discos duros externos.&nbsp;"];

	$perifericos = [
	"Ratón",
	"Teclado",
	"Pantalla",
	"Unidades de Memoria Externas",
	"Tarjetas PCI",
	"Fuente de Alimentación",
	"Refrigeración",
	"GPU",
	"Escáneres",
	"Impresoras",
	"Controladores de Consola",
	"Joystick",
	"Tabletas",
	"Micrófonos",
	"Audífonos con Micrófono",
	"Audífonos",
	"Mezcladores de Audio",
	"Controladores",
	"Uniformes de Juego",
	"Plumas, Lápices y Tabletas",
	"Sillas",
	"Escritorios",
	"Alfombrillas Antideslizantes",
	"Altavoces y Subwoofers",
	"Periféricos",
	];

    $links =[''];

include ('../../include/_works/hardware.php');
break;
endswitch;
endif;

}
?>
