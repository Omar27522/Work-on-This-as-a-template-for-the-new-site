<?php
$titulo = 'Imágenes';

$subTitulos = [
    'La evolución de los gráficos por computadora',
    'Gráficos 2D: La Fundación',
    'Gráficos 3D: Añadiendo Profundidad',
    'Fotografía digital y hardware de imagen',
    'Tecnologías modernas de pantalla',
    'Realidad virtual y aumentada',
    'Imágenes por computadora modernas',
    '',
];
$imagenes = [
    'girl'=>['https://www.w3schools.com/w3images/photographer.jpg','Fotografa']
];

$vista = [
    'La visión es uno de los sentidos principales mas usados para comprender el mundo.',
    'Cuando la luz se refleja en un objeto, los ojos detectan las variaciones de luz, luego el cerebro procesa esta información; crea una experiencia, y una percepción personal de la realidad mediante el uso de la <b>vista</b>.',
    'Diría que, si un objeto es visible para un observador, la existencia del mismo objeto puede ser confirmada aún más poniéndolo a prueba con los otros sentidos, como el <b>tacto</b>, el <b>oído</b>, el <b>gusto</b> y el <b>olfato</b>, etc...'
];

$evolucion = [
    'La historia de los gráficos por computadora se remonta a la década de 1950, comenzando con la computadora Whirlwind en el MIT que utilizaba una pantalla CRT para la salida. En 1963, Ivan Sutherland revolucionó el campo con Sketchpad, el primer programa de diseño asistido por computadora. La década de 1970 vio el nacimiento de los gráficos por computadora en 2D en aplicaciones comerciales, mientras que la década de 1980 nos trajo desarrollos revolucionarios en gráficos y animación en 3D. La década de 1990 fue testigo del surgimiento de unidades de procesamiento gráfico (GPUs) dedicadas, lo que llevó a las capacidades de renderizado foto-realistas y gráficos 3D en tiempo real de hoy en día.'
];

$graficos2D = ['Los gráficos en 2D forman la base de la imagen digital, consistiendo en píxeles organizados en una cuadrícula bidimensional. Estos gráficos incluyen desde interfaces de usuario básicas hasta arte digital y fotografías. Los gráficos vectoriales, otra forma de imágenes en 2D, utilizan ecuaciones matemáticas para crear imágenes escalables que mantienen su calidad a cualquier tamaño. Las aplicaciones comunes incluyen el diseño de logotipos, la tipografía y las ilustraciones técnicas.'];

$graficos3D = [
    'tercerD' => 'Los gráficos en 3D introducen el eje z, creando objetos virtuales con profundidad, volumen y perspectiva. Los gráficos en 3D modernos utilizan técnicas complejas como:',
    'primer' => 'Modelado de mallas poligonales para crear formas de objetos',
    'segundo' => 'Mapeo de texturas para agregar detalles superficiales',
    'tercer' => 'Trazado de rayos para iluminación y sombras realistas',
    'cuarto' => 'Renderizado en tiempo real para experiencias interactivas',
    'tercerDUltimo' => 'Estas tecnologías impulsan todo, desde videojuegos hasta visualización arquitectónica y simulaciones científicas.',
];

$fotografiaDigital = [
    'foto' => 'La fotografía digital representa un aspecto crucial de la tecnología moderna de la imagen.',
    'incluye'=>'Componentes clave incluyen:',
    'sensor'=>['imagen'=>'Sensores de imagen',
        'tipo'=>'En el corazón de las cámaras digitales hay dos tipos principales de sensores de imagen:',
            'ccd'=>['fuerte'=>'CCD (Dispositivo de Carga Acoplada):',
                'pro'=>'Conocido por imágenes de alta calidad con menos ruido, tradicionalmente utilizado en cámaras profesionales'],
            'cmos'=>['fuerte'=>'CMOS (Semiconductor Complementario de Óxido Metálico):',
                'pro'=>'Más eficiente en energía y más barato de fabricar, ahora es la tecnología dominante en la mayoría de las cámaras modernas'],
            'sensores'=>'Estos sensores convierten la luz en señales eléctricas a través de millones de fotositos (píxeles).',
            ],
    'componentesClave' => 'Componentes Clave de la Fotografía',
'elementos' => 'Varios elementos trabajan juntos para crear imágenes digitales:',
'componentes' => [
    'lente' => ['Sistema de Lentes:', 'Controla el enfoque, el zoom y la recolección de luz a través de aperturas ajustables'],
    'procesador' => ['Procesador de Imágenes:', 'Convierte los datos del sensor en imágenes digitales, manejando tareas como la reducción de ruido y el procesamiento de color'],
    'resolucion' => ['Resolución:', 'Medida en megapíxeles, determinando el nivel de detalle de las imágenes capturadas'],
    'rango' => ['Rango Dinámico:', 'La capacidad de la cámara para capturar tanto áreas brillantes como oscuras en una sola toma']
]

];

$procesamientoDigital = [
    'titulo' => 'Procesamiento de Imágenes Digitales',
    'intro' => 'Después de la captura, las imágenes pasan por varios pasos de procesamiento:',
    'pasos' => [
        'raw' => ['Procesamiento RAW:', 'Conversión de datos brutos del sensor en imágenes visibles'],
        'color' => ['Corrección de Color:', 'Ajuste del balance de blancos y precisión del color'],
        'ruido' => ['Reducción de Ruido:', 'Eliminación de artefactos digitales y ruido del sensor'],
        'compresion' => ['Compresión:', 'Optimización del tamaño del archivo manteniendo la calidad de la imagen']
    ]
];
?>