<?php
$title="Hola! Una Cordial Bienvenida";
$directoryPath = '../../';
$lang = 'es';
$hardware ='active';

include ('../../include/_code/pagina.php');

function content(){
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
}
?>
