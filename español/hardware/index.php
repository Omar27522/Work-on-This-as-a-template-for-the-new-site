<?php
$title="Hardware";
$directoryPath = '../../';
$lang = 'es';
$hardware ='active';

include ('../../include/_code/pagina.php');

function content(){
	$include_path = '../../include/_works/hardware/';

if (isset($_GET)) :
    switch (key($_GET)) :
        case 'cpu':
			include ('../../español/hardware/cpu.php');
            include ($include_path . 'cpu.php');
            break;
        case 'cooling':
            include ('../../español/hardware/cooling.php');
            include ($include_path . 'cooling.php');
            break;
        case 'chassis':
            include ($include_path . 'chassis.php');
            break;
        case 'gpu':
            include ($include_path . 'gpu.php');
            break;
        case 'psu':
            include ($include_path . 'psu.php');
            break;
        case 'motherboard':
            include ($include_path . 'motherboard.php');
            break;
        case 'ssd':
            include ($include_path . 'ssd.php');
            break;
        case 'ram':
            include ($include_path . 'ram.php');
            break;
        case 'mouse':
        case 'computer_mouse':
            include ($include_path . 'mouse.php');
            break;
        case 'keyboard':
            include ($include_path . 'keyboard.php');
            break;
        case 'display':
            include ($include_path . 'display.php');
            break;
        case 'external_memory_drives':
        case 'external_drives':
            include ($include_path . 'external_memory_drives.php');
            break;
        case 'pci_cards':
        case 'pci':
            include ($include_path . 'pci_cards.php');
            break;
        case 'power_supply':
            include ($include_path . 'power_supply.php');
            break;
        case 'scanners':
            include ($include_path . 'scanners.php');
            break;
        case 'printers':
        case 'printer':
            include ($include_path . 'printers.php');
            break;
        case 'ontrollers':
            include ($include_path . 'controllers.php');
            break;
        case 'cc':
            include ($include_path . 'console_controllers.php');
            break;
        case 'joystick':
        case 'joysticks':
            include ($include_path . 'joystick.php');
            break;
        case 'tablets':
            include ($include_path . 'tablets.php');
            break;
        case 'microphones':
        case 'microphone':
            include ($include_path . 'microphones.php');
            break;
        case 'headsets':
            include ($include_path . 'headsets.php');
            break;
        case 'headphones':
            include ($include_path . 'headphones.php');
            break;
        case 'audio_mixers':
        case 'audiomixer':
            include ($include_path . 'audio_mixers.php');
            break;
        case 'gaming_uniforms':
        case 'uniforms':
            include ($include_path . 'gaming_uniforms.php');
            break;
        case 'pens_pencils_tablets':
        case 'pens_and_pencils_and_stylus':
            include ($include_path . 'pens_pencils_tablets.php');
            break;
        case 'chairs':
            include ($include_path . 'chairs.php');
            break;
        case 'desks':
            include ($include_path . 'desks.php');
            break;
        case 'anti_slip_mats':
        case 'antislipmats':
            include ($include_path . 'anti_slip_mats.php');
            break;
        case 'speakers_and_subwoofers':
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

	$peripherals = [
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

include ('../../include/_works/hardware.php');
break;
endswitch;
endif;

}
?>
